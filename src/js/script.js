"use strict";
const $ = jQuery.noConflict();

$(function () {
  // ページ内リンク
  $('a[href^="#"]').on("click", function () {
    $(".skill__card").removeClass("active");
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - 80;
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    $(href).addClass("active");
  });

  $(".gNav__link").click(function () {
    $(".header").removeClass("show");
  });

  const imageArr = [];
  const img = $(".photos__listItem");
  let currentNum = 0;
  let src;
  let text;

  $(".photos__listItem").each(function () {
    // li指定にする、配列の中に↑上で取得した画像srcを格納する
    // imageArr.push($(this).find("img").attr("src"));
    imageArr.push($(this));
  });

  img.click(function () {
    const imageNum = $(this).index();
    $(".modal").addClass("active");
    currentNum = imageNum;

    // 最初の画像を押したときは前へボタンを消して、先ボタンを表示させる
    if (currentNum === 0) {
      $(".modal__prev").css("visibility", "hidden");
      $(".modal__next").css("visibility", "visible");
    }

    // 最初及び最後の画像以外をクリックしたときは前後ボタン表示する
    if (currentNum > 0) {
      $(".modal__prev").css("visibility", "visible");
      $(".modal__next").css("visibility", "visible");
    }

    // 最後の画像を押したときは次へボタンを非表示西、前ボタンを表示させる
    if (currentNum === imageArr.length - 1) {
      $(".modal__next").css("visibility", "hidden");
      $(".modal__prev").css("visibility", "visible");
    }

    src = $(this).find("img").attr("src");
    text = $(this).text();
    $(".modal__image").attr("src", src);
    $(".modal__caption").text(text);
  });

  // 前のボタン
  $(".modal__prev").click(function () {
    prevImage();
  });

  // 先のボタン
  $(".modal__next").click(function () {
    nextImage();
  });

  // 閉じるボタン
  $(".modal__close").click(function () {
    closeModal();
  });

  function prevImage() {
    // currentNumが1未満の時、currentNumを0にしてそれ以上の処理をさせない。
    if (currentNum < 1) {
      currentNum = 0;
      return false;
    }

    currentNum--;
    // console.log(currentNum);
    $(".modal__image").attr("src", imageArr[currentNum].find("img").attr("src"));
    $(".modal__caption").text(imageArr[currentNum].text());

    if (currentNum === 0) {
      $(".modal__prev").css("visibility", "hidden");
    }

    if (currentNum < imageArr.length - 1) {
      $(".modal__next").css("visibility", "visible");
    }
  }

  function nextImage() {
    // currentNumが画像の点数の最大数と同じだった場合、それ維持以上の処理をさせない。
    if (currentNum === imageArr.length - 1) {
      currentNum = imageArr.length - 1;
      return false;
    }

    currentNum++;
    // console.log(currentNum);
    $(".modal__image").attr("src", imageArr[currentNum].find("img").attr("src"));
    $(".modal__caption").text(imageArr[currentNum].text());
    if (currentNum === imageArr.length - 1) {
      $(".modal__next").css("visibility", "hidden");
    }
    if (currentNum > 0) {
      $(".modal__prev").css("visibility", "visible");
    }
  }

  function closeModal() {
    $(".modal").removeClass("active");
    currentNum = 0;
  }

  // キーボード押したとのイベント←、→
  $(window).on("keydown", function (e) {
    if ($(".modal").hasClass("active")) {
      if (e.keyCode === 37) {
        // 左押した時
        prevImage();
      } else if (e.keyCode === 39) {
        // 右押したとき
        nextImage();
      } else if (e.keyCode === 27) {
        // esc
        closeModal();
      }
    }
  });

  // 閉じるボタン
  $(".header__button").click(function () {
    $("header").toggleClass("show");
  });

  const cardArr = [];
  $(".works__card").each(function () {
    cardArr.push($(this));
  });

  // for (let i = 0; i < cardArr.length; i++) {
  //   console.log(cardArr[i].offset().top);
  //   console.log(cardArr[i].attr("class"));
  //   if (windowScroll > cardArr[i].offset().top - 120) {
  //     cardArr[i].attr("class").addClass("active");
  //   }
  // }

  const menuArr = [];
  $(".gNav__link").each(function () {
    menuArr.push($(this));
  });
  // 配列を回して文字列"CONTACT"が含まれている.gNav__linkにのみクラスを付与
  for (let i = 0; i < menuArr.length; i++) {
    if (menuArr[i].text().match(/CONTACT/)) {
      menuArr[i].addClass("gNav__link--deco");
    }
  }

  // thanksページタイトル文
  $(".TITLE--thanks").addClass("active");

  // もし現在のドメインに'profile'という文字があった場合のみ以下を処理
  if (location.href.match(/profile/)) {
    // 手書きsvgアニメーション
    new Vivus("Name", {
      //ここにsvgタグにつけたIDを書き込む
      type: "oneByOne",
      start: "inViewport",
      duration: 200,
      forceRender: false,
      animTimingFunction: Vivus.LINEAR,
    });

    const sectionArr = [];
    $("section").each(function () {
      sectionArr.push($(this));
    });

    // プロフィール写真フェード
    $(window).on("load", function () {
      $(".about__wrapper").addClass("active");
    });

    for (let i = 0; i < sectionArr.length; i++) {
      $(window).scroll(function () {
        const windowScroll = $(window).scrollTop();
        if (windowScroll > sectionArr[1].offset().top - 80) {
          $(".character__wrapper").addClass("active");
        }
        if (windowScroll > sectionArr[2].offset().top - 80) {
          $(".career__wrapper").addClass("active");
        }
        if (windowScroll > sectionArr[3].offset().top - 80) {
          $(".vision__wrapper").addClass("active");
        }
        if (windowScroll > sectionArr[4].offset().top - 80) {
          $(".photos__listFrame").addClass("active");
        }
      });
    }
  }

  $(".blocks-gallery-grid").addClass("margin-auto");

  const bodyId = $("body").attr("id");
  if (bodyId === "top") {
    $(".header,.header__button").addClass("active");

    $(window).scroll(function () {
      const windowScroll = $(window).scrollTop();

      if (windowScroll > $("#mainVisual").offset().top) {
        $(".header").addClass("active");
        $(".header__button").removeClass("active");
      }

      if (windowScroll < $("#works").offset().top - 240) {
        $(".header").removeClass("active");
        $(".header__button").addClass("active");
      }

      if (windowScroll > $("#profile").offset().top - 240) {
        $(".profile__wrapper").addClass("active");
      }

      if (windowScroll > $("#skill").offset().top - 240) {
        $(".skill__listFrame").addClass("active");
      }

      if (windowScroll > $("#blog").offset().top - 240) {
        $(".blog__wrapper").addClass("active");
      }

      for (let i = 0; i < cardArr.length; i++) {
        if (windowScroll > cardArr[i].offset().top - 560) {
          cardArr[i].addClass("active");
        }
      }
    });
  }
});
