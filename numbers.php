<!DOCTYPE html>
<html>
<head>
<?php
$a = array("83","93","56","64");
$b = array("55", "78", "90","62");
$c = array(
	array(
        "Name"=>"Sunil",
        "Maths"=>"95",
        "Physics"=>"87",
    ),
     array(
     	"Name"=>"Rahul",
     	"Maths"=>"76",
     	"Physics"=>"89",
     )
);     
for ($i=0; $i < count($a) ; $i++) { 
	if ($a[$i] == "64") {
		echo "Number exist in array.", "<br>","<br>"; 
	}
}
 echo "Sunil got marks in Maths:" .$c[0]["Maths"],"<br>";
echo "Sunil got marks in Physics:".$c[0]["Physics"],"<br>";
echo "Rahul got marks in Maths:".$c[1]["Maths"],"<br>";
echo "Rahul got marks in Physics:".$c[1]["Physics"],"<br>";
?>
</head>
</html>
