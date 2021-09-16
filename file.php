<?php
$list = array(
    1 => array(
        "employee_name" => "Sunil",
        "salary" => "20k",
         "age" => 27  
    ),
    2 => array(
        "employee_name" => "Manish",
        "salary" => "25k",
        "age" => 25  
    ),  
    3 => array(
        "employee_name" => "Ravi",
        "salary" => "15k",
        "age" => 28   
    )   
); 
echo "<table border='2px' cellpadding='5px'>
 <tr>
 <th>employee id</th>
 <th>employee name</th>
 <th>employee salary</th>
 <th>employee age</th>
 </tr>";
     foreach($list as $key => $value){
         echo "<tr>
         <td>$key</td>";
         foreach($value as $values){
         echo "<td> $values </td>";
        }
       echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    $a = 0;
    $b = -5555555;
        foreach($list as $q => $r){
            if($r["age"] > $b){
                $b = $r["age"];
                $a = $r;
        }
    }
    // echo $c;
    echo "the detail of person having higher age is: <br>";
    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>