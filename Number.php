<!DOCTYPE html>
<html>
<head>
<?php
$a = array(
        "Name"=>"Sunil",
        "English"=>"92",
        "Maths"=>"95",
        "Physics"=>"87",
    );
 $b = array(      
        "Name"=>"Rahul",
     	"English"=>"98",
     	"Maths"=>"76",
     	"Physics"=>"89",
     );
    
foreach ($a as $k => $pk) {
	echo "$k = $pk <br>";
}
echo "<br>";
foreach ($b as $key => $value) {
	echo "$key = $value <br>";
}
?>
</head>
</html>
