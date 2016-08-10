<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
	<?php include("../../inc/meta.php") ?>
  	
    <link rel="stylesheet" href="style.css">
  	<title>JSON Carousel</title>
 	<?php include("../../inc/header.php") ?>
    

	
    <h1><span>JSON Carousel</span></h1>

    </div>

<div id="canvas" class="container group">
    
	
    <div id="primaryContent" class="group">
	    
     <div id="speakerbox">
    <a href="#" id="prev_btn">&laquo;</a>
    <a href="#" id="next_btn">&raquo;</a>
    <div id="carousel"></div>
</div>

<script id="speakerstpl" type="text/template">
    {{#speakers}}
        <div class="speaker">
            <img src="images/{{shortname}}_tn.jpg" alt="Photo of {{name}}" />
            <h3>{{name}}</h3>
            <h4>{{reknown}}</h4>
            <p>{{bio}}</p>
        </div>
    {{/speakers}}
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.cycle/2.9999.8/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.0/mustache.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(function() {

    $.getJSON('data.json', function(data) {
        var template = $('#speakerstpl').html();
        var html = Mustache.to_html(template, data);
        $('#carousel').html(html);

        $('#carousel').cycle({
            fx: 'fade',
            pause: 1,
            next: '#next_btn',
            prev: '#prev_btn',
            speed: 500,
            timeout: 10000
        });
    }); //getJSON

}); //function

</script>
 

    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	
    
    
    

</body>
</html>