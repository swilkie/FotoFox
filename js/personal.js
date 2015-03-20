var main = function() {
	
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