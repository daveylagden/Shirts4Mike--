<?php

$flavours = array("vanilla","Chocolate","Strawberry","Cookie Dough");

?>
<?php echo $flavours[0] . "\n" . $flavours[1] . "\n" . $flavours[2]; ?>


<?php echo "We have " . count($flavours); . " flavours available. heres a list:\n"; 


foreach($flavours as $flavour) {
	echo $flavour . "\n";
}

?> 


<?php

$letters = array("D","G","L");

echo "My favorite ";
echo count($letters);

echo " letters are these:\n"; 
foreach($letters as $letter) { echo $letter. "\n"; }
echo ".";
echo ".";

?>




<?php

$name = "Mike the Frog";

?>
<h1>My Name is <?php echo $name; ?>.</h1>







<?php

$flavour = "cookie dough";

if ($flavour == "cookie dough") { ?>

	<p><?php echo "Your Favourite flavour of ice cream is the same as mine!"; ?></p>
<?php }

?>



<?php
$flavours = array("Vanilla","Chocolate","Strawberry","Cookie Dough");

?><html>
<body>
	
	<p><?php echo "we have " . count($flavours) . " flavours available. heres a list:"; ?></p>

	<?phpforeach($flavours as $flavour) { ?>

	<div><?php	echo $flavour; ?></div>
	

	<?php } ?>
</body>
</html>




<?php

    $flavors = array ("Chocolate","Vanilla","Mint");

?>
<p>Welcome to Ye Olde Ice Cream Shoppe. We sell <?php echo "3"; ?> flavors of ice cream.</p>
<ul>
  	<?php foreach($flavours as $flavour) {?>
    <li><?php echo $flavour; ?></li>
  <?php } ?>
</ul>



<?php
$countries = array();

$countries["0"] =  array(
	"code" => "US",
	"name" => "United States";
	"anthem" => "The Star-Spangled Banner"
	);


$countries["1"] = "Germany";


----


 "US";
$country["name"] = "United States";
$country["capital"] = "Washington, D.C.";
$country["population"] = 22500000;
$country["anthem"] = "The Star-Spangled Banner";
?>

<?php
$country = array(
	"code" => "US",
	"name" => "United States",
	"anthem" => "The Star-Spangled Banner"
	);
?>
<h1><?php echo $country["name"]; ?></h1>
<dl>
	<dt>Country Code</dt>
	<dd><?php echo $country["code"]; ?></dd>
</dl>


















































