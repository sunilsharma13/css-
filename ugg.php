<!DOCTYPE html>
<html>
<head>
<?php
$S = array(
"Sunil"=> array("English"=> 87, "Maths"=>82),
"Rahul"=> array("English"=> 94, "Maths"=>92),
);
echo "<pre>";
print_r($S);
echo "</pre>";
function cmp(array $a, array $b){
	if ($a["English"] > $b["English"]){
      echo "Sunil got more marks in English";
	}
	else {
		echo "RAhul got more marks in English";
	}
}
		
?>
</head>
</html>