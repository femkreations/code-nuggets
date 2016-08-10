<!doctype html> 
<html>
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Tooltip</title>

	<?php include("../inc/header.php") ?>
    

	
    <h1><span>A simple trick to create tooltips on hover</span></h1>

    </div>

<div id="canvas" class="container group">
    
    
    <div id="primaryContent" class="group">
        <h3>Tooltip on a link</h3>
        <a href="http://femkreations.com" class="tooltiptag" title="Web Design and Development Studio in San Jose, California">Hover over this link: Visit femKreations.com</a>
        <!-- class name is important, text added to the title attribute of the a tag -->
    
        <h3>Tooltip on a paragraph</h3>
    	<p class="tooltiptag" title="Sample code to test tooltip">Hover over this paragraph: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin purus odio, elementum quis eleifend nec, accumsan et leo. Mauris tellus tellus, vehicula id pulvinar ut, egestas molestie odio. Suspendisse potenti</p>
    
    	<h3>Tooltip on an image</h3>
    	<img src="desaturated-rose.jpg" class="tooltiptag" title="Roses are red; Violets are blue; Sugar is sweet; And so are you!" />
        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>