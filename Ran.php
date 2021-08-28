<!DOCTYPE html>
<html>
<head>
<?php
$student_marks = array(
"Sunil"=>array("English"=> 87, "Maths"=>82, "Physics"=>93),
"Rahul"=>array("English"=> 94, "Maths"=>72, "Physics"=>84),
);
$sum = 0;
foreach ($student_marks as $key => $value){
	foreach ($value as $k => $v) {
		for ($i=0; $i < sizeof($v) ;$i++) { 
			$sum += $v[$i];
		}
	}
		echo "Sum of " .$key. " Marks is: " .$sum. "<br>";
}
echo "<pre>";
print_r($student_marks);
echo "</pre>";
?>
</head>
</html>