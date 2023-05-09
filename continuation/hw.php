
<?php
error_reporting(-1);



$var = "Hello peremennaja"; ?>
<!-- вывад всех ошибок  -->

<?php $var = "Hello"; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var; ?></title>
</head>
<body>
    <?php 
     $Var = "123";

    echo "Hello Oleg {$var}sin";

    echo $var;
    ?>

    <?php 
    print "<p>Hello print))) </p>";
    ?>

    <!-- вывод на эеран  -->

    <?php 

    // константы

    
     

    echo $var;
    ?>

    <?php

    echo $Var;
    // остаток при делении
    $a = 20;
    $b = 3;
    $c = 2;
    $d = 3;

    // echo $a % $b;
    // возведение в степень
    // echo $b ** $c;
    // вариант в версиях до 5,6
    // echo pow(2, 4);

    // присвоение  по ссылке

    // $e = &$a;
    // $c = &$b;
    // var_dump($a);
    // $a = 7;
    // $b = 8;
    // var_dump($a);
    // var_dump($e);
    // var_dump($c);

        // комбенированный оператор
    // $a = 5;
    // $a = $a + 2;
    $a += 2;
    var_dump($a);

    // аналоги для понимания

    // $i++; $i = $i + 1; $i += 1;

    $str1 = 'Hello,';
    $str1 .= 'world';

    var_dump($str1);

    echo $str1;

    // NULL
    $mar = NULL;
    // unset($mar);
    $mar++;
    var_dump($mar);

    // условия

    if( 5 >= 5 ){
        echo'OK';
    }

    if( 5 != 4 ){
        echo'OK' . '<br>';
    }

    $light = 'black';
    if( $light == 'red' ){
        if( 5 > 3 ){
            echo 'true';
        }
        echo'OK gogl';
    }elseif($light == 'elov'){
        echo'ok jandex';
    }elseif($light == 'black'){
        echo 'black begraunt' . '<br>';
    }else{
        echo 'infiniti';
    }

    // --------цыклы---------

//    $i = 1;

//     while($i <= 10){
//         echo $i . '<br>';
//         $i++;
//         // $i++; $i = $i + 1; $i += 1;
//     }
    // $i = 10;

    // while($i >= 1){
    //     echo $i-- . "\n";
    //     // сокращ ённый вариант
    //     // $i--;
    //     // $i++; $i = $i + 1; $i += 1;
    //     // <br>  \n перенос строки в коде    \t табуляция
    // }

    // ------------саздание таблицы с помощью циклов и условий-------------------

    // $i = 1;
    // echo "<table border=\"1\">\n";
    // while($i <= 15){ 
    //     echo "<tr>\n";
    //     $n = 1;
    //     while($n <= 5){
    //         echo "\t\t<td>строка i $i | колонка \"n\" $n</td>\n";
    //         $n++;
    //     }
    //     echo "</tr>\n";
    //     $i++;
    // }
    // echo '</table>';

    $year = 1900;
    echo "<select>\n";
        while($year <= 2023){
            echo "\t<option value='$year'>$year</option>\n";
            $year++;
        }
    echo "</select>\n";

    // $i = 12;
    // do{
    //     echo $i++ . '<br>';
    // }while($i <= 10);

    // ---------------таблица умножения разработанная мной в первый раз 05.05.2023---------
    // ----------------------с коректировкой для четабельности кода-------------------------

    $i = 1;
    echo "<table border= \"1\">\n ";
    while($i <= 9){
        echo "<tr>\n";
        $n = 1;
        while($n <= 9){
            // $r = $i * $n;
            // echo "\t<td>$n * $i = $r</td>\n";
            echo "\t<td>$n * $i =" . $n * $i . "</td>\n";
            $n++;
        }

        echo "</tr>\n";
        $i++;
    }

    echo "</table>";

    ?>


    

</body>
</html>