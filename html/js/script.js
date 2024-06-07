jQuery(document).ready(function ($) {

  /* animations*/
  AOS.init({
    disable: 'mobile', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  });

  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });

  //scroll up/down
  var lastScrollTop = 0;
  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
      $('body').addClass('is-down');
    } else {
      $('body').removeClass('is-down');
    }
    lastScrollTop = st;
  });

  $('.marquee1').marquee({
    duration: 35000,
    gap:0,
    delayBeforeStart: 0,
    direction: 'left',
    duplicated: true,
    loop:true,
    startVisible: true,
  });

  $('.title').each(function(){
    var words = $(this).text().split(' ');
    var wrappedWords = $.map(words, function(word){
      return '<span>' + word + '</span>';
    });
    $(this).html(wrappedWords.join(' '));
  });

  //title scroll
  const myspans11 = gsap.utils.toArray(".title-black-1");

  myspans11.forEach((changeOpacity) => {
    const spans = changeOpacity.querySelectorAll("span");
    gsap
      .timeline({
        scrollTrigger: {
          trigger: spans,
          scrub: 0.3,
          start: "top 40%",
          end: "top 20%",
          markers: false
        }
      })
      .to(spans, {
        opacity: 1,
        duration: 1,
        color: "#000",
        ease: "none",
        stagger: 1
      });
  });


  const myspans12 = gsap.utils.toArray(".title-black-2");

  myspans12.forEach((changeOpacity) => {
    const spans = changeOpacity.querySelectorAll("span");
    gsap
      .timeline({
        scrollTrigger: {
          trigger: spans,
          scrub: 0.3,
          start: "top 40%",
          end: "top 20%",
          markers: false
        }
      })
      .to(spans, {
        opacity: 1,
        duration: 1,
        color: "#000",
        ease: "none",
        stagger: 1
      });
  });

  const myspans21 = gsap.utils.toArray(".title-white-1");

  myspans21.forEach((changeOpacity) => {
    const spans = changeOpacity.querySelectorAll("span");
    gsap
      .timeline({
        scrollTrigger: {
          trigger: spans,
          scrub: 0.3,
          start: "top 60%",
          end: "top 40%",
          markers: false
        }
      })
      .to(spans, {
        opacity: 1,
        duration: 1,
        color: "#f1f1f1",
        ease: "none",
        stagger: 1
      });
  });


  const myspans22 = gsap.utils.toArray(".title-white-2");

  myspans22.forEach((changeOpacity) => {
    const spans = changeOpacity.querySelectorAll("span");
    gsap
      .timeline({
        scrollTrigger: {
          trigger: spans,
          scrub: 0.3,
          start: "top 60%",
          end: "top 40%",
          markers: false
        }
      })
      .to(spans, {
        opacity: 1,
        duration: 1,
        color: "#f1f1f1",
        ease: "none",
        stagger: 1
      });
  });

  //parallax
  if(window.innerWidth > 575){
    var rellax = new Rellax('.rellax', {
      center:true
    });
  }

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //sub-menu open/close - mob-menu
/*  $(document).on('click', '.mob-menu .sub-item>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });*/

  if($('.img-3d').length){

    var textPos = $('.img-3d').offset().top;
    $(window).scroll(function() {

      var topOfWindow = $(window).scrollTop();

      if($('.img-3d').hasClass('stop')){
        return;
      }

      if (textPos < topOfWindow + 500) {
        $('.img-3d .item-1 .number span').animateNumber({
          number: 1709
        },2500);
        $('.img-3d .item-2 .number span').animateNumber({
          number: 32.1,
          numberStep: function(now, tween) {
            var target = $(tween.elem)

            target

              .prop('number', now)

              .text(now);
          },
        },1000);

        $('.img-3d .item-3 .number span').animateNumber({
          number: 609
        },3000);
        $('.img-3d .item-4 .number span').animateNumber({
          number: 93
        },2000);
        $('.img-3d').addClass('stop');
      }
    });
  }

  //accordion
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      let itemIndex = $(this).closest('.accordion-item').index() + 1;
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");

      $('.materials .img').slideUp();
      $('.materials .img-'+itemIndex).slideDown();
    })
  });

  //select
  $('.select-block select').niceSelect();


  //slider
  var swiperStarted = new Swiper(".started-slider", {
    slidesPerView: "auto",
    spaceBetween: 15,
    loop: true,
    pagination: {
      el: ".started-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".started-next",
      prevEl: ".started-prev",
    },
    breakpoints: {
      640: {
        spaceBetween: 34,
      },
    },
  });

  //cut text
  $('.breadcrumb li:last-child').Cuttr({
    truncate: 'characters',
    length: 20
  });

  //slider
  var swiperStep = new Swiper(".step-slider", {
    autoHeight: true,
    spaceBetween: 20,
    pagination: {
      el: ".step-pagination",
      type: "fraction",
    },
    speed:700,
    allowTouchMove:false,
    touchRatio: 1,
    noSwiping: false,
    preventClicks :true,
    a11y: false,
  });

  //validate form

  $.validator.addMethod('emailtld', function(val, elem){
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(!filter.test(val)) {
      return false;
    } else {
      return true;
    }
  }, 'Please enter your email');

  $('.form-step').validate({
    rules: {
      name:{
        minlength: 3,
        required: true,
      },
      company:{
        minlength: 3,
        required: true,
      },
      tel: {
        minlength: 10,
        required: true,
      },
      emailStep: {
        minlength: 7,
        required: true,
        emailtld: true,
      },
    },
    messages: {
      name:{
        minlength: "Enter at least 3 characters"
      },
      company:{
        minlength: "Enter at least 3 characters"
      },
      emailStep:{
        minlength: "Please enter your email",
      },
      tel:{
        minlength: "Please enter your phone number"
      },
    }
  });

  $('.form-step .input-wrap-val input').on('keyup blur', function () {

    if ($(this).valid()) {
      $(this).closest('.input-wrap').removeClass('input-wrap-val')
    } else {
      $(this).closest('.input-wrap').addClass('input-wrap-val')
    }

    let item = $(this).closest('.swiper-slide').find('.input-wrap-val').length,
      itemBTN = $(this).closest('.swiper-slide').find('.btn-wrap');

    if(item < 1){
      itemBTN.addClass('is-go-next')
    }else{
      itemBTN.removeClass('is-go-next')
    }

  });

  $(document).on('click', '.form-step .nice-select .option', function (e){
    $(this).closest('.select-block').removeClass('input-wrap-val');

    let item = $(this).closest('.swiper-slide').find('.input-wrap-val').length,
      itemBTN = $(this).closest('.swiper-slide').find('.btn-wrap');

    if(item < 1){
      itemBTN.addClass('is-go-next')
    }else{
      itemBTN.removeClass('is-go-next')
    }
  });


  //next slide
  $(document).on('click', '.btn-next', function (e){
    e.preventDefault();
    swiperStep.slideNext();
  });

  //prev slide
  $(document).on('click', '.btn-back', function (e){
    e.preventDefault();
    swiperStep.slidePrev();
  });

  //replace
  $('input:file').change(function(){
    $this = $(this);
    $name = $this.val().replace('C:\\fakepath\\', '');
    $(this).parent('.wrap').find('.name-file').text($name);
    $(this).parent('.wrap').find('.wrap-icon').hide();
    $(this).closest('.input-wrap-file').removeClass('input-wrap-val');

    let item = $(this).closest('.swiper-slide').find('.input-wrap-val').length,
      itemBTN = $(this).closest('.swiper-slide').find('.btn-wrap');

    if(item < 1){
      itemBTN.addClass('is-go-next')
    }else{
      itemBTN.removeClass('is-go-next')
    }

  });
});