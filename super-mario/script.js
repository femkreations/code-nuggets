// JavaScript Document
$(document).ready(function() {
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
			// Right Arrow Pressed
			case 37:
				$('img').animate({left: "-=10px"}, 'fast');
				break;
			// Down Arrow Pressed
			case 38:
				$('img').animate({top: "-=10px"}, 'fast');
				break;
			// Left arrow key pressed
			case 39:
				$('img').animate({left: "+=10px"}, 'fast');
				break;
			// Up Arrow Pressed
			case 40:
				$('img').animate({top: "+=10px"}, 'fast');
				break;
			
		}
	});
});


