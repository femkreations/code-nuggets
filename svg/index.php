<!doctype html> 
<html lang="en">
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>Adding SVG Icon - The Right way</title>
  
    <?php include("../inc/header.php") ?>
    
    <h1><span>Adding SVG Icon - The Right way</span></h1>

   
</div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
        <p> Birth Stories</p>
        <svg>
            <use xlink:href="./icons.svg#icon-cake"> </use>
        </svg>
        
        <p> College Stories</p>
        <svg>
            <use xlink:href="./icons.svg#icon-hat"> </use>
        </svg>
        

    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
</div>
   
   
<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>