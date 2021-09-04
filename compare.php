
<!-- compare two arrays and return the difference -->
<?php
$a = array(1,43,56,87,57,89,58,34);
$b = array(1,57,87,56,34);
$d = array_diff($a,$b);
print_r($d);
echo "<br>";


// in multidimensional array 
 
$p = array("x" => 28, "y" => 60, "z" => array(14,56,87,3,78));
$q = array("x" => 45, "y" => 10, "z" => array(87,78,56));
$r = array_diff($p["z"],$q["z"]);
print_r($r);
?>