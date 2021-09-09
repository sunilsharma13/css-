<!-- program to find the result using roll number-->
<?php
$name = array(
    array("Roll_number"=>4, "Name"=>"Sunil", "Annual %"=>92),
    array("Roll_number"=>12, "Name"=>"Pankaj", ""=>87),
    array("Roll_number"=>6, "Name"=>"Mayank", "Annual %"=>91),
    array("Roll_number"=>14, "Name"=>"Neeraj", "Annual %"=>82),
    array("Roll_number"=>1, "Name"=>"Amit", "Annual %"=>72),
    array("Roll_number"=>9, "Name"=>"Himanshu", "Annual %"=>62),
);
function Rn($a,$b)
{
    if ($a["Roll_number"] == $b["Roll_number"])
     return 0;
    return ($a["Roll_number"] > $b["Roll_number"]) ? 1  : -1;
}
usort($name,'Rn');
echo "<pre>";
print_r($name);
echo "</pre>";
?>
