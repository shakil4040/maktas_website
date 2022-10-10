
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.js" integrity="sha512-judXDFLnOTJsUwd55lhbrX3uSoSQSOZR6vNrsll+4ViUFv+XOIr/xaIK96soMj6s5jVszd7I97a0H+WhgFwTEg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.js" integrity="sha512-mq6TSOBEH8eoYFBvyDQOQf63xgTeAk7ps+MHGLWZ6Byz0BqQzrP+3GIgYL+KvLaWgpL8XgDVbIRYQeLa3Vqu6A==" crossorigin="anonymous"></script>



<!-- First Video -->
<script>
  const intro = document.querySelector('.intro');
  const text = document.querySelector('.text1');
  const video = intro.querySelector('video');
  const h1 = intro.querySelector('h1');
  const p = intro.querySelector('p');
  let scrollpos = 0;
  let lastpos;
  const controller = new ScrollMagic.Controller();
  const scene = new ScrollMagic.Scene({
      duration: 3200, 
    triggerElement: intro,
    triggerHook: 0
  });
  const startScrollAnimation = () => {
    scene
      // .addIndicators()
      .setPin(intro)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos = e.progress;
      });
  
    setInterval(() => {
      if (lastpos === scrollpos) return;
      requestAnimationFrame(() => {
        video.currentTime = video.duration * scrollpos;
        video.pause();
        lastpos = scrollpos;
        console.log(scrollpos);
      });
    }, 50);
  };
  
  const preloadVideo = (v, callback) => {
    const ready = () => {
      v.removeEventListener('canplaythrough', ready);
  
      video.pause();
      var i = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i);
          video.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready, false);
    v.play();
  };
  
  preloadVideo(video, startScrollAnimation);
  
  startScrollAnimation();
  
  //Text Animation
  
  var textAnim = new TimelineMax();
  textAnim.to([h1,p], 1, {opacity:1}).to(text, 1, {y:-100}).to([h1,p], 1, {opacity:0});
  
  let scene3 = new ScrollMagic.Scene({
  
  duration: 3000,
  
  triggerElement:intro,
  
  triggerHook: 0
  
  })
  
  .setTween (textAnim)
   .addTo(controller);
            
  </script>


<!-- Second Video -->
<script>
  const intro2 = document.querySelector('.intro2');  
  const video2 = intro2.querySelector('video');
  const h12 = intro2.querySelector('h1');
  const p2 = intro2.querySelector('p');
  const text2 = document.querySelector('.text2');
  let scrollpos2 = 0;
  let lastpos2;
  const scene2 = new ScrollMagic.Scene({
      duration: 3200, 
    triggerElement: intro2,
    triggerHook: 0
  });
  const startScrollAnimation2 = () => {
    scene2
      // .addIndicators()
      .setPin(intro2)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos2 = e.progress;
      });
  
    setInterval(() => {
      if (lastpos2 === scrollpos2) return;
      requestAnimationFrame(() => {
        video2.currentTime = video2.duration * scrollpos2;
        video2.pause();
        lastpos2 = scrollpos2;
        console.log(scrollpos2);
      });
    }, 50);
  };
  
  const preloadVideo2 = (v, callback) => {
    const ready2 = () => {
      v.removeEventListener('canplaythrough', ready2);
  
      video2.pause();
      var i2 = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i2);
          video2.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready2, false);
    v.play();
  };
  preloadVideo(video2, startScrollAnimation2);
  startScrollAnimation2();
     //Text Animation
  var textAnim2 = new TimelineMax();
  textAnim2.to([h12,p2], 1, {opacity:1}).to(text2, 1, {y:-100}).to([h12,p2], 1, {opacity:0});
  let scene4 = new ScrollMagic.Scene({
  duration: 3000,
  triggerElement:intro2,
  triggerHook: 0
  })
  .setTween (textAnim2)
   .addTo(controller);
  </script>

<!-- Third Video -->
<script>
  const intro3 = document.querySelector('.intro3');  
  const video3 = intro3.querySelector('video');
  const h13 = intro3.querySelector('h1');
  const p3 = intro3.querySelector('p');
  const text3 = document.querySelector('.text3');
  let scrollpos3 = 0;
  let lastpos3;
  const scene5 = new ScrollMagic.Scene({
      duration: 3200, 
    triggerElement: intro3,
    triggerHook: 0
  });
  const startScrollAnimation3 = () => {
    scene5
      // .addIndicators()
      .setPin(intro3)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos3 = e.progress;
      });
  
    setInterval(() => {
      if (lastpos3 === scrollpos3) return;
      requestAnimationFrame(() => {
        video3.currentTime = video3.duration * scrollpos3;
        video3.pause();
        lastpos3 = scrollpos3;
        console.log(scrollpos3);
      });
    }, 50);
  };
  
  const preloadVideo3 = (v, callback) => {
    const ready3 = () => {
      v.removeEventListener('canplaythrough', ready3);
  
      video3.pause();
      var i3 = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i3);
          video3.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready3, false);
    v.play();
  };
  preloadVideo(video3, startScrollAnimation3);
  startScrollAnimation3();
     //Text Animation
  var textAnim3 = new TimelineMax();
  textAnim3.to([h13,p3], 1, {opacity:1}).to(text3, 1, {y:-100}).to([h13,p3], 1, {opacity:0});
  let scene6 = new ScrollMagic.Scene({
  duration: 3000,
  triggerElement:intro3,
  triggerHook: 0
  })
  .setTween (textAnim3)
   .addTo(controller);
  </script>

<!-- Forth Video -->
<script>
  const intro4 = document.querySelector('.intro4');  
  const video4 = intro4.querySelector('video');
  const h14 = intro4.querySelector('h1');
  const p4 = intro4.querySelector('p');
  const text4 = document.querySelector('.text4');
  let scrollpos4 = 0;
  let lastpos4;
  const scene7 = new ScrollMagic.Scene({
    duration: 3200, 
    triggerElement: intro4,
    triggerHook: 0
  });
  const startScrollAnimation4 = () => {
    scene7
      // .addIndicators()
      .setPin(intro4)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos4 = e.progress;
      });
  
    setInterval(() => {
      if (lastpos4 === scrollpos4) return;
      requestAnimationFrame(() => {
        video4.currentTime = video4.duration * scrollpos4;
        video4.pause();
        lastpos4 = scrollpos4;
        console.log(scrollpos4);
      });
    }, 50);
  };
  
  const preloadVideo4 = (v, callback) => {
    const ready4 = () => {
      v.removeEventListener('canplaythrough', ready4);
  
      video4.pause();
      var i4 = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i4);
          video4.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready4, false);
    v.play();
  };
  preloadVideo(video4, startScrollAnimation4);
  startScrollAnimation4();
     //Text Animation
  var textAnim4 = new TimelineMax();
  textAnim4.to([h14,p4], 1, {opacity:1}).to(text4, 1, {y:-100}).to([h14,p4], 1, {opacity:0});
  let scene8 = new ScrollMagic.Scene({
  duration: 3000,
  triggerElement:intro4,
  triggerHook: 0
  })
  .setTween (textAnim4)
   .addTo(controller);
  </script>


<!-- Fifth Video -->
<script>
  const intro5 = document.querySelector('.intro5');  
  const video5 = intro5.querySelector('video');
  const h15 = intro5.querySelector('h1');
  const p5 = intro5.querySelector('p');
  const text5 = document.querySelector('.text5');
  let scrollpos5 = 0;
  let lastpos5;
  const scene9 = new ScrollMagic.Scene({
    duration: 3200, 
    triggerElement: intro5,
    triggerHook: 0
  });
  const startScrollAnimation5 = () => {
    scene9
      // .addIndicators()
      .setPin(intro5)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos5 = e.progress;
      });
  
    setInterval(() => {
      if (lastpos5 === scrollpos5) return;
      requestAnimationFrame(() => {
        video5.currentTime = video5.duration * scrollpos5;
        video5.pause();
        lastpos5 = scrollpos5;
        console.log(scrollpos5);
      });
    }, 50);
  };
  
  const preloadVideo5 = (v, callback) => {
    const ready5 = () => {
      v.removeEventListener('canplaythrough', ready5);
  
      video5.pause();
      var i5 = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i5);
          video5.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready5, false);
    v.play();
  };
  preloadVideo(video5, startScrollAnimation5);
  startScrollAnimation5();
     //Text Animation
  var textAnim5 = new TimelineMax();
  textAnim5.to([h15,p5], 1, {opacity:1}).to(text5, 1, {y:-100}).to([h15,p5], 1, {opacity:0});
  let scene10 = new ScrollMagic.Scene({
  duration: 3000,
  triggerElement:intro5,
  triggerHook: 0
  })
  .setTween (textAnim5)
   .addTo(controller);
  </script>

<!-- Sixth Video -->
<script>
  const intro6 = document.querySelector('.intro6');  
  const video6 = intro6.querySelector('video');
  const h16 = intro6.querySelector('h1');
  const p6 = intro6.querySelector('p');
  const text6 = document.querySelector('.text6');
  let scrollpos6 = 0;
  let lastpos6;
  const scene11 = new ScrollMagic.Scene({
    duration: 3200, 
    triggerElement: intro6,
    triggerHook: 0
  });
  const startScrollAnimation6 = () => {
    scene11
      // .addIndicators()
      .setPin(intro6)
      .addTo(controller)
      
      .on("progress", (e) => {
        scrollpos6 = e.progress;
      });
  
    setInterval(() => {
      if (lastpos6 === scrollpos6) return;
      requestAnimationFrame(() => {
        video6.currentTime = video6.duration * scrollpos6;
        video6.pause();
        lastpos6 = scrollpos6;
        console.log(scrollpos6);
      });
    }, 50);
  };
  
  const preloadVideo6 = (v, callback) => {
    const ready6 = () => {
      v.removeEventListener('canplaythrough', ready6);
  
      video6.pause();
      var i6 = setInterval(function() {
        if (v.readyState > 3) {
          clearInterval(i6);
          video6.currentTime = 0;
          callback();
        }
      }, 50);
    };
    v.addEventListener('canplaythrough', ready6, false);
    v.play();
  };
  preloadVideo(video6, startScrollAnimation6);
  startScrollAnimation6();
     //Text Animation
  var textAnim6 = new TimelineMax();
  textAnim6.to([h16,p6], 1, {opacity:1}).to(text6, 1, {y:-100}).to([h16,p6], 1, {opacity:0});
  let scene12 = new ScrollMagic.Scene({
  duration: 3000,
  triggerElement:intro6,
  triggerHook: 0
  })
  .setTween (textAnim6)
   .addTo(controller);
  </script>

