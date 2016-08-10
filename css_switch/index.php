<!doctype html> 
<html>
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="day.css" type="text/css">
    <title>CSS switcher</title>
    <?php include("../inc/header.php") ?>

	<h1><span>Switch the theme of your website using stylesheets</span></h1>
    </div>

<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
        <ul id="nav">
        <li><a href="#" rel="night.css">Dark Theme</a></li>
        <li><a href="#" rel="day.css">Light Theme</a></li>
        </ul>
        
        <h1>My Website</h1>
        <h2>created by Femy Praseeth</h2>
        <h3>Welcome to my <em>AWESOME WEBSITE</em></h3>
        <p>Bacon ipsum dolor amet ham pastrami sausage pig, pancetta tenderloin leberkas alcatra short ribs jowl kevin meatloaf picanha capicola. Rump ground round landjaeger brisket, cow tri-tip t-bone pork belly corned beef. Doner bresaola porchetta ground round prosciutto hamburger cow jowl flank short ribs chuck pastrami biltong spare ribs tail. Meatball tri-tip kevin porchetta turducken meatloaf jowl, picanha turkey fatback shank. Chicken bacon capicola chuck. Tongue bresaola beef landjaeger brisket cow picanha rump, andouille spare ribs porchetta pig capicola kevin flank. Tenderloin pig turkey, cow leberkas turducken ball tip pork belly bresaola short loin cupim landjaeger sausage.</p>
	    
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../inc/footer.php") ?> 
    

	<script>
    (function(){
        $("#nav li a").click(function() { 
            $("link").attr("href",$(this).attr('rel'));
            return false;
        });
        
    })();
    </script>


</body>
</html>
