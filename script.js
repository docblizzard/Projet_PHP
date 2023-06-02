// var imgs = document.querySelectorAll('.slideshow img');
const imgs = ['images/fn_paddle.jpeg','images/tm_shifter.jpeg','images/lg_shifter.jpeg','images/tm_ring.jpeg']
var dots = document.querySelectorAll('.dot');
var currentImg = 0; // index of the first image 
const interval = 4000; // duration(speed) of the slide

function changeSlide(n) {
  for (var i = 0; i < imgs.length; i++) {
    dots[i].className = dots[i].className.replace('active', '');
  }

  currentImg = (currentImg + 1) % imgs.length; // update the index number

  if (n != undefined) {
      clearInterval(timer);
      timer = setInterval(changeSlide, interval);
      currentImg = n;
  }

  document.querySelector('.slideshow img').src = imgs[currentImg] ;
  dots[currentImg].className += ' active';
}

var timer = setInterval(changeSlide, interval);
