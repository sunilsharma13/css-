<!-- removing an duplicate value which appearing more than once in an array -->
<?php 
$a = array(34,54,34,67,96,45,98);
$b = array_unique($a);
print_r($b);
?>