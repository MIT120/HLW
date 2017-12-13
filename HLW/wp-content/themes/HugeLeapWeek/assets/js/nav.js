var animOut = 'slideOutRight';
var animArray = ['slideOutRight', 'slideInRight', 'zoomIn' , 'zoomOut' , 'fadeInUp', 'fadeIn']
var namesHeader = ['H', 'S', 'A' , 'C' , 'T']
var animIn = 'animated slideInRight';
var animInWindow = 'zoomIn';
var animOutWindow = 'animated zoomOut';
var animPulse = 'animated pulse';
var animDelay = 'animation-delay: 3s;'
var animReset = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
var arrow = [];
var cardContent = [];

//presets
function initEachSection(){
    var controller = new ScrollMagic.Controller();

    $('section[name*=section]').each(function(){
      console.log(this);

      var scene = new ScrollMagic.Scene({
          triggerElement: this,
          triggerHook: 0.95
      })
      .setClassToggle(this, animArray[5])
      .addIndicators({
          name: 'Zoom Scene',
          colorTrigger: 'black',
          colorStart: '#75C695',
          colorEnd: 'red'
      })
      .addTo(controller);
    });

}
  $('span[name*=nameTarget]').each(function(){
      $(this).addClass('is-hidden');
  });
$('i[name*=li'+ namesHeader[0] + ']').mouseover(function(){
  $('span[name*=nameTarget' + namesHeader[0] + ']').addClass(animArray[5]);
  $('span[name*=nameTarget'+ namesHeader[0] + ']').removeClass('is-hidden');
});
$('i[name*=li'+ namesHeader[0] + ']').mouseout(function(){
        $('span[name*=nameTarget'+ namesHeader[0] + ']').removeClass(animArray[5]);
        $('span[name*=nameTarget'+ namesHeader[0] + ']').addClass('is-hidden');

});
$('i[name*=li'+ namesHeader[1] + ']').mouseover(function(){
  $('span[name*=nameTarget' + namesHeader[1] + ']').addClass(animArray[5]);
  $('span[name*=nameTarget'+ namesHeader[1] + ']').removeClass('is-hidden');

});
$('i[name*=li'+ namesHeader[1] + ']').mouseout(function(){
        $('span[name*=nameTarget'+ namesHeader[1] + ']').removeClass(animArray[5]);
        $('span[name*=nameTarget'+ namesHeader[1] + ']').addClass('is-hidden');

});$('i[name*=li'+ namesHeader[2] + ']').mouseover(function(){
  $('span[name*=nameTarget' + namesHeader[2] + ']').addClass(animArray[5]);
  $('span[name*=nameTarget'+ namesHeader[2] + ']').removeClass('is-hidden');
});
$('i[name*=li'+ namesHeader[2] + ']').mouseout(function(){
        $('span[name*=nameTarget'+ namesHeader[2] + ']').removeClass(animArray[5]);
        $('span[name*=nameTarget'+ namesHeader[2] + ']').addClass('is-hidden');

});$('i[name*=li'+ namesHeader[3] + ']').mouseover(function(){
  $('span[name*=nameTarget' + namesHeader[3] + ']').addClass(animArray[5]);
  $('span[name*=nameTarget'+ namesHeader[3] + ']').removeClass('is-hidden');

});
$('i[name*=li'+ namesHeader[3] + ']').mouseout(function(){
        $('span[name*=nameTarget'+ namesHeader[3] + ']').removeClass(animArray[5]);
        $('span[name*=nameTarget'+ namesHeader[3] + ']').addClass('is-hidden');

});
$('i[name*=li'+ namesHeader[4] + ']').mouseover(function(){
  $('span[name*=nameTarget' + namesHeader[4] + ']').addClass(animArray[5]);
  $('span[name*=nameTarget'+ namesHeader[4] + ']').removeClass('is-hidden');

});
$('i[name*=li'+ namesHeader[4] + ']').mouseout(function(){
        $('span[name*=nameTarget'+ namesHeader[4] + ']').removeClass(animArray[5]);
        $('span[name*=nameTarget'+ namesHeader[4] + ']').addClass('is-hidden');

});
$(document).ready(function(){
    initEachSection();
    setToggleClasses();
    setBindings();
});

//scrolling
function setBindings(){
  $('i[name*=li]').click(function(e){
    e.preventDefault();
    var sectionId = e.currentTarget.id + "Section";
    $("html body").animate({
      scrollTop: $("#"+ sectionId).offset().top
    }, 1000);
  });
}

// navbar animation
    // $('aside[name*=nav]').each(function() {
    //   $(this).addClass('m-l-150-m');
    //
    // });
    $('div[name*=nav]').each(function() {
      $(this).addClass('position-is-fixed');

    });

//Unload page


$('div[name*=slider]').each(function() {
    $(this).addClass('m-l-200').one(animReset, function
    (){
    $(this).removeClass('delay');
  });
});
 $('a').click(function() {
   setTimeout(function() {
     $('div[name*=window]').addClass(animOutWindow).one(animReset, function
     (){
     $(this).removeClass(animOutWindow);
   }, 500);

  // Animation complete.
  });
});

//SCHEDULE card
function setToggleClasses()
{
  $('div[name*=cardContent]').each(function () {
      $(this).addClass('is-hidden');
      cardContent.push(this);
  });
  $('a[name*=date]').each(function() {
    arrow.push(this);
  });
}

function cardContentToggle(el)
{
  for (var i = 0; i < arrow.length; i++) {
    if (el == arrow[i]) {
      el.click(function() {
          el.toggleClass('is-hidden');
          for (var i = 0; i < cardContent.length; i++) {

          }
          $('div[name*=cardContent'+ i +']').toggleClass('is-hidden');
        });
      }
  }
}
