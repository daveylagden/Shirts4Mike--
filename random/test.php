<!DOCTYPE html>
<html>
<head>
	<title>Shirts 4 Mike</title>
</head>
<body>
	<h1>SHirts 4 MIke</h1>
	<p>&copy;<?php echo date('Y'); ?> Shirts 4 MIke</p>
</body>
</html>








<?php
$today = "Monday";
if ($today =="Monday") { 
	echo "welcome back to work!";
 }

<?php
$hour = date('G');
if ($hour < 12) {
	echo "Good Morning!";
}



<?php
$flavor = "Your favourite flavor of ice cream is";
echo = "$flavor";
echo "vanilla";
echo ".</p>";
echo "<p>Randy's favorite flavor is cookie dough, also!</p>";

?

?>



<?php 



function mimic_count($array) {

	$count= 0;
	foreach($array as $element) {
		$count = $count +1; 

	}

	return $count;
}


$flavors = array("Vanilla", "Chocolate");
$count = mimic_count($flavors);
echo $count;

?>














