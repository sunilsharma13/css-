<!DOCTYPE html>
<html>
<head>
<?php
$x = array(1,2,3,4,5);
$y = array(7);
array_splice($x,3,0, $y);
print_r($x);
?>
</head>
</html>