<!DOC<!DOCTYPE html>
<html>
<body>
<?php 
$cars = array("Audi", "BMW", "Toyota"); 
$cars = array_flip($cars);
$cars = array_change_key_case($cars, CASE_UPPER);
$cars = array_flip($cars); 
print_r($cars);
?>
</body>

</html>



