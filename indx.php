<!-- find the index of the highest value in an associative array -->
<?php
$marks = array("Sunil" => 78 , "Mohit" => 97 , "Kartik" => 72 , "Shivam" => 92);
arsort($marks);
$a = key($marks);
echo $a;
// foreach($marks as $key => $v){
    // $a  = max($v);
    // $b = key_search($a,$v);
    // for ($i=0; $i < count($v); $i++) { 
        // $maxs = array_keys($v[$i], max($v[$i]));
        // print_r($maxs);
    // for ($i=0; $i < count($v); $i++) { 
        // for ($j=$i+1; $j< count($v) ; $j++) { 
            // if($v[$i] < $v[$j]){
                // $temp = $v[$i];
                // $v[$i] = $v[$j];
                // $v[$j] = $temp;
                // }
                // }
                // }
            // }
            // print_r($b);
// echo $key. " " .$v. "<br>";
?>