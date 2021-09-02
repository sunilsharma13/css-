<!-- print into lowercase and uppercase -->
<?php
$name = array("Sunil","Parth","mayank");
$a = array_map("strtolower",$name);
$b = array_map("strtoupper",$name);
print_r($a);
echo "<br>";
print_r($b);
?>
