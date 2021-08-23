<!DOCTYPE html>
<html>
<head>
<?php
$name = array("Sunil","Mayank","Ravi","Amit");
$Sunil = array("Maths"=>"87","Physics"=>"89","English"=>"98","Hindi"=>"73");
$S = count($Sunil);
$n = count($name);
do {
	echo $name[$i];
    foreach($Sunil as $k => $v){
    	echo "<br>";
	echo "Marks in " .$k. " - " .$v. ".";
	echo "<br>";
while ($i <= $n);
}
?>
</head>
</html>
