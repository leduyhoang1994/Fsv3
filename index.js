var slide_index = 2;
var avr_slide_index = 1;
var slide_hover = false;
var currentSlideIndex = 2;
var moveTo = 1;
var transitionDone = true;
var lastScrollTop = 0;
var sectionsList = new Array(10);

$(document).ready(function($) {
   if( !isHell ) { 
      collectSectionPosition();
      hideAllScrollToShow(startInterval);
      //$('#section3').parallax("50%", 0.3);
   }else{
      setInterval(function(){
         if(!slide_hover){
            switchSlideTo(slide_index);
            slide_index++;
            if(slide_index == 4){
               slide_index = 1;
            }
         }
      }, 2000);

      setInterval(function(){
         avrSlideTo(avr_slide_index);
         avr_slide_index++;
         if(avr_slide_index == 4){
            avr_slide_index = 1;
         }
      }, 3500);
   }
   //$.scrollSpeed(150, 800);
   resizeElement();
});

function startInterval(){
   setInterval(function(){
      if(!slide_hover){
         switchSlideTo(slide_index);
         slide_index++;
         if(slide_index == 4){
            slide_index = 1;
         }
      }
   }, 2000);

   setInterval(function(){
      avrSlideTo(avr_slide_index);
      avr_slide_index++;
      if(avr_slide_index == 4){
         avr_slide_index = 1;
      }
   }, 3500);
   checkScrollToShow();
}

function hideAllScrollToShow(callback){
   $('*[anim^="anim"]').each(function(index, el) {
      $(this).css('opacity', 0);
   });
   callback();
}

function showSection(section){
   $('#'+section+' *[anim^="anim"]').each(function(index, el) {
      var attr = ($(this).attr('anim'))+"";
      var time = attr.split("-")[1];
      var func = $(this).attr('animFunc');
      animateSelector($(this),func,time);
   });
}

function collectSectionPosition(){
   $("div.section").each(function(index, el) {
      //var heightToShow = $(this).attr("heightToShow");
      var heightToShow = $(this).offset().top;
      sectionsList[$(this).attr("id")] = heightToShow;
      console.log(heightToShow);
   });
}

function checkScrollToShow(){
   var scrollTop = $(this).scrollTop() + $(this).height() / 2;
   for(var element in sectionsList){
      if(scrollTop >= sectionsList[element]){
         showSection(element);
      }
   }
}

function resizeElement(){
   $('#navspace').height($('.container-fluid').height());
   $('#fs-slideshow').height($('#fs-slideshow').width() * (9/16));
}

var currentSlide = "fs-slide2";

function switchSlide(selector){
   selector = $(selector).attr('value');
   var temp = $(currentSlide).attr('class');
   $("#"+currentSlide).attr('class', '');
   $("#"+currentSlide).attr('class', $("#"+selector).attr('class'));
   $("#"+selector).attr('class', '');
   $("#"+selector).attr('class', "fs-slide fs-slide2");
   $("#section2 input").removeAttr("checked");
   $('input[value='+selector+']').attr('checked', 'checked');
   $('.fs-slide-content').addClass('hidden-sm hidden-xs');
   $('.fs-slide-content').removeClass('selected');
   $('.fs-slide-content[value='+selector+']').removeClass('hidden-sm hidden-xs');
   $('.fs-slide-content[value='+selector+']').addClass('col-lg col-sm-7 col-md-7 selected');
   currentSlide = selector;
}

function switchSlideTo(index){
   if(currentSlideIndex == index){
      return;
   }
   transitionDone = false;
   //alert($('#slide-image1').delay());
   // console.log($('#slide-image1').delay());
   // var time = $('#slide-image1').css('transition-duration').replace(/s/g,'');
   time = 0.7;
   time *= 1000;
   var slideTemp = '#slide-image';
   var slideCurrentClassName = $('#slide-image'+currentSlideIndex).attr("class");
   var slideIndexClassName = $('#slide-image' + index).attr("class");
   var slideOtherClassName = $('#slide-image' + (6 - index - currentSlideIndex)).attr("class");
   var otherSlideIndex = (6 - index - currentSlideIndex);

   $('.fs-slide-content').addClass('hidden-sm hidden-xs');
   $('.fs-slide-content').removeClass('selected');
   $('.fs-slide-content[value='+index+']').removeClass('hidden-sm hidden-xs');
   $('.fs-slide-content[value='+index+']').addClass('col-lg col-sm-7 col-md-7 selected');
   $('#fs-content-slide'+index).addClass('selected');
   $('#fs-slide-btn input').removeAttr('checked');
   $('#fs-rad'+index).attr('checked',true);

   $('#slide-image1').removeClass('left centered right');
   $('#slide-image2').removeClass('left centered right');
   $('#slide-image3').removeClass('left centered right');

   $(slideTemp + otherSlideIndex).addClass(slideIndexClassName);
   $(slideTemp + currentSlideIndex).addClass(slideOtherClassName);
   $(slideTemp + index).addClass(slideCurrentClassName);
   currentSlideIndex = index;

   setTimeout(function(){ transitionDone = true; }, time);
}

function animateSelector(selector,func,time){
   $(selector).css({
      'animation-delay': time+'s',
      '-webkit-animation-delay:': time+'s'
   });
   $(selector).addClass(func);
}

$(window).resize(function(event) {
   resizeElement();
});

$(window).scroll(function(event){
   checkScrollToShow();
   var width = $(window).width(), height = $(window).height();
   if(width <= 768){
      var scrollTop = $(this).scrollTop();
      if (scrollTop > lastScrollTop){
         // upscroll code
         if(scrollTop >= $('nav.navbar').height()){
            $('nav.navbar').css({
               top: -$('nav.navbar').height()-15
            });
         }else{
            $('nav.navbar').css({
               top: 0
            });
         }
      } else {
         $('nav.navbar').css({
            top: 0
         });
      }
      lastScrollTop = scrollTop;
   }
});

function avrSlideTo(index){
   var position = 0.0;
   switch (index) {
      case 1:
         position = 0.0;
         break;
      case 2:
         position = 33.33;
         break;
      case 3:
         position = 66.66;
         break;
   }
   var position = ($('.avr-slide').prop("scrollWidth") * position) / 100;
   $('.avr-slide').animate( { scrollLeft: position}, 500 ,function(){

   });
   $('#avr-buttons input').removeAttr('checked');
   $('#avr-rad'+index).attr("checked","true");

   $('.avl-name p').css('color', '');
   $('.avl-avt-ctn:nth-child('+index+') .avl-name p').css('color', '#c4142b');

   $('.avl-image').css({
      border: '',
      filter: ''
   });
   $('.avl-avt-ctn:nth-child('+index+') .avl-image').css({
      border: '#c4142b 2px solid',
      filter: 'grayscale(0%)'
   });

   $('.avl-circle').css('background-color', '');
   $('.avl-avt-ctn:nth-child('+index+') .avl-circle').css('background-color', '#c4142b');
   $('.avl-dotted').css('border-color', '');
   $('.avl-avt-ctn:nth-child('+index+') .avl-dotted').css('border-color', '#c4142b');
}