$(document).ready(function() {
    "use strict";

    $(".post-carousel-twoCol").slick({
        dots: false,
        arrows : false,
        slidesToShow : 2,
        slidesToSCroll :1,
        responsive : [
            {
                breakpoint : 768,
                settings : {
                    slidesToShow : 2,
                    slidesToSCroll : 2,
                    dots : false,
                    arrows : false,
                }
            },
            {
                breakpoint : 576,
                settings : {
                    slidesToShow : 1,
                    slidesToSCroll : 1,
                    dots:false,
                    arrows : false,
                }
            }
        ]
    });

    $(".carousel-topNav-prev").click(function() {
        $(".post-carousel-twoCol").slick('slickPrev');
    });
    $(".carousel-topNav-next").click(function() {
        $(".post-carousel-twoCol").slick('slickNext');
    });

    $(".post-carousel-widget").slick({
        dots: false,
        arrows : false,
        slidesToShow : 1,
        slidesToSCroll :1,
        responsive : [
            {
                breakpoint : 991,
                settings : {
                    slidesToShow : 2,
                    slidesToSCroll : 1,
                }
            },
            {
                breakpoint : 576,
                settings : {
                    slidesToShow : 1,
                    slidesToSCroll : 1,
                    centerMode : true,
                }
            }
        ]
    });

    $(".carousel-botNav-prev").click(function() {
        $(".post-carousel-widget").slick('slickPrev');
    });
    $(".carousel-botNav-next").click(function() {
        $(".post-carousel-widget").slick('slickNext');
    });


  



    var $header = $(".header-default"),
    $clone = $header.before($header.clone().addClass("clone"));
    $(window).on("scroll", function(){
        var fromTop = $(window).scrollTop();
        $('body').toggleClass("down", (fromTop > 300));
    });
});

$(function(){
    "use strict";

    $('.sidebar').stickySidebar({
        topSpacing : 60,
        bottomSpacing : 30,
        containerSelector : '.main-content',
    });
    $(".submenu").before('<i class="icon-arrow-down switch"></i>');
    $(".vertical-menu li i.switch").on('click', function() {
    var $submenu = $(this).next(".submenu");
    $submenu.slideToggle(300);
    $submenu.parent().toggleClass("openmenu");
});

    $("button.burger-menu").on('click', function(){
        $(".canvas-menu").toggleClass("open");
        $(".main-overlay").toggleClass("active");
    });

    $(".canvas-menu .btn-close, .main-overlay").on('click', function() {
        $(".canvas-menu").removeClass("open");
        $(".main-overlay").removeClass("active");
    });

    $("button.search").on('click',function(){
        $(".search-popup").addClass("visible");
    });

    $(".search-popup .btn-close").on('click', function(){
        $(".search-popup").removeClass("visible");
    });

    $(document).keyup(function(e){
        if(e.key ===  "Escape"){
            $(".search-popup").removeClass("visible");
        }
    });


    // loader tab pane 
    $('button[data-bs-toggle="tab"]').on('click', function() {
        $(".tab-pane").addClass("loading");
        $(".lds-dual-ring").addClass("loading");
        setTimeout(function () {
            $(".tab-pane").removeClass("loading");
            $(".lds-dual-ring").removeClass("loading");
        }, 500);
    });
    // share toggle button 
    $(".post button.toggle-button").each(function() {
        $(this).on('click', function(e){
            $(this).next('.social-share .icons').toggleClass("visible");
            $(this).toggleClass("icon-close").toggleClass("icon-share");
        });
    });

    var list = document.getElementsByClassName('spacer');
    for(var i = 0; i< list.length; i++){
        var size = list[i].getAttribute('data-height');
        list[i].style.height = "" + size + "px";
    }

    var list = document.getElementsByClassName('data-bg-image');

    for(var i =0; i< list.length; i++){
        var bgimg = list[i].getAttribute('data-bg-image');
        list[i].style.backgroundImage = "url('" + bgimg + "')";
    }


});

<script>
    var Calendar = function(t) {
    this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t.DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t.Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    var e = new Date;
    this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
    var r = t.Format;
    this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
};
Calendar.prototype.nextMonth = function() {
    11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this.CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
}, Calendar.prototype.prevMonth = function() {
    0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this.CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
}, Calendar.prototype.previousYear = function() {
    this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
}, Calendar.prototype.nextYear = function() {
    this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
}, Calendar.prototype.showCurrent = function() {
    this.Calendar(this.CurrentYear, this.CurrentMonth)
}, Calendar.prototype.checkActive = function() {
    1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class", "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute("data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(function() {
        document.querySelector(".calendar .header").setAttribute("class", "header active")
    }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document.querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
}, Calendar.prototype.Calendar = function(t, e) {
    "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
    var r = (new Date).getDate(),
        n = (new Date).getMonth(),
        a = (new Date).getFullYear(),
        o = new Date(t, e, 1).getDay(),
        i = new Date(t, e + 1, 0).getDate(),
        u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
        s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
        d = '<div class="table">';
    d += '<div class="row head">';
    for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
    d += "</div>";
    for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
        d += '<div class="row">';
        for (var m = 0; m < 7; m++) {
            if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
            else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
            else {
                d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ? " active" : "") + '"><span>' + h + "</span></div>", l = 1
            }
            c % 7 == 6 && h >= i && (v = 10), c++
        }
        d += "</div>"
    }
    d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
}, window.onload = function() {
    var t = new Calendar({
        RenderID: ".render-a",
        Format: "M"
    });
    t.showCurrent(), t.checkActive();
    var e = document.querySelectorAll(".header [data-action]");
    for (i = 0; i < e.length; i++) e[i].onclick = function() {
        if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document.querySelector(".months").getAttribute("data-loading")) return document.querySelector(".calendar .header").setAttribute("class", "header active"), !1;
        var e;
        document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute("data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e = "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e), document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd", function() {
            document.querySelector(".months").removeAttribute("data-loading")
        }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend", function() {
            document.querySelector(".months").removeAttribute("data-loading")
        })
    }
};
</script>