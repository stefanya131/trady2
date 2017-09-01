$(function() {
        $('.material-card > .mc-btn-action').click(function () {
            var card = $(this).parent('.material-card');
            var icon = $(this).children('i');
            icon.addClass('fa-spin-fast');

            if (card.hasClass('mc-active')) {
                card.removeClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-arrow-left')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-bars');

                }, 800);
            } else {
                card.addClass('mc-active');

                window.setTimeout(function() {
                    icon
                        .removeClass('fa-bars')
                        .removeClass('fa-spin-fast')
                        .addClass('fa-arrow-left');

                }, 800);
            }
        });
    });

var toggler = '.navbar-toggle';
var pagewrapper = '#page-content';
var navigationwrapper = '.navbar-header';
var menuwidth = '100%';
var slidewidth = '300px';
var menuneg = '-300px';
var slideneg = '-300px';
var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';

$("body").on("click",".full-dimming-overlay",function(){
      if($("#slidemenu").css('left').replace(/[^-\d\.]/g, '')==="0"){
        $(toggler).trigger("click");
      }
    });

    $("#slide-nav").on("click", toggler, function (e) {
      var selected = $(this).hasClass('slide-active');
      if(!selected){
        stopScrolling(1);
        $(".full-dimming-overlay").css({display:"block"}).stop().animate({opacity:0.88},{duration:1000});
      }
      else{
        if($(".search-popup").css("left")!=="0px"&&$(".login-popup").css("left")!=="0px"&&$(".review-popup").css("left")!=="0px"&&$(".pm-popup").css("left")!=="0px"){
          stopScrolling(0);
        }
        $(".full-dimming-overlay").stop().animate({opacity:0},{duration:1000,complete:function(){
          $(".full-dimming-overlay").css({display:"none"});
        }});
      }
      $('#slidemenu').stop().animate({
          left: selected ? menuneg : '0px'
      });
      $('#navbar-height-col').stop().animate({
          left: selected ? slideneg : '0px'
      });
      $(pagewrapper).stop().animate({
          left: selected ? '0px' : slidewidth
      });
      $(navigationwrapper).stop().animate({
          left: selected ? '0px' : '225px'
      });
      $(this).toggleClass('slide-active', !selected);
      $('#slidemenu').toggleClass('slide-active');
      $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');
    });

    $(".listing-item-link").on({
      "mouseenter": function(){
        var _ = $(this);
        if(_.parent().parent().parent().hasClass("grid2")||_.parent().parent().parent().hasClass("grid3")){
          _.siblings('a, .listing-item-rating').not(".listing-item-author").stop().animate({top: "-10px", opacity: 0});
          _.siblings('.listing-item-author').stop().animate({top: "110px", opacity: 0});
          _.siblings('.listing-item-date').stop().animate({top: "-60px", opacity: 0});
        }
        else if(_.parent().parent().parent().parent().hasClass("grid6")&&_.parent().parent().parent().parent().hasClass("rounded-pic")){
          _.siblings('a').not(".listing-item-author").stop().animate({top: "-20px", opacity: 0});
          _.find('.listing-item-rating').stop().animate({top: "-20px", opacity: 0});
          _.siblings('.listing-item-author').stop().animate({top: 0, opacity: 0});
          _.siblings('.listing-item-date').stop().animate({top: "-60px", opacity: 0});
        }
        else{
          _.siblings('a, .listing-item-rating').not(".listing-item-author").stop().animate({top: "-10px", opacity: 0});
          _.siblings('.listing-item-author').stop().animate({top: 0, opacity: 0});
          _.siblings('.listing-item-date').stop().animate({top: "-60px", opacity: 0});
        }
      },
      "mouseleave": function(){
        var _ = $(this);
        if(_.parent().parent().parent().hasClass("grid2") || _.parent().parent().parent().hasClass("grid3")){
          _.siblings('.listing-item-rating').stop().animate({top: "10px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-rating').css({top:""});
          }});
          _.siblings('.category-icon').stop().animate({top: "25px", opacity: 1},{complete:function(){
            _.siblings('.category-icon').css({top:""});
          }});
          _.siblings('.listing-item-author').stop().animate({top: "84px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-author').css({top:""});
          }});
          _.siblings('.listing-item-date').stop().animate({top: "-5px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-date').css({top:""});
          }});
        }
        else if(_.parent().parent().parent().parent().hasClass("grid6")&&_.parent().parent().parent().parent().hasClass("rounded-pic")){
          _.find('.listing-item-rating').stop().animate({top: "-8px", opacity: 1},{complete:function(){
            _.find('.listing-item-rating').css({top:""});
          }});
          _.siblings('a').not(".listing-item-author").stop().animate({top: "35px", opacity: 1},{complete:function(){
            _.siblings('a').not(".listing-item-author").css({top:""});
          }});
          _.siblings('.listing-item-author').stop().animate({top: "-44px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-author').css({top:""});
          }});
          _.siblings('.listing-item-date').stop().animate({top: "-5px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-date').css({top:""});
          }});
        }
        else if(_.parent().parent().parent().hasClass("squared")||(_.parent().parent().parent().hasClass("squared-mobile")&&viewport().width<=600)){
          _.siblings('a, .listing-item-rating').not(".listing-item-author").stop().animate({top: "6%", opacity: 1},{complete:function(){
            _.siblings('a, .listing-item-rating').not(".listing-item-author").css({top:""});
          }});
          _.siblings('.listing-item-author').stop().animate({top: "-44px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-author').css({top:""});
          }});
          _.siblings('.listing-item-date').stop().animate({top: "-5px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-date').css({top:""});
          }});
        }
        else{
          _.siblings('a, .listing-item-rating').not(".listing-item-author").stop().animate({top: "12%", opacity: 1},{complete:function(){
            _.siblings('a, .listing-item-rating').not(".listing-item-author").css({top:""});
          }});
          _.siblings('.listing-item-author').stop().animate({top: "-44px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-author').css({top:""});
          }});
          _.siblings('.listing-item-date').stop().animate({top: "-5px", opacity: 1},{complete:function(){
            _.siblings('.listing-item-date').css({top:""});
          }});
        }
      }
    });