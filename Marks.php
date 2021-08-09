<DOCTYPE html>
<html>
<head>
<?php
$marks = array(
	"Sunil" => array(
	  	"Maths"=>"90",
	  	"Physics"=>"78",
	  	"English"=>"88",
	),

	"Rahul" => array(
		"Maths"=>"87",
		"Physics"=>"92",
		"English"=>"73",
	),
);
print_r($marks);
echo "<br>";
echo $marks["Sunil"]["Maths"], "<br>";
foreach ($marks as $marks) {
	echo "Marks List","<br>";
	echo "Marks in Maths: ", $marks["Maths"] , "<br>";
	echo "Marks in Physics: ", $marks["Physics"], "<br>";
	echo "Marks in English: ", $marks["English"], "<br>","<br>";
}
?>
</head>
</html>		
