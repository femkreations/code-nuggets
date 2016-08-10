<!doctype html> 
<html>
<head>
	<?php include("../inc/meta.php") ?>
  	
    <link rel="stylesheet" href="style.css">
  	<title>Form Validations</title>
 	<?php include("../inc/header.php") ?>
    

	
    <h1><span>Form Validations</span></h1>

    </div>

<div id="canvas" class="container group">
    
	
    <div id="primaryContent" class="group">
	    
    	
        <form id="frmContact" name="frmNameContact" method="post" action="thankyou.php" >
            <p><label for="nameFld">Name</label>
                <input type="text" name="nameFld" id="name" />
            </p>
            <p>
            <label for="ageFld">Age</label>
            <input type="text" name="ageFld" id="age" />
            </p>
            <p>
                <label for="EmailFld">Email</label>
                <input type="text" name="emailFld" id="email" />
            </p>
            <p>Show me the list of tours available in the area <input type="checkbox" name="checkYes" id="checkYes" />
            <div id="tourSelection">
                <p><input type="checkbox" name="checkIndia" id="checkIndia"/><label for="checkIndia">India</label></p>
                <p><input type="checkbox" name="checkUS" id="checkUS"/><label for="checkUS">US</label></p>
                <p><input type="checkbox" name="checkUK" id="checkUK"/><label for="checkUK">UK</label></p>
                <p><input type="checkbox" name="checkSingapore" id="checkSingapore"/><label for="checkSingapore">Singapore</label></p>
                <p><input type="checkbox" name="checkRussia" id="checkRussia"/><label for="checkRussia">Russia</label></p>
                <p><input type="checkbox" name="checkTibet" id="checkTibet"/><label for="checkTibet">Tibet</label></p>
            </div>
            <p><span id="errorMessage"></span></p>
            <p>
                <input type="submit" value="submit" name="submitButton" />
            </p>
		</form>

        </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../inc/footer.php") ?> 
    
    
    
<script src="script.js"></script>
</body>
</html>