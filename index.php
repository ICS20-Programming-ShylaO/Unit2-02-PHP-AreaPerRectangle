<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="description" content="My First Math Web Page, Using PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area & Perimeter of Rectangle in PHP</title>
	</head>
	<body>
    <h1><?php echo 'Area & Perimeter of a Rectangle'; ?></h1>
		<?php 
			$length = 14;  
		 	$width = 12; 
			echo "<p>Length = $length cm<br>Width = $width cm</p>"; ?>		
		<?php 
		 echo "<p>The area of a rectangle with dimensions $length cm x $width cm = " . ($length * $width) . "cm<sup>2</sup></p>";  
		  ?>
    <?php
      $radius = 5;
      echo "<p>Radius = $radius cm</p>" ?>

    <?php
      echo "<p>The area of a circle with a radius of $radius cm = " . ($radius ** 2 * M_PI) . "cm<sup>2</sup></p>";
      ?>
      
	</body>
</html>