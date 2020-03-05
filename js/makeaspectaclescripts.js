jQuery(document).ready(function ($) {
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
    if (mouseX < 0) mouseX = 0;
    if (mouseX > 50) mouseX = 50;
    if (mouseY < 0) mouseY = 0;
    if (mouseY > 50) mouseY = 50;
  });
  
  var follower = $(pupil);
  var loop = setInterval(function(){
    pupilX += (mouseX - pupilX) / speed;
    pupilY += (mouseY - pupilY) / speed;
    follower.css({left:pupilX, top:pupilY});
  }, interval);
};

var eye1 = new DrawEye("#eye1", "#pupil1", 4, 30);
var eye3 = new DrawEye("#eye3", "#pupil3", 4, 30);

    // project section hover state
    jQuery(".project a").hover(
    function () {
        jQuery(this).parent().toggleClass("hover");
    });
    // open about section when clicked
    jQuery('.menu-link.about').on('click', function () {
  
        jQuery('.about-section').toggleClass('open');
        jQuery('body').toggleClass('aboutisopen');


            setTimeout(function(){      
    /* setting position for about eye once the panel is open */

    var DrawEye = function(eye, pupil, speed, interval){
        var mouseX = 0, mouseY = 0;
        var pupilX = 0, pupilY = 0;
        var eyeX = $(eye).width() - $(pupil).width();
        var eyeY = $(eye).height() - $(pupil).height();
        var offset = $(eye).offset();
        
        $(window).mousemove(function(evt){
          mouseX = Math.min(evt.pageX - offset.left, eyeX);
          mouseY = Math.min(evt.pageY - offset.top, eyeY);
          if (mouseX < 0) mouseX = 0;
          if (mouseX > 50) mouseX = 50;
          if (mouseY < 0) mouseY = 0;
          if (mouseY > 50) mouseY = 50;
        });
        
        var follower = $(pupil);
        var loop = setInterval(function(){
          pupilX += (mouseX - pupilX) / speed;
          pupilY += (mouseY - pupilY) / speed;
          follower.css({left:pupilX, top:pupilY});
        }, interval);
      };
      

      var eye2 = new DrawEye("#eye2", "#pupil2", 4, 30);
    }, 600); 

      });
      jQuery('.about-section .close').on('click', function () {
  
        jQuery('.about-section').toggleClass('open');
        jQuery('body').toggleClass('aboutisopen');
      });


    var controller = new ScrollMagic.Controller({

      });
      // get all slides
      var width = window.innerWidth;
      var height = window.innerHeight;

 var scene1 = new ScrollMagic.Scene({
      
	triggerElement: "#stickThis", 
    triggerHook: "onLeave",
    reverse: true,
})
.setPin("#stickThis")
.addTo(controller);

/*
var tl = new TimelineMax();
tl.fromTo(".above-fold .page-title", {opacity: 1}, {duration: 1, opacity: 0});
tl.fromTo(".above-fold .page-subtitle", {opacity: 1}, {duration: 1, opacity: 0});
tl.fromTo(".above-fold .page-bottom", {opacity: 1, transform: "translate(0px, 0px)"}, {duration: 1, opacity: 0, transform: "translate(0px, -300px)"});



var scene2 = new ScrollMagic.Scene({
    triggerElement: ".above-fold", 
    triggerHook: "onLeave",
    reverse: true,
})

.setTween(tl)
.addTo(controller);
*/
var tl1 = new TimelineMax();
tl1.fromTo(".above-fold .page-title", {y: 0, opacity: 1}, {y: -50, opacity: 0, ease: Linear.easeNone});

var tl2 = new TimelineMax();
tl2.fromTo(".above-fold .page-subtitle", {y: 0, opacity: 1}, {y: -70, opacity: 0, ease: Linear.easeNone});

var tl3 = new TimelineMax();
tl3.fromTo(".above-fold .page-bottom", {y: 0, opacity: 1}, {y: -250, opacity: 0, ease: Linear.easeNone});


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

new ScrollMagic.Scene({
    triggerElement: ".project", 
    triggerHook: "onEnter",
    offset: 350,
})
.setClassToggle(this, "active") // add class toggle
.addTo(controller);

var $element = $('.project');


scene = new ScrollMagic.Scene({
        triggerElement: $element[0],
        triggerHook: "onEnter",
        offset: 350,
      })
      .addTo(controller);

    scene.on('enter', function(){
      $element.addClass('active-class');
    });

    scene.on('leave', function(){
      $element.removeClass('active-class');
    });

});  
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