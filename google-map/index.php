<!doctype html> 
<html lang="en">
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>Google Maps API</title>
  
    <?php include("../inc/header.php") ?>
    
    <h1><span>Google Maps API</span></h1>

   
</div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
        <p>Click on the markers to get more info about the location.</p>
       <div id="map"></div>
        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
</div>
   
   
<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAQYzSKskbBb1XAyEP6IVfs6OOidHOmgY&callback=initMap"
    async defer></script>
</body>
</html>