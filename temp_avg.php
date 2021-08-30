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
?>
</head>
</html>