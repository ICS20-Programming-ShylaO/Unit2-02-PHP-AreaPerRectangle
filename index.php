<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="description" content="My first webpage, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
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
      echo "<p>The area of a circle with a radius of $radius cm = " . ($length ** 2 * M_PI) . "cm<sup>2</sup></p>";
      ?>
      
	</body>
</html>