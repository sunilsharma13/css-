<!DOCTYPE html>
<html>
<head>
<?php
$name_age = array("Sunil" => 21, "Ravi" => 22, "Girraj" => 23, "Mayank" => 20);
 krsort($name_age);
 // ksort() used for ascending order according to value
 // arsort() used for descending order according to key
 // asort() used for ascending order according to value
 foreach ($name_age as $key => $value) {
 echo $key. "=" .$value."<br>";
 }
?>
</head>
</html>