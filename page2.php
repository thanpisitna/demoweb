<!DOCTYPE html>
<html>
<body>

<?php
echo "My secound page PHP script!";
$x = 5985;
var_dump(is_numeric($x));

$x = "985";
var_dump(is_numeric($x));

$x = "60.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

</body>
</html>
</html>