(function (e) {
    "use strict";

    function t() {
        e.fn.elExists = function () {
            return this.length > 0
        };
        e("html");
        var t = e(".rn-slick-activation");
        if (t.elExists()) {
            t.each(function (t, s) {
                for (var n = e(this), o = void 0 !== n.data("slick-options") ? n.data("slick-options") : "", a = o.spaceBetween ? parseInt(o.spaceBetween) : 0, i = o.spaceBetween_xl ? parseInt(o.spaceBetween_xl) : 0, r = !!o.isCustomArrow && o.isCustomArrow, l = !0 === r && o.customPrev ? o.customPrev : "", c = !0 === r && o.customNext ? o.customNext : "", d = !!o.vertical && o.vertical, u = !!o.focusOnSelect && o.focusOnSelect, p = o.asNavFor ? o.asNavFor : "", f = !!o.fade && o.fade, m = !!o.autoplay && o.autoplay, v = o.autoplaySpeed ? o.autoplaySpeed : 5e3, h = (!!o.swipe && o.swipe, !!o.adaptiveHeight && o.adaptiveHeight), w = !!o.arrows && o.arrows, y = !!o.dots && o.dots, k = !!o.infinite && o.infinite, g = !!o.centerMode && o.centerMode, b = o.centerPadding ? o.centerPadding : "", x = o.speed ? parseInt(o.speed) : 1e3, C = !0 === w ? o.prevArrow ? '<span class="' + o.prevArrow.buttonClass + '"><i class="' + o.prevArrow.iconClass + '"></i></span>' : '<button class="slick-prev">previous</span>' : "", S = !0 === w ? o.nextArrow ? '<span class="' + o.nextArrow.buttonClass + '"><i class="' + o.nextArrow.iconClass + '"></i></span>' : '<button class="slick-next">next</span>' : "", T = o.slidesToShow ? parseInt(o.slidesToShow, 10) : 1, A = o.slidesToScroll ? parseInt(o.slidesToScroll, 10) : 1, P = void 0 !== n.data("slick-responsive") ? n.data("slick-responsive") : "", B = P.length, D = [], I = 0; I < B; I++) D[I] = P[I];
                n.addClass("slick-carousel-" + t), n.parent().find(".slick-dots").addClass("dots-" + t), n.parent().find(".slick-btn").addClass("btn-" + t), 0 != a && n.addClass("slick-gutter-" + a), 0 != i && n.addClass("slick-gutter-xl-" + i), n.slick({
                    slidesToShow: T,
                    slidesToScroll: A,
                    asNavFor: p,
                    autoplay: m,
                    autoplaySpeed: v,
                    speed: x,
                    infinite: k,
                    arrows: w,
                    dots: y,
                    vertical: d,
                    focusOnSelect: u,
                    centerMode: g,
                    centerPadding: b,
                    fade: f,
                    adaptiveHeight: h,
                    prevArrow: C,
                    nextArrow: S,
                    responsive: D
                }), !0 === r && (e(l).on("click", function () {
                    n.slick("slickPrev")
                }), e(c).on("click", function () {
                    n.slick("slickNext")
                }))
            }), e('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
                t.slick("setPosition")
            })
        }
    }

    function s() {
        e(window).width() > 1024 ? e.stellar() : (e.stellar("destroy"), e(".parallax").css("background-position", ""))
    }

    function n() {
        s()
    }

    function o() {
        e(".humberger-menu").on("click", function (t) {
            t.preventDefault(), e(".header-wrapper").addClass("menu-open"), e("html").css({
                overflow: "hidden"
            })
        }), e(".close-menu").on("click", function (t) {
            t.preventDefault(), e(".header-wrapper").removeClass("menu-open"), e(".has-droupdown > a").removeClass("open").siblings(".submenu").removeClass("active"), e("html").css({
                overflow: ""
            })
        }), e(".has-droupdown > a").on("click", function (t) {
            t.preventDefault(), e(this).siblings(".submenu").toggleClass("active"), e(this).toggleClass("open")
        })
    }

    function a() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("header-wrapper").style.fontSize = "30px";
            document.getElementById("header-wrapper").style.background = "rgba(0, 0, 0, 0.2)";
        } else {
            document.getElementById("header-wrapper").style.fontSize = "90px";
            document.getElementById("header-wrapper").style.background = "none";
        }
    }(new WOW).init(), e(".count").counterUp({
        delay: 10,
        time: 1e3
    }), feather.replace(), e(".play__btn").yu2fvl(), t(), e(".parallax-window").parallax({
        naturalWidth: 600,
        naturalHeight: 400
    }), lightGallery(document.getElementById("animated-thumbnials"), {
        thumbnail: !0,
        animateThumb: !1,
        showThumbByDefault: !1
    }), n(), e(".rn-masonary-wrapper").imagesLoaded(function () {
        e(".messonry-button").on("click", "button", function () {
            var s = e(this).attr("data-filter");
            t.isotope({
                filter: s
            })
        });
        var t = e(".mesonry-list").isotope({
            itemSelector: ".masonry_item",
            percentPosition: !0,
            transitionDuration: "0.7s",
            layoutMode: "fitRows",
            masonry: {
                columnWidth: 1
            }
        })
    }), e(".messonry-button button").on("click", function (t) {
        e(this).siblings(".is-checked").removeClass("is-checked"), e(this).addClass("is-checked"), t.preventDefault()
    }), e.scrollUp({
        scrollText: '<i class="fa fa-angle-up" style="padding: 0; margin: 0;"></i>',
        easingType: "linear",
        scrollSpeed: 900,
        animation: "slide"
    }), o(), e(document).on("click", ".smoth-animation", function (t) {
        t.preventDefault(), e("html, body").animate({
            scrollTop: e(e.attr(this, "href")).offset().top
        }, 500)
    }), e(window).scroll(function () {
        e(this).scrollTop() > 400 ? e(".header--sticky").addClass("sticky") : e(".header--sticky").removeClass("sticky")
    }),
    window.onscroll = function () {
        a()
    }
})(jQuery);