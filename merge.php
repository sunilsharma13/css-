<!-- removing an duplicate value which appearing more than once in an array -->
<?php 
$a = array(34,54,34,67,96,45,98);
$b = array(34,54,67,99,96,54,57);

$c = implode(" ",array_unique(array_merge($a,$b)));
print_r($c);
?>
<!-- implode is used for remove key values from an array and print only values -->
<!-- array_unique is used for remove duplicate values -->
<!-- array_merge is used for mergin $a with $b -->
