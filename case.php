<?php

$a = array( "Hey thEre", "sUnil","HEre");
 print_r($a);
 echo "<br>";
 foreach($a as $b){
 $c = ucfirst($b);
    // all character in lowercase: strtolower
    // all character in uppercase: strtoupper
    // first character of string in uppercase: lcfirst
    // first character of string in uppercase: ucfirst
    // // first character of each word in lowerase: ucwords
	echo $c. " ";
}
?>
