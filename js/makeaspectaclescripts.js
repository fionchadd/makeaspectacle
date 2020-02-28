jQuery(document).ready(function () {
    var config = {
        returnSpeed: 0.4
      };
      
      function r2d(r) {
        return 180 / Math.PI * r;
      }
      
      function random(min, max) {
        return min + (max - min) * Math.random();
      }
      
      /**
      * Eye model object
      * -----------------------------
      */
      function Eye(sel) {
        // dom
        this.eye = document.querySelector(sel);
        this.pupil = this.eye.children[0];
        this.lid = this.eye.children[1];
        
        // widths
        this.ew = this.eye.offsetWidth;
        this.pw = this.pupil.offsetWidth;
        
        // centered position
        this.cx = this.eye.getBoundingClientRect().right - this.ew/2;
        this.cy = this.eye.getBoundingClientRect().bottom - this.ew/2;
        
        // state
        this.bLidUp = true;
      }
      
      Eye.prototype.movePupil = function(r, theta) {
        var x, y;
        
        if (r > 1) r = 1; // clamp
        r *= (this.ew/2 - this.pw/2); // restrict edge of pupil to edge of eye
        
        // convert polar to rectangular
        x = r * Math.cos(theta) + (this.ew - this.pw)/2;
        y = r * Math.sin(theta) + (this.ew - this.pw)/2;
        
        this.pupil.style.transform = 'translateX(' + x + 'px)' + 
                                      'translateY(' + y + 'px)';
      }
      
      Eye.prototype.blink = function() {
        if (this.bLidUp) {
          this.bLidUp = false;
          this.lid.style.transform = 'translateY(0%)';
        } else {
          this.bLidUp = true;
          this.lid.style.transform = 'translateY(-100%)';
        }
      }
      
      
      /**
      * pupil-mouse tracking and draw
      * -----------------------------
      */
     var eye = new Eye('.homepage-eye.eye'),
    // heye = new Eye('.header-eye.eye'),
     aeye = new Eye('.about-eye.eye'),
     eyes = [eye, aeye], // array of eyes to move
          eyeCount = eyes.length,
          wrapper = document.getElementsByClassName('eye-wrapper')[0], // boundary container
          R = 0, //todo: capitalized vars typically constants
          THETA = 0,
          wrapperWidth = wrapper.offsetWidth,
          wrapperHeight = wrapper.offsetHeight,
          bMouseOver = false;
      
      /**
      * update the computed pupil (polar) coordinates given a mouse event
      * treat bbox as circumscribed by a bounding circle for more
      * intuitive pupil movement
      */
      function updateEyes(event) {
        var mx = event.pageX,
            my = event.pageY,
            width = window.innerWidth,
            height = window.innerHeight;
        
        var x, y, bboxWidth, bboxHeight, bbRadius;
        
        bMouseOver = true;
        
        // center x, y
        x = mx - width/2;
        y = my - height/2;
        
        // get bbox bounds 
        bboxWidth = wrapperWidth;
        bboxHeight = wrapperHeight;
        bbRadius = Math.sqrt(Math.pow(bboxWidth,2) + Math.pow(bboxHeight, 2)) /2;
        
        // computer,  theta
        R = Math.sqrt(Math.pow(x,2) + Math.pow(y,2)) / bbRadius;
        THETA = Math.atan2(y,x);
        
      }
      
      function returnToNeutral() {
        bMouseOver = false;
      }
      
      /* draw pupil updates on animation frame */
      function draw() {
        window.requestAnimationFrame(draw);
        
        // reduce R if mouse isn't on screen
        var dr = config.returnSpeed;
        if (!bMouseOver && R!==0) {
          dr = (Math.abs(R) < 0.01) ? 0.01 : R * dr;
          R -= dr;
        } 
        
        // move all eyes
        for (var e=0; e<eyes.length; e++) {
          eyes[e].movePupil(R, THETA);
        }
        
      }
      draw();
      
      /**
      * add eye
      * -----------------------------

      function addEye() {  
        var newEye = document.createElement('div'),
            newPupil = document.createElement('div'),
            newLid = document.createElement('div');
        
        // set class names of new nodes, and ID of eye
        newPupil.className += ' pupil';
        newLid.className += ' lid';
        newEye.className += ' eye';
        newEye.id = 'eye-' + (++eyeCount);
        
        // Add new eye to dom
        document.body.appendChild(newEye);
        newEye.appendChild(newPupil);
        newEye.appendChild(newLid);
        
        // style eye
        var x = random(-0.5, 0.5) * wrapperWidth,
            y = random(-0.5, 0.5) * wrapperHeight,
            scale = random(0.25, 0.9);
        newEye.style.transform = 'translateX(' + x + 'px)' + 
                                 ' translateY('+ y +'px)' +
                                 ' scale(' + scale + ')';
        
        var eyeObj = new Eye('#' + newEye.id);
        eyes.push(eyeObj);
      }
      
    */
      /** 
      * blinking
      * -----------------------------
      */
      
      /* logic */
      function blinkLogic() {
        var r = Math.random();
        
        // single blink
        if (r<0.5) blinkEyes();
        
        // fast double blink
        else if (r<0.6) {
          blinkEyes();
          setTimeout(blinkEyes, 300);
        } 
        
        // slow double blink
        else if (r < 0.8) {
          blinkEyes();
          setTimeout(blinkEyes, 1000 + Math.random()*400);
        }
      }
      
      /* blink and unblink eyes */
      function blinkEyes() {
        eyes.forEach(function(eye) {
          eye.blink();
        });
        setTimeout(function() {
          eyes.forEach(function(eye) {
            eye.blink();
          });
        }, 75);
      }
      
      /* check blink logic every 800 ms */
      setInterval(blinkLogic, 5200);
      
      
      /**
      * Event handlers
      *------------------------------------
      */
      
      document.addEventListener('mousemove', updateEyes, false);
      
      /* click action 
      document.addEventListener('click', addEye); */
      
      /* return eyes to neutral position */
      document.addEventListener('mouseleave', returnToNeutral, false);
      
      window.addEventListener('resize', function() {
        wrapperWidth = wrapper.offsetWidth;
        wrapperHeight = wrapper.offsetHeight;
      });

});   


jQuery(document).ready(function () {
    // project section hover state
    jQuery(".project a").hover(
    function () {
        jQuery(this).parent().toggleClass("hover");
    });
    // open nav section when clicked
    jQuery('.menu-link.about').on('click', function () {
  
        jQuery('.about-section').toggleClass('open');
        jQuery('body').toggleClass('aboutisopen');
      });
      jQuery('.about-section .close').on('click', function () {
  
        jQuery('.about-section').toggleClass('open');
        jQuery('body').toggleClass('aboutisopen');
      });

});