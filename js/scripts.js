jQuery(document).ready(function ($) {
   /* use javascript to add class to body, so if javascript isn't loaded we don't get the class */
  jQuery('body').toggleClass('jsloaded');
 
  /* eye */

  var DrawEye = function(eye, pupil, speed, interval){
    var mouseX = 0, mouseY = 0;
    var pupilX = 0, pupilY = 0;
    var eyeX = $(eye).width() - $(pupil).width();
    var eyeY = $(eye).height() - $(pupil).height();
    var offset = $(eye).offset();

    
    $(window).mousemove(function(evt){
      mouseX = Math.min(evt.pageX - offset.left, eyeX);
      mouseY = Math.min(evt.pageY - offset.top, eyeY);
      mouseX = mouseX - 17;
      mouseY = mouseY - 9;
      if (mouseX < -18) mouseX = -16;
      if (mouseX > 18) mouseX = 16;
      if (mouseY < -13) mouseY = -11;
      if (mouseY > 13) mouseY = 11;

    });
    
    var follower = $(pupil);
    var loop = setInterval(function(){
      pupilX += (mouseX - pupilX) / speed;
      pupilY += (mouseY - pupilY) / speed;
      follower.css(
        "transform","translate(" + pupilX + "px," + pupilY + "px)"
        );
    }, interval);
  };
  
  var eye = new DrawEye("#eye", "#pupil", 4, 30);






// open about section when clicked
          jQuery('#site-navigation .about').on('click', function () {
    
            jQuery('.about-section').toggleClass('open');
            jQuery('body').toggleClass('aboutisopen');
      });
// close about section
      jQuery('.about-section .close').on('click', function () {
  
        jQuery('.about-section').toggleClass('open');
        jQuery('body').toggleClass('aboutisopen');
      });




// stick eye to top of browser when scrolling down
    var controller = new ScrollMagic.Controller({

      });
      // stick eye to top of page
      var width = window.innerWidth;
      var height = window.innerHeight;
      if ($('#stickThis')[0]) {
 var scene1 = new ScrollMagic.Scene({
      
	triggerElement: "#stickThis", 
    triggerHook: "onLeave",
    reverse: true,
})
.setPin("#stickThis")
.addTo(controller);
      }

      

// above-fold section animations      
if ($('.above-fold')[0]) {
var tl1 = new TimelineMax();
tl1.fromTo(".above-fold .page-title", {y: 0, opacity: 1}, {y: -10, opacity: 0, ease: 'ease'});

var tl2 = new TimelineMax();
tl2.fromTo(".above-fold .page-subtitle", {y: 0, opacity: 1}, {y: -20, opacity: 0, ease: 'ease'});

var tl3 = new TimelineMax();
tl3.fromTo(".above-fold .page-bottom", {y: 0, opacity: 1}, {y: -250, opacity: 0, ease: 'ease'});


new ScrollMagic.Scene({
    triggerElement: ".above-fold", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 100,
    duration: 350,
})

.setTween(tl1)
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".above-fold", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 80,
    duration: 350,
})

.setTween(tl2)
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".above-fold", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 50,
    duration: 450,
})

.setTween(tl3)
.addTo(controller);
// get window  innerheight
var height = window.innerHeight;
// set height of above fold splash to fill
  jQuery('.above-fold').css({
    'height': height,
  });

function resize() {
  // get inner height and width of browser window
  var vheight = window.innerHeight;
  // set height of above fold section to be height of brower window
  jQuery('.above-fold').css({
    'height': vheight,
  });

};

// Resize Container on window resize
jQuery(window).resize(function(){

  resize();
  
}); 
} // end if above fold

// project section animations
if ($('#work')[0]) {
  var animlength = $("#project-area").height()
  var width = window.innerWidth;
  var height = window.innerHeight;


  // really should redo all of this using scrolltrigger
var topgradient = new TimelineMax();
topgradient.fromTo(".top-gradient", {y: -95, ease: 'ease'}, {y: 0, ease: 'ease'});

var scenegradienttop = new ScrollMagic.Scene({
  triggerElement: "#work",
  offset: 150,
  reverse: true,
})
.setTween(topgradient)
.addTo(controller);
scenegradienttop.setClassToggle('.top-gradient', 'transforming');

var bottomgradient = new TimelineMax();
bottomgradient.fromTo(".bottom-gradient", {y: 0, ease: 'ease'}, {y: 280, ease: 'ease'});

var scenegradient = new ScrollMagic.Scene({
  triggerElement: "#colophon",
  triggerHook: "onEnter",
  reverse: true,
})
.setTween(bottomgradient)
.addTo(controller);
scenegradient.setClassToggle('#page', 'footeractive');

  // staggered loading
  var tween = TweenMax.staggerFromTo(".project .project-link", 1, {y: 50, autoAlpha:0, ease: 'ease' }, {className: '+=' + 'active', y: 0, autoAlpha:1, ease: 'ease'}, 0.3);

  // add class to work section
 var scene2 = new ScrollMagic.Scene({
  triggerElement: '#work',
  offset: 150,
  reverse: false,
 })
 .setTween(tween)
  .addTo(controller);
  scene2.setClassToggle('#work', 'active');
  scene2.setClassToggle('#page', 'workactive');
  
      // fade out projects as they go off the screen
       //    $('.project').each(function(){

      //       var fadeouttop = TweenMax.fromTo(this, {opacity: 1, ease: 'ease'}, {opacity: 0, ease: 'ease'});
      //        new ScrollMagic.Scene({
      //       triggerElement: this,
      //       triggerHook: "onLeave",
      //       offset: -250,
      //       duration: 150,
      //       })
      //       .setTween(fadeouttop)
      //       .addTo(controller);
      //      });
 
      //    } 





// add class when project is being hovered
 
 $('.project').mousemove(function(e){

  $(this).addClass('hovered');
 $(this).parent().addClass('being-hovered');
// $(this).find('.project-image').css({

 //   left:e.pageX, top:e.pageY
      
 //   });
 }).mouseleave(function(){
  $(this).removeClass('hovered');
   $(this).parent().removeClass('being-hovered');
 });

} // end if work

// cursor
var positionCursor = function(e){

    $('div.cursor').css({
       left:  e.clientX,
       top:   e.clientY
    });
};
$(document).on( 'mousemove', positionCursor );
// $(document).on( 'scroll', positionCursor );
// $(document).on( 'resize', positionCursor );



 

});  // end doc ready
/*
new ScrollMagic.Scene({
    triggerElement: ".above-fold", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 100,
})
.setClassToggle(".page-title", "active") // add class toggle
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".page-title", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 100,
})
.setClassToggle(".page-subtitle", "active") // add class toggle
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: ".page-subtitle", 
    triggerHook: "onLeave",
    reverse: true,
    offset: 100,
})
.setClassToggle(".page-bottom", "active") // add class toggle
.addTo(controller);


*/