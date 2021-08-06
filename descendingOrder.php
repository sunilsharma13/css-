<!DOCTYPE html>
<html>
<head>
<?php
$a = array("83","93","56","64");
for($i=0 ; $i < count($a) ; $i++){
	for($j=$i+1 ; $j < count($a) ; $j++) {
		if ($a[$i] < $a[$j]){
			$temp = $a[$i];
			$a[$i] = $a[$j];
			$a[$j] = $temp;
		}
    }
}
print_r ($a);
?>
</head>
</html>
