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
      var slide = document.querySelectorAll("#stickThis");
      var width = window.innerWidth;
      var height = window.innerHeight;

  new ScrollMagic.Scene({
      
	triggerElement: "#stickThis", 
    triggerHook: "onLeave",
    offest: 40,
    reverse: true,
})
.setPin("#stickThis")
// .addIndicators({name: "1 (duration: 360)"}) // add indicators (requires plugin)
.addTo(controller);





new ScrollMagic.Scene({
      
	triggerElement: ".central-content", 
    triggerHook: "onLeave",
    offest: -40,
    reverse: true,
})

scene.setTween(".above-fold .page-title", 0.5, {opacity: 0})

.addTo(controller);
                    });  