<!DOCTYPE html>
<html>
<head>
<?php
$n = 345;
$a = 0;
while($n>1)
{
	$p = $n % 10;
	$a = ($a*10)+$p;
	$n = ($n/10);
}	
echo "Reverse number is:" .$a;
?>
</head>
</html>