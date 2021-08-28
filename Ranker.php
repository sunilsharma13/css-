<!DOCTYPE html>
<html>
<head>
<?php
$student_marks = array(
"Sunil"=>array("English"=> 87, "Maths"=>82, "Physics"=>93),
"Rahul"=>array("English"=> 94, "Maths"=>72, "Physics"=>84),
);
$Total_marks = array("Sunil"=>262, "Rahul"=>250);
echo "<pre>";
print_r($student_marks);
echo "</pre>";
echo "Total marks of students: ";
echo "<br>";
echo "<pre>";
 print_r($Total_marks);
 echo "</pre>";
 echo "<br>";
 echo "Ranker of the class is: <br>";
 foreach ($Total_marks as $k => $v) {
 for($i=0 ; $i < count($v) ; $i++){
	for($j=$i+1 ; $j < count($v) ; $j++) {
		if ($v[$i] > $v[$j]){
			$temp = $v[$i];
			$v[$i] = $v[$j];
			$v[$j] = $temp;
        }
    }
} 
print_r($v);  
echo "<br>";  
}
?>
</head>
</html>