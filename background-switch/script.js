// JavaScript Document

$(document).ready(function(){
	$('li.one').click(function(){
		$('body').removeClass('bg2 , bg3 , bg4').addClass('bg1');
	});
	$('li.two').click(function(){
		$('body').removeClass('bg1 , bg3 , bg4').addClass('bg2');
	});
	$('li.three').click(function(){
		$('body').removeClass('bg1 , bg2 , bg4').addClass('bg3');
	});
	$('li.four').click(function(){
		$('body').removeClass('bg1 , bg2 , bg3').addClass('bg4');
	});
						 
});
