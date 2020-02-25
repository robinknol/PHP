<?php
	$tekst2 = ""; // "lege string"
	$cijfer1 = 0;
	$cijfer2 = 0;
	$cijfer3 = 0;
	$bereken = "gemiddelde";
	
	if (isset($_GET['bereken']))  // heeft HTML gegevens verzonden?
	{
		$cijfer1 = $_GET['cijfer1'];  //haal cijfer 1 uit de HTML
		$cijfer2 = $_GET['cijfer2'];
		$cijfer3 = $_GET['cijfer3'];
		if ($bereken == "totaal")
		{
			$tekst = "Totaal";
			$waarde = $cijfer1 + $cijfer2 + $cijfer3;
		}
		else 
		{
			$tekst = "Gemiddelde";
			$waarde = round(($cijfer1 + $cijfer2 + $cijfer3)/3 , 1);
		}
	}


	if ($tekst == "Gemiddelde")
	{
		if($waarde < 5.5)
		{
			$tekst2 = "<span style='color:red'>Dit is onvoldoende</span>";
		}
	}
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $tekst ?></title>

</head>
<body>
	<h4>conditional statement  if   else</h4>

	<img src = "http://www.zentut.com/wp-content/uploads/2013/02/PHP-if-else-statement.png" width = "200" alt = "if else"><br>
	
	<h3><?php echo $tekst ?></h3>
	
	cijfer1:<?php echo $cijfer1 ?>
	<br>
	
	cijfer2:<?php echo $cijfer2 ?>
	<br>
	
	cijfer3:<?php echo $cijfer3 ?>
	<br>
	
	Het<?php echo $tekst ?> is <?php echo $waarde ?>. <?php echo $tekst2 ?>
	<br>
	
	<a href = "form1.html">opnieuw berekenen</a>
	<br>
	
	<h2>Robin Knol</h2>

</body>
</html>