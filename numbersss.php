<!DOCTYPE html>
<html>
<head>
<?php
$student_marks = array(
"Sunil"=> array("English"=> 87, "Maths"=>82),
"Rahul"=> array("English"=> 94, "Maths"=>72),
);
echo "<pre>";
print_r($student_marks);
echo "</pre>";
	foreach ( $student_marks as $k) {}
	if ($k["Maths"] > $k["English"]) {
		echo "Sunil got more marks in Maths";
		
	} else {
		echo "Sunil got more marks in English";
	}

?>
</head>
</html>