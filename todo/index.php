<!doctype html> 
<html>
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>A Simple To Do list maker</title>
  
<?php include("../inc/header.php") ?>
    

	
    <h1><span>A Simple To Do List Maker</span></h1>

    </div>

<div id="canvas" class="container group">
    
    
    <div id="primaryContent" class="group">
       <p> </p>


        <form name="checkListForm">
            <input type="text" name="checkListItem"/>
        </form>
        <div id="button">Add!</div>
        <br/>
        <div class="list"></div>

        <p>Clicking an item in the list will delete the item from the list</p>
        
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>