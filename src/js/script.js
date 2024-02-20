jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  let scrollPosition = 0;

  function openDrawer() {
    scrollPosition = $(window).scrollTop();
    $(".js-drawer").addClass("is-open");
    $(".js-hamburger").addClass("is-open");
    $("body").addClass("is-fixed").css("top", -scrollPosition);
  }

  function closeDrawer() {
    $(".js-drawer").removeClass("is-open");
    $(".js-hamburger").removeClass("is-open");
    $("body").removeClass("is-fixed").css("top", "");
    $(window).scrollTop(scrollPosition);
  }

  $(".js-hamburger").click(function () {
    $(this).toggleClass("is-open");
    if ($(this).hasClass("is-open")) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });

  $(".js-drawer, .js-drawer a[href]").on("click", function () {
    closeDrawer();
  });

  $(window).on("resize", function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
  });

  // ページトップボタン
  const pageTop = $(".js-pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    var scrollPosition = $(this).scrollTop();
    var windowHeight = $(this).height();
    var bodyHeight = $(document).height();
    var footerHeight = $(".p-footer").outerHeight();
    if (scrollPosition > 70) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
    if (bodyHeight - scrollPosition <= windowHeight + footerHeight) {
      pageTop.css({
        position: "absolute",
        bottom: footerHeight + 6 + "px",
      });
    } else {
      pageTop.css({
        position: "fixed",
        bottom: "20px",
      });
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      300,
      "swing"
    );
    return false;
  });

  // アンカーリンク
  // $(document).ready(function () {
  //   // 別ページからの遷移を考慮して、ページ読み込み時とハッシュ変更時に処理を実行
  //   function adjustAnchor() {
  //     var headerHeight = $(".js-header").outerHeight(); // ヘッダーの動的な高さを取得
  //     var hash = window.location.hash; // 現在のハッシュを取得

  //     if (hash) {
  //       var target = $(hash);
  //       if (target.length) {
  //         var position = target.offset().top - headerHeight; // ヘッダーの高さを考慮した位置を計算
  //         $("html, body").stop().animate(
  //           {
  //             scrollTop: position,
  //           },
  //           600,
  //           "swing"
  //         );
  //       }
  //     }
  //   }

  //   // ページ読み込み時とハッシュが変更された時にアンカー位置調整を実行
  //   $(window).on("load hashchange", function () {
  //     adjustAnchor();
  //   });

  //   // ページ内リンクに対するクリックイベント
  //   $('a[href^="#"]').click(function (e) {
  //     var href = $(this).attr("href");
  //     // 別ページへのアンカーの場合はデフォルトの動作を実行
  //     if (href.startsWith("#") && href.length > 1) {
  //       // ハッシュ変更をトリガーとして位置調整を実行する
  //       window.location.hash = href;
  //       return false; // デフォルトのアンカー動作をキャンセル
  //     }
  //   });
  // });

  // memberSwiper
  const memberSwiper = new Swiper(".js-member-swiper", {
    // loop: true,
    slidesPerView: "auto",
    spaceBetween: 40,
    // centerdSlides: false,

    // Navigation arrows
    navigation: {
      nextEl: ".js-member-swiper-ui .swiper-button-next",
      prevEl: ".js-member-swiper-ui .swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".js-member-swiper-ui .swiper-scrollbar",
      hide: false,
      dragSize: 318,
    },
  });

  // seminarSwiper
  const seminarSwiper = new Swiper(".js-seminar-swiper", {
    // loop: true,
    slidesPerView: "auto",
    spaceBetween: 40,
    // centerdSlides: false,

    // Navigation arrows
    navigation: {
      nextEl: ".js-seminar-swiper-ui .swiper-button-next",
      prevEl: ".js-seminar-swiper-ui .swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".js-seminar-swiper-ui .swiper-scrollbar",
      hide: false,
      dragSize: 318,
    },
  });

  // infomationTab
  $(".js-tab-menu").click(function () {
    $(".js-tab-menu").removeClass("is-active");
    $(this).addClass("is-active");
    $(".js-tab-content").removeClass("is-active");
    const index = $(this).index();
    $(".js-tab-content").eq(index).addClass("is-active");
  });
});
