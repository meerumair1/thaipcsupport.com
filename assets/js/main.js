!function(e){"use strict";(new WOW).init();var i,s,n,o=e(window),t=o.width(),a=e(".header-sticky"),l=(e("html"),e("body"));o.on("scroll",function(){var e=o.scrollTop(),i=a.height();t>=320&&(e<i?a.removeClass("is-sticky"):a.addClass("is-sticky"))}),i=e("#scroll-top"),s=0,(n=e(window)).on("scroll",function(){var o=e(this).scrollTop();o>s?i.removeClass("show"):n.scrollTop()>200?i.addClass("show"):i.removeClass("show"),s=o}),i.on("click",function(i){e("html, body").animate({scrollTop:0},600),i.preventDefault()}),o.on("load",function(){e(".preloader-activate").removeClass("preloader-active")}),jQuery(window).on("load",function(){setTimeout(function(){jQuery(".open_tm_preloader").addClass("loaded")},1e3)});var r=e(".navigation-menu--onepage").height()-60;e(".navigation-menu--onepage ul").onePageNav({currentClass:"active",scrollOffset:r});var c=e(".header-area").height();(e(".offcanvas-navigation--onepage ul").onePageNav({currentClass:"active",scrollOffset:c}),e(".has-children--multilevel-submenu").find(".submenu").length)&&e(".has-children--multilevel-submenu").find(".submenu").each(function(){var i=e(this).offset().left,s=e(this).width();o.height();i+s<=o.width()-10||e(this).addClass("left")});e("#mobile-menu-trigger").on("click",function(){e("#mobile-menu-overlay").addClass("active"),l.addClass("no-overflow")}),e("#mobile-menu-close-trigger").on("click",function(){e("#mobile-menu-overlay").removeClass("active"),l.removeClass("no-overflow")}),e(".offcanvas-navigation--onepage ul li a").on("click",function(){e("#mobile-menu-overlay").removeClass("active"),l.removeClass("no-overflow")}),l.on("click",function(i){var s=i.target;e(s).is(".mobile-menu-overlay__inner")||e(s).parents().is(".mobile-menu-overlay__inner")||e(s).is("#mobile-menu-trigger")||e(s).is("#mobile-menu-trigger i")||(e("#mobile-menu-overlay").removeClass("active"),l.removeClass("no-overflow")),e(s).is(".search-overlay__inner")||e(s).parents().is(".search-overlay__inner")||e(s).is("#search-overlay-trigger")||e(s).is("#search-overlay-trigger i")||(e("#search-overlay").removeClass("active"),l.removeClass("no-overflow"))});var p=window.location.pathname,d=p.substr(p.lastIndexOf("/")+1),u=window.location.hash.substr(1);(""!=d&&"/"!=d&&"admin"!=d||""!=u)&&(e(".navigation-menu li").each(function(){e(this).removeClass("active")}),""!=u?e(".navigation-menu li a[href*='"+u+"']").parents("li").addClass("active"):e(".navigation-menu li a[href*='"+d+"']").parents("li").addClass("active")),e(".openmenu-trigger").on("click",function(i){i.preventDefault(),e(".open-menuberger-wrapper").addClass("is-visiable")}),e(".page-close").on("click",function(i){i.preventDefault(),e(".open-menuberger-wrapper").removeClass("is-visiable")}),e("#open-off-sidebar-trigger").on("click",function(){e("#page-oppen-off-sidebar-overlay").addClass("active"),l.addClass("no-overflow")}),e("#menu-close-trigger").on("click",function(){e("#page-oppen-off-sidebar-overlay").removeClass("active"),l.removeClass("no-overflow")}),e("#search-overlay-trigger").on("click",function(){e("#search-overlay").addClass("active"),l.addClass("no-overflow")}),e("#search-close-trigger").on("click",function(){e("#search-overlay").removeClass("active"),l.removeClass("no-overflow")}),e("#hidden-icon-trigger").on("click",function(){e("#hidden-icon-wrapper").toggleClass("active")}),e("#newsletter-popup-close-trigger").on("click",function(){e("#newsletter-popup").removeClass("active")}),e(".share-icon").on("click",function(i){i.preventDefault(),e(".entry-post-share").toggleClass("opened")}),l.on("click",function(){e(".entry-post-share").removeClass("opened")}),e(".entry-post-share").on("click",function(e){e.stopPropagation()});var w=e(".offcanvas-navigation"),v=w.find(".sub-menu");v.parent().prepend('<span class="menu-expand"><i></i></span>'),v.slideUp(),w.on("click","li a, li .menu-expand",function(i){var s=e(this);s.parent().attr("class").match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)&&("#"===s.attr("href")||s.hasClass("menu-expand"))&&(i.preventDefault(),s.siblings("ul:visible").length?(s.parent("li").removeClass("active"),s.siblings("ul").slideUp()):(s.parent("li").addClass("active"),s.closest("li").siblings("li").removeClass("active").find("li").removeClass("active"),s.closest("li").siblings("li").find("ul:visible").slideUp(),s.siblings("ul").slideDown()))}),e(".projects-masonary-wrapper").imagesLoaded(function(){e(".messonry-button").on("click","button",function(){var s=e(this).attr("data-filter");e(this).siblings(".is-checked").removeClass("is-checked"),e(this).addClass("is-checked"),i.isotope({filter:s})});var i=e(".mesonry-list").isotope({percentPosition:!0,transitionDuration:"0.7s",layoutMode:"masonry"})}),e(".masonry-activation").imagesLoaded(function(){e(".masonry-wrap").isotope({itemSelector:".masonary-item",percentPosition:!0,transitionDuration:"0.7s",masonry:{columnWidth:2,percentPosition:!0}})}),e(".bg-img").each(function(i,s){var n=e(s),o=n.data("bg");n.css("background-image","url("+o+")")}),e("#feel-the-wave , .feel-the-wave").length&&e("#feel-the-wave , .feel-the-wave").wavify({height:80,bones:5,amplitude:100,color:"rgba(224,238,255,0.5)",speed:.15}),e("#feel-the-wave-two , .feel-the-wave-two").length&&e("#feel-the-wave-two , .feel-the-wave-two").wavify({height:120,bones:4,amplitude:60,color:"rgba(224,238,255,0.4)",speed:.25}),e(document).ready(function(){new Swiper(".brand-logo-slider__container",{slidesPerView:6,loop:!0,speed:1e3,spaceBetween:30,autoplay:{delay:3e3},breakpoints:{1499:{slidesPerView:6},991:{slidesPerView:4},767:{slidesPerView:3},575:{slidesPerView:2}}}),new Swiper(".top-info-slider__container",{slidesPerView:3,slidesPerGroup:1,loop:!0,speed:1e3,autoplay:!0,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-1",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},1200:{slidesPerView:2},991:{slidesPerView:1},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".single-flexible__container",{slidesPerView:1,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-1",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},1200:{slidesPerView:2},991:{slidesPerView:1},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".service-slider__container",{slidesPerView:4,slidesPerGroup:4,loop:!0,speed:1e3,autoplay:!0,spaceBetween:0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-service",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3,slidesPerGroup:3},1200:{slidesPerView:3,slidesPerGroup:3},991:{slidesPerView:2,slidesPerGroup:2},767:{slidesPerView:1,slidesPerGroup:1},575:{slidesPerView:1,slidesPerGroup:1}}}),new Swiper(".service-slider__project-active",{slidesPerView:1,slidesPerGroup:1,loop:!0,speed:1e3,autoplay:!1,spaceBetween:0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-service",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:1},1200:{slidesPerView:1},991:{slidesPerView:1},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".three-flexible__container",{slidesPerView:3,slidesPerGroup:1,loop:!0,speed:1e3,autoplay:!0,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-3",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},991:{slidesPerView:2},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".auto--center-flexible__container",{slidesPerView:"auto",centeredSlides:!0,freeMode:!1,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-auto",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},991:{slidesPerView:2},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".auto--per-flexible__container",{slidesPerView:"auto",centeredSlides:!1,freeMode:!0,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-5",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},991:{slidesPerView:2},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".auto--pree-mode-flexible__container",{spaceBetween:30,loop:!0,freeMode:!0,slidesPerView:"auto",pagination:{el:".swiper-pagination-6",type:"bullets",clickable:!0},autoplay:{delay:0,disableOnInteraction:!1},speed:7e3}),new Swiper(".carousel-slider__container",{slidesPerView:3,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-9",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},991:{slidesPerView:2},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".projects-slider__container",{slidesPerView:3,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-project",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:3},1200:{slidesPerView:2},991:{slidesPerView:2},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".testimonial-slider__container",{slidesPerView:2,slidesPerGroup:1,loop:!0,speed:1e3,spaceBetween:30,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-t01",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:2},991:{slidesPerView:1},767:{slidesPerView:1},575:{slidesPerView:1}}}),new Swiper(".testimonial-slider__container-two",{slidesPerView:3,slidesPerGroup:1,centeredSlides:!0,loop:!0,speed:1e3,spaceBetween:50,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},pagination:{el:".swiper-pagination-t0",type:"bullets",clickable:!0},breakpoints:{1499:{slidesPerView:2},991:{slidesPerView:1},767:{slidesPerView:1},575:{slidesPerView:1}}})}),e("#fullpage").length&&e("#fullpage").fullpage({scrollBar:!1,navigation:!0,loopBottom:!1,sectionSelector:"section",scrollingSpeed:1e3,autoScrolling:!0,fitToSection:!0,fitToSectionDelay:1e3,afterLoad:function(){e(".fp-viewing-3").addClass("tm-one-page-footer-expanded")}}),e(".chart-progress , .chart-progress__box").appear(function(){e(".chart-progress, .chart-progress__box").circleProgress({startAngle:-Math.PI/4*2})}),e("[data-countdown]").each(function(){var i=e(this),s=e(this).data("countdown");i.countdown(s,function(e){i.html(e.strftime('<div class="single-countdown"><span class="single-countdown__time">%D</span><span class="single-countdown__text">Days</span></div><div class="single-countdown"><span class="single-countdown__time">%H</span><span class="single-countdown__text">Hours</span></div><div class="single-countdown"><span class="single-countdown__time">%M</span><span class="single-countdown__text">Minutes</span></div><div class="single-countdown"><span class="single-countdown__time">%S</span><span class="single-countdown__text">Seconds</span></div>'))})});var g=e("#instafeed");if(g.length){var m=g.attr("data-userid_one"),f=g.attr("data-accesstoken2");new Instafeed({get:"user",userId:m,target:"instafeed",accessToken:f,resolution:"standard_resolution",template:'<div class="grid-item"><div class="instagram-item"><a href="{{link}}" target="_blank" id="{{id}}"><img alt="IT Support Thailand" src="{{image}}" /> <div class="instagram-hvr-content"><span class="tottallikes"><i class="fa fa-heart"></i>{{likes}}</span><span class="totalcomments"><i class="fa fa-comments"></i>{{comments}}</span></div> </a></div></div>',sortBy:"least-recent",limit:6,links:!1}).run()}var b=e(".demo-option-container");e(".quick-option").on("click",function(e){e.preventDefault(),b.toggleClass("open")}),e(".counter").counterUp({delay:10,time:1e3}),e(".single-svg-icon-box").each(function(){var i=e(this),s=i.find(".svg-icon"),n=s.attr("id"),o=s.data("svg-icon"),t=new Vivus(n,{duration:100,file:o});i.on("mouseenter",function(){t.reset().play()})}),e("#DateCountdown").TimeCircles({animation:"smooth",bg_width:.6,fg_width:.025,circle_bg_color:"#eeeeee",time:{Days:{text:"Days",color:"#086AD8",show:!0},Hours:{text:"Hours",color:"#086AD8",show:!0},Minutes:{text:"Minutes",color:"#086AD8",show:!0},Seconds:{text:"Seconds",color:"#086AD8",show:!0}}}),e(".slide-scroll-bg").height(".slide-scroll-bg").scrollie({scrollOffset:0,scrollingInView:function(i){console.log(i);var s=i.data("background");e(".bg-body-color").css("background-color",s)}}),e(".popup-images").lightGallery(),e(".video-popup").lightGallery(),e("#showcoupon").on("click",function(){e("#checkout-coupon").slideToggle(500)}),e("#chekout-box-2").on("change",function(){e(".ship-box-info").slideToggle("100")});var h=e(".reveal-footer").outerHeight();e(window).width()>991&&e(".site-wrapper-reveal").css({"margin-bottom":h+"px"}),e(".loading-item").slice(0,9).show(),e(".loadMore").on("click",function(i){i.preventDefault(),e(".loading-item:hidden").slice(0,3).slideDown(),0==e(".loading-item:hidden").length&&e(".loadMore").text("All items displayed").addClass("noContent")}),e(".loading-item-4").slice(0,8).show(),e(".loadMoreBtn").on("click",function(i){i.preventDefault(),e(".loading-item-4:hidden").slice(0,4).slideDown(),0==e(".loading-item-4:hidden").length&&e(".loadMoreBtn").text("All items displayed").addClass("noContent")})}(jQuery);