<?php
// $a = 20;
// $b = 76;
$a = range(15,50);
 shuffle($a);
for ($i=15; $i < 50; $i++) { 
    echo $a[$i] ;
    echo " ";
}   
// echo rand(20,67);
?>