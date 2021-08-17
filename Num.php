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
     	"Physics"=>"79",
     );
   
	if ($a["Physics"] > $b["Physics"]) {
		echo "Sunil got more marks than Rahul", "<br>"; 
	}
	else echo "Rahul got more marks than Sunil","<br>";
?>
</head>
</html>
