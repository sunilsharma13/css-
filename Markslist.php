<!DOCTYPE html>
<html>
<head>
<?php
$name = array("Sunil","Mayank","Ravi","Amit");
$Sunil = array("Maths"=>"87","Physics"=>"89","English"=>"98","Hindi"=>"73");
$S = count($Sunil);
foreach ($name as $n) {
echo "Name is ".$n.".";
echo "<br>";
foreach($Sunil as $k => $v) {
	echo "Marks in " .$k. " - " .$v. ".";
	echo "<br>";	
}
echo "<br>";
}
?>
</head>
</html>
