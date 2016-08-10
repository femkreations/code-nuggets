<!doctype html> 
<html>
<head>
	<?php include("../inc/meta.php") ?>
    
    <link rel="stylesheet" href="style.css" type="text/css">
  	<title>A Dynamic Multiplication Table using PHP</title>
  
<?php include("../inc/header.php") ?>
    

	
    <h1><span>A Multiplication Table generated using PHP</span></h1>

    </div>

<div id="canvas" class="container group">
    
    
    <div id="primaryContent" class="group">
       <table>
    
    
    
    <?php 
        
        

        for($i=0; $i<=12; $i++){

            echo "<tr><th>$i</th>";
            
            for($j=1; $j<=12; $j++){

                if($i == 0){
                    echo "<th>$j</th>";
                    continue;
                }
            

                $total = $i * $j;
                echo "<td>$total</td>";
            }
            echo "</tr>";

        }
        echo "</tr>";

?>

</table>




    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">
    
    
    </div><!-- right col content --> 
    
    </div>
   
   
	<?php include("../inc/footer.php") ?> 
    
    
    
    
<script src="script.js"></script>
</body>
</html>