<!DOCTYPE html>
<html>
<head>
  <!--metadata-->
    <meta charset="utf-8">
    <meta name="description" content="Volume of Right Triangular Prism, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--For favicon on this page-->
     <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
  
	<title>Right Triangular Pyramid Calculator</title>
</head>
<body>
	<h1>Right Triangular Pyramid Calculator</h1>
  <!--place to enter values-->
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label for="base">Side a:</label>
		<input type="text" name="base" placeholder="Enter side a (m)" required><br><br>
		<label for="height">Side b:</label>
		<input type="text" name="height" placeholder="Enter side b (m)" required><br><br>
		<label for="depth">Height:</label>
		<input type="text" name="depth" placeholder="Enter height (m)" required><br><br>
		<input type="submit" value="Calculate">
	</form>
	<?php
  	// Allow for decimals
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$base = filter_var($_POST["base"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
			$height = filter_var($_POST["height"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
			$depth = filter_var($_POST["depth"], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

			// Calculate the volume of the right triangular pyramid
			$volume = 1/3 * $base * $height * $depth;

			// Round the volume to two decimal places
			$rounded_volume = round($volume, 2);

			//Show results back
			echo "<p>Volume: " . $rounded_volume . "m<sup>2</sup></p>";
		}
	?>
      <!--For image-->
  <br>
	<img src="./images/pyramid.jpg" alt="Pyramid" width="415" height="500"/>
</body>
</html>
