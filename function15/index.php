<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function15</title>
</head>

<body>


</body>

</html>

<?php error_reporting(-1);

require_once 'funcs.php';

$nums = [1, 2, 3];
$names = ['Ivanov', 'Petrov'];

$keys = array_keys($nums);
print_r($keys);
 

$keys2 = my_array_keys($names);
print_r($keys2);

// echo count($nums) . "<br>";
// echo count($names) . "<br>";



// $x = 50;
// $y = 50;

// sum(5, 7);
// sum(10, 5);
// sum(5, 10);
// sum($x, $y);



// $a = 5;
// $b = 10;

// echo $a;

// sum($a, $b);

// echo $a;

// $a = 5;
// $b = 10;
// echo $a;
// echo '<br>';

// sum($a, $b);

// echo $a;

// echo 8 + sum(1,2);

?>