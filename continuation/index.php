<?php error_reporting(-1); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php
$arr = array('Ivanov', 'Petrov', 'Sidorov');



var_dump($arr);

$arr[8] = 'Pupkin';
$arr[] = 'Doe';


echo "<pre>";
print_r($arr);
echo "</pre>";

echo $arr[1];

$arr2 = [
    1,
    'test',
    2,
    3,
    4,
    5,
    [
        'banan',
        'oran',
        'apple'
    ],
    7
];

$arr2[9][0] = 'Oleg';
$arr2[9][1] = 'micha';


echo "<pre>";
print_r($arr2);
echo "</pre>";

echo $arr2[6][2];
echo '<br>';

$arr3 = [
    2 => 'Ivanov',
    'Petrov',
    10 => 'Sidorov'
];

echo "<pre>";
print_r($arr3);
echo "</pre>";

echo $arr3[3];
echo "<br>";

// ---------------Ассоциативные массивы---------------------------------------


$goods = [
    [
      'title' => 'Nokia',
      'price' => 100,
      'description' => 'Description'  
    ],
    [
        'title' => 'iPad',
        'price' => 300,
        'description' => 'Description'  
    ],
    [
        'title' => 'xiomi',
        'price' => 500,
        'description' => 'Description'  
    ],
    [
        'title' => 'nano',
        'price' => 1500,
        'description' => 'Description'  
    ],
    [
        'title' => 'ultro',
        'price' => 15000,
        'description' => 'Description'  
    ]
];

echo "<pre>";
print_r($goods);
echo "</pre>";

$l = count($goods);
echo "<br>";

echo count($goods);
echo "<br>";
echo "<br>";


 

// echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
// echo "<br>";
// echo $goods[1]['title'] . ' - ' . $goods[1]['price'];
// echo "<br>";


$y = 0;
while($y < $l){  
echo $goods[$y]['title'] . ' - ' . $goods[$y]['price'];
echo "<br>";
$y++;

}

// $x = 0;
// while($x <= 1){ 
// echo $goods[$x]['description'] . ' - ' . $goods[$x]['description'];
// echo "<br>";
// $x++;

// }
// ---------функция количество масивав--------------------------------


// $i = 10;
// while($i >= 1){
// 	echo $i . '<br>';
// 	$i--; // $i = $i + 1; $i += 1;
// }

// // строка
// $i = 1;
// echo "<table border=\"1\">";
// while($i <= 15){
// 	echo "<tr>";

//                                     // колонка
//                                     $n = 1;
//                                     while($n <= 5){
//                                         echo "<td>Row $i | Col - $n</td>";
//                                         $n++;
//                                     }
// 	echo "</tr>";
// 	$i++;
// }
// echo '</table>';

// ------------array_diff выводит элементы которые не повторяются в пнрвой строке------------

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

echo "<pre>";
print_r($result);
echo "</pre>";


// -----------цыкл for--------------

// for($i = 1; $i < 10; $i++){
//     echo $i . "<br>";
// }

echo "<table border = \"1\" ";
for($i = 1; $i <= 9; $i++){
    echo "<tr>";
    for($n = 1; $n <= 9; $n++){
        echo "<td>$n * $i =" . $n * $i . "</td>";
    }
    echo "</tr>";
}

echo "</table>";


echo "<select>";
for($year = 1900; $year <= 2023; $year++){
    echo "<option value='$year'>$year</option>";
}

echo "</select>" . "<br>";

// -------------------foreach---------------------------------------

// --------foreach c мнгомерными масивами----------------------------
// https://metanit.com/php/tutorial/2.16.php     пример

$names = [
    'Oleg' => 'Olegin',
    'Mang' => 'Mangustov',
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];



// foreach($goods as $name){
//     echo $name . '<br>';
// }

foreach($names as $key => $name){
    // echo "Name: $key, Surname: $name <br>";
    echo $key,  $name  . "<br>";
}

echo '<pre>';
print_r($goods);
echo '</pre>';

// многомерный масив и foreach

foreach($goods as $v){
    foreach($v as $v2){
        echo "name: $v2<br>";
    // echo "Key: $k, Name: $v <br>";
}
}

$names['Pup'] = 'Pupkin';


foreach($names as $name){
    if($name == 'Petrov') continue;
         echo $name . '<br>';
     }

     echo 'Phiminenie BREAK <br>';

     foreach($names as $name){
        echo $name . '<br>';
        if($name == 'Ivanov') { 
             echo 'srabotal break';
             break;
            }
         }
    
         foreach($names as $name){
            
            if($name == 'Olegin' && $name == 'Sidorov') continue;
            echo $name . '<br>';
             }

echo '<pre>';
print_r($names);
echo '</pre>';


// AND &&  И  true если два операнта несут истину

// OR  ||  Или true хотябы один из оперантов несет истинну


$a = 2;
if($a > 3 && $a < 7){
    echo 'OK <br>';
}else{
    echo 'No <br>';
}


if($a > 3 || $a < 7){
    echo 'OK';
}else{
    echo 'No';
}

// ------------------оператор break--------------------------------
        //    останавлевает процес
for($i = 0; $i <= 30; $i++){
    echo $i . '<br>';
    if($i == 5)
    // echo '<h1>Found!!!</h1>';
    {
        echo '<h1>Found!!!</h1>';
        break;
    } 
}

// ----------------continue--------------------------------------------

for($i = 0; $i <= 30; $i++){
    // if($i == 10 || $i == 29) continue;
    if($i >= 10 && $i <= 29) continue;
    // не показывать от 10 - 29
    echo $i . '<br>';
}   

// ------------------оператор switch-----------------------------------------------------

$var = 5;

// if($var == 1){
//     echo 'Variable = 1';
// }elseif($var == 2){
//     echo 'Variable = 2';
// }elseif($var == 3){
//     echo 'Variable = 3';
// }else{
//     echo 'Something else...';

// }

switch($var){
    case 1:
        echo 'Variable = 1';
        break;
    case 2:
        echo 'Variable = 2';
        break;
    case 1 + 2:
        echo 'Variable = 3';
        break; 
    default:
        echo 'Something else...';
}

echo "<br>";

// --------------------альтернативный синтаксис управляющих структур------------------------------

// ===   строгое сравнение не только по значению но и по типу к примеру  bool === 1 будет false , а bool === true будет true
// (false)
$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;

// if($bool){
//     echo '<table class="table" border="1">
//             <tr>
//                 <td>' . $str1 . '</td>
//                 <td>' . $str2 . '</td>
//                 <td>' . $str3 . '</td>
//             </tr> 
//             </table>';
// }

foreach($names as $name => $surname){
	echo "Name: $name, Surname: $surname <br>";
}




?>

 <?php if($bool): ?>
	<table class="table" border="1">
		<tr>
			<td><?php echo $str1 ?></td>
			<td><?php echo $str2 ?></td>
			<td><?php echo $str3 ?></td>
		</tr>
	</table>
    <br>
<?php endif; ?>

<?php foreach($names as $name => $surname): ?>
	Name: <?php echo $name ?>, Surname: <?php echo $surname ?> <br>
<?php endforeach; ?>
      


</body>
</html>
