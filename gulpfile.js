// gulpプラグインの読みこみ
const gulp = require("gulp");
// Sassをコンパイルするプラグインを読み込みます
const sass = require("gulp-sass");
const browserSync = require("browser-sync");
//画像圧縮
const imagemin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const imageminSvgo = require("imagemin-svgo");

const data = require("gulp-data");

// ejs
const ejs = require("gulp-ejs");
const replace = require("gulp-replace");

// CSS
const cached = require("gulp-cached");
const csscomb = require("gulp-csscomb");
const autoprefixer = require("gulp-autoprefixer");
const postcss = require("gulp-postcss");
const plumber = require("gulp-plumber");
const mqpacker = require("css-mqpacker");

// JS
const rename = require("gulp-rename");
const uglify = require("gulp-uglify");

// uglifyをすると関数名や変数名まで圧縮されてしまう
const uglify_option = {
  keep_fnames: true, // function名を圧縮させない場合に指定
  mangle: false, // 変数名を圧縮させない場合に指定
};

// 通知
const notify = require("gulp-notify");

// FTPアップ
const FtpDeploy = require("ftp-deploy");
const ftpDeploy = new FtpDeploy();
// envファイルから情報を取得するためのパッケージ
require("dotenv").config();

//gulpコマンドの省略
const { watch, series, task, src, dest, parallel } = require("gulp");

//読み込み先パス
const srcPath = {
  html: "src/**.html",
  css: "src/dist/css/**/*.css",
  scss: "src/scss/**/*.scss",
  js: "src/js/**/*.js",
  ejs: "src/ejs/**/*.ejs",
  img: "src/img/**",
  all: "src/**",
};

//出力先パス
const destPath = {
  css: "src/dist/css",
  scss: "src/dist/scss",
  js: "src/dist/js",
  ejs: "src/dist/ejs/",
  img: "src/dist/img/",
};

// csscomb
task("csscomb", function () {
  return src(srcPath.css).pipe(csscomb()).pipe(cached("cache")).pipe(dest(destPath.css));
});

//Sass
task("sass", function () {
  return src(srcPath.scss)
    .pipe(
      sass({
        outputStyle: "expanded", // Minifyするなら'compressed'
      })
    )
    .pipe(
      autoprefixer({
        grid: true,
        cascade: false,
      })
    )
    .pipe(csscomb())
    .pipe(postcss([mqpacker()]))
    .pipe(plumber())
    .pipe(gulp.dest(destPath.css))
    .pipe(browserSync.reload({ stream: true }));
});

//html 編集反映
task("html", function () {
  return src(srcPath.html);
});

// js
task("js", function () {
  return src(srcPath.js)
    .pipe(plumber())
    .pipe(uglify(uglify_option))
    .pipe(
      rename({
        extname: ".min.js",
      })
    )
    .pipe(dest(destPath.js))
    .pipe(browserSync.reload({ stream: true }));
});

// ejs
task("ejs", () => {
  return src(["src/ejs/**/*.ejs", "!" + "src/ejs/**/_*.ejs"])
    .pipe(
      data((file) => {
        return {
          filename: file.path,
        };
      })
    )
    .pipe(ejs())
    .pipe(rename({ extname: ".html" }))
    .pipe(replace(/[\s\S]*?(<!DOCTYPE)/, "$1"))
    .pipe(dest("./src"));
});

//画像圧縮
task("imageMin", function () {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          mozjpeg({
            quality: 80,
          }),
          pngquant({
            quality: [0.7, 0.8],
          }),
          imagemin.svgo(),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest(destPath.img));
});

// browser-sync
task("browser-sync", () => {
  return browserSync.init({
    // WPの場合は以下を記入。flywheelのホストネームを記入。
    proxy: "localhost:10013",
    watchOptions: {
      debounceDelay: 500, //1秒間、タスクの再実行を抑制
    },
    open: true,

    // 静的ページは以下を記入。
    // server: {
    //   baseDir: "./src",
    // },
    // port: 10013,
    // reloadOnRestart: true,
  });
});

// browser-sync reload
task("reload", (done) => {
  browserSync.reload();
  done();
});

//接続情報を設定 .envファイルよりサーバー情報を取得
const ftpOptions = {
  user: process.env.FTP_USER,
  password: process.env.FTP_PASS,
  host: process.env.FTP_HOST,
  localRoot: "/Users/rank2/Local Sites/portfolio02/app/public/wp-content/themes/portfolio02/src",
  remoteRoot: "/rik-portfolio.com/public_html/wp-content/themes/portfolio02/src/",
  include: ["*"],
  deleteRemote: false,
};

//FTP
gulp.task("ftp", (done) => {
  ftpDeploy.deploy(ftpOptions, (error) => {
    if (error) {
      console.log("Error", error);
    }
  });
  done();
});

//watch
// 定義したタスク関数を記述していく
task("watch", (done) => {
  watch([srcPath.css], series("csscomb"));
  watch([srcPath.img], series("imageMin"));
  watch([srcPath.scss], series("sass", "reload"));
  watch([srcPath.js], series("js", "reload"));
  watch([srcPath.ejs], series("ejs", "reload"));
  watch([srcPath.html], series("html", "reload"));
  watch([srcPath.all], series("reload"));
  // watch([destPath.css, destPath.js], series("ftp"));
  // watch(["src/*"], series("ftp", "reload"));
  done();
});

// gulp で起動
task("default", parallel("watch", "browser-sync", "sass", "js"));
