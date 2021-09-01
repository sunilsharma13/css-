<?php
$name = array("Sunil","Mayank","Lokesh","Ravi");
$class = array(12,8,9,11);
// $a = strlen($name);
$b = sizeof($name);
$c = sizeof($class);
for($i=$b-1; $i >= 0 ; $i--) { 
    echo $name[$i]. " ";
}
echo "<br>";
for($j=$c-1; $j >= 0 ; $j--) { 
        echo $class[$j]. " ";
    
}
?>