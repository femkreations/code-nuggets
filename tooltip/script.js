// JavaScript Document

$(document).ready(function(){
	$('.tooltiptag').hover(
		function(){
			// Hover over code		
			
			var title_txt=$(this).attr('title');
			$(this).data('tipText', title_txt)
				.removeAttr('title');
			$('<p class="tooltip"></p>').text(title_txt)
				.appendTo('body')
				.fadeIn('slow');
		},
		function(){
			// Hover Off code 						
			$(this).attr('title', $(this).data('tipText'));
			$('.tooltip').remove();
		}).mousemove(function(e){
			var xaxis=e.pageX + 20;
			var yaxis=e.pageY + 10;
			$('.tooltip').css({top:yaxis, left:xaxis})
		});
				  
		
});
