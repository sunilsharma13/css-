<!DOCTYPE html>
<html>
<head>
<?php
$student_marks = array(
          array("name"=>"Sunil" , "marks"=> array("English"=> 87, "Maths"=>82, "Physics"=>93)),
          array("name"=>"Rahul" , "marks"=> array("English"=> 94, "Maths"=>72, "Physics"=>84)),
);
#$sum = 0;
foreach ($student_marks as $key){
	foreach ($key as $k=>$v) {
			foreach($v as $t => $n){
			echo $k. " got " .$n. " " .$v. " in " .$t. ".", "<br>";
		#$sum += $q;
	     }   
    }
		 #echo "Sum of " .$key. " Marks is: " .$sum. "<br>";
		#$sum =0;
}	
echo "<pre>";
print_r($student_marks);
echo "</pre>";
?>
</head>
</html>