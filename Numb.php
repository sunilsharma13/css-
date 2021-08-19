<!DOCTYPE html>
<html>
<head>
<?php
$student = array
  (
  array("Sunil",98,81),
  array("Mayank",84,90),
  array("Ravi",92,88)
  );

echo $student[0][0].":- Maths: ".$student[0][1].", Physics: ".$student[0][2].".<br>";
echo $student[1][0].":- Maths: ".$student[1][1].", Physics: ".$student[1][2].".<br>";
echo $student[2][0].":- Maths: ".$student[2][1].", Physics: ".$student[2][2].".<br>";

?>
</head>
</html>