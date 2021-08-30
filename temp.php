<!DOCTYPE html>
<html>
<head>
<?php
$Temp = array(34,49,87,56,45,88,67,47,38,98,68);
$sum =0;
 $n = count($Temp);
 foreach ($Temp as $value) {
	 $sum += $value;
     $avg = $sum/$n;}

   // echo "hi" .$Temp.;
// echo "Sum of the temperature is: " .$sum. "<br>";
     echo "Avg of the temperatures is: " .$avg."<br>";
  /*echo "<pre>";
  print_r($sum);
  echo "</pre>"; */
   // echo "Descending order of the array is: <br>";
    /* for ($i=0; $i < count($Temp) ; $i++) { 
    	for($k=$i+1 ; $k < count($Temp) ; $k++){
          if($Temp[$i] < $Temp[$k]){
           $temp = $Temp[$i];
           $Temp[$i] = $Temp[$k];
           $Temp[$k] = $temp;
           }
    	}	
    }
       print_r ($Temp); */
       for ($i=0; $i < $n ; $i++) { 
    	for($k=$i+1 ; $k < $n ; $k++){
          if($Temp[$i] > $Temp[$k]){
           $temp = $Temp[$i];
           $Temp[$i] = $Temp[$k];
           $Temp[$k] = $temp;
        }   
    }
}
       print_r ($Temp);
       echo "<br>";
       echo "First four Lowest numbers are: ";
       for ($p=0; $p < 4; $p++) { 
       	print_r($Temp[$p]);
       	echo " ";
       }
      /* output-
      Avg of the temperatures is: 61.545454545455
Array ( [0] => 34 [1] => 38 [2] => 45 [3] => 47 [4] => 49 [5] => 56 [6] => 67 [7] => 68 [8] => 87 [9] => 88 [10] => 98 )
First four Lowest numbers are: 34 38 45 47*/
?>
</head>
</html>
