var main = function() {
	$('.carousel').carousel;

	$('.arrow-next').click(function() {
		$('.carousel').carousel('next');	    

	    var currentDot = $('.active-dot');
	    var nextDot = currentDot.next();

	    if(nextDot.length === 0) {
    		nextDot = $('.dot').first();
    	}

	    currentDot.removeClass('active-dot');
	    nextDot.addClass('active-dot');
  	});



/*
	$('.arrow-next').click(function() {
    var currentSlide = $('.active-slide');
    var nextSlide = currentSlide.next();

    var currentDot = $('.active-dot');
    var nextDot = currentDot.next();

    if(nextSlide.length === 0) {
      nextSlide = $('.slide').first();
      nextDot = $('.dot').first();
    }
    
    currentSlide.fadeOut(600).removeClass('active-slide');
    nextSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    nextDot.addClass('active-dot');
  });


  $('.arrow-prev').click(function() {
    var currentSlide = $('.active-slide');
    var prevSlide = currentSlide.prev();

    var currentDot = $('.active-dot');
    var prevDot = currentDot.prev();

    if(prevSlide.length === 0) {
      prevSlide = $('.slide').last();
      prevDot = $('.dot').last();
    }
    
    currentSlide.fadeOut(600).removeClass('active-slide');
    prevSlide.fadeIn(600).addClass('active-slide');

    currentDot.removeClass('active-dot');
    prevDot.addClass('active-dot');
  });
*/


	var fullscreenBtn = document.getElementById('fullscreenButton');
	var splash = document.getElementById('splash');

	fullscreenBtn.style.cursor = 'pointer';

	fullscreenBtn.onclick = function() {
	    splash.style.visibility='visible';
	    $( "#splash" ).animate({
	    	opacity: 1.0
	    }, 500);
	    
	};

};

$(document).ready(main);