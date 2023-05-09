<?php 

error_reporting(-1);

// $this = '123'; предопределённая

 $title = "PHP";

$titles = "шрифт и {$title}s";

define("PAGE", "nev page");

 // <!-- const работает только с php 5.3 и выше использовать только в начале кода-->
 const PAGE2 = "nev const";

// обявлена константа
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
     <?php echo $title; ?>
    </title>

    <!-- <link rel="preconnect" href="Pompadur.ttf"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Roboto:wght@100&display=swap"
        rel="stylesheet"> -->
    <!-- <style>
        @font-face {
            font-family: Pompadur;
            /* Гарнитура шрифта */
            src: url(pompadur.ttf);
            /* Путь к файлу со шрифтом */
        }

        h1 {
            font-family: Pompadur, 'Comic Sans MS', cursive;
        }
    </style> -->
</head>

<body>
    <style>
        @font-face {
            font-family: test;
            src: url('Pompadur.ttf');
        }

        h1 {
            font-family: test;
        }
    </style>
    <h1> Проверка и test  PHP подключения шрифтов </h1>
    <p>четыри типа данных </p>

    <p>boolean: true | false </p>
    <p>integer-целое число</p>
    <p>float-число с плаваюшей точкой </p>
    <p>string- строка </p>

        <?php echo $titles;  

        // <!-- константа  -->
         print PAGE2; 
 
         $int = 123;
         var_dump($int);

         $fl = 1.2;
         var_dump($fl);

         $str = 'Hello test';
         var_dump($str);
        //  использование кавычек в строке

        $str = "Hello test'kavichki'";
        $str2 = 'Hello test\'kavichki\'';

        $str3 = <<<HERE
        Hello test 'kavichki'HERE $title
        HERE;

        $str3 = <<<'HERE'
        Hello "test" 'kavichki'HERE $title
        HERE;
      
        // В 3 Случае следить за пробелатми HEREDOC  NOWDOC

        echo $str;
        echo $str2;
        echo $str3;

     
       
        $var = true;
        echo $var . '<br>';
        

        $var = false;
         var_dump($var);
        //  вывод bool(false)

        // echo gettype($var);
        // вывод boolean

        // функцыя для дебага

        // -----------цыклы----------------------

        // $i = 1;
        // echo '<table border="1">';
        // while($i <= 10){
        //    echo "<tr>"; 
        //    $n = 1;
        //    while($n <= 3){
        //         echo "<td>Row $i | Col - $n</td>";
        //         $n++;
        //    }
        //    echo "</tr>";
        //    $i++;
        // }
        // echo '</table>';

        $i = 1;
        echo "<table border=\"1\"> . \n";
        while($i <= 9){
           echo "<tr>"; 
           $n = 1;
           while($n <= 9){
                echo "\t<td>$n * $i = " . $n * $i . "</td>\n";
                $n++;
           }
           echo "</tr>\n";
           $i++;
        }
        echo '</table>';

        // ------------------масивы-----------------------------------------------------

        $arr = array('Ivanov', 'Petrov', 'Sidorov');
        // var_dump($arr);
        echo "<pre>";
        print_r($arr);
        echo "<pre>";

        echo $arr[2];
        // -------------------многомерный масив---------------------------------
        $arr2 = [
            1,
            [
                'banan',
                'orange',
                'apple'
            ],
            3,
            4,
            5,
            'cat',
            7,
            8,
            [
                'black',
                'wait'
            ],
            10,
            ];

        echo "<pre>";
        print_r($arr2);
        echo "<pre>";

        echo $arr2[8][0] . '<br>';
        echo $arr2[1][2];
        
        $arr3 = [
            2 => 'Ivanov',
            4 => 'Petrov',
            10 => 'Sidorov'
        ];

        echo "<pre>";
        print_r($arr3);
        echo "<pre>";

        echo $arr3[10];

        // -------------------асоциативный масив------------9-----------------------

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
            ]
        ];

        echo "<pre>";
        print_r($goods);
        echo "<pre>";

        echo $goods[1]['title'] . ' - ' . $goods[0]['price'];
        echo '<br>';
        echo $goods[0]['title'] . ' - ' . $goods[1]['price'];
       
        $goods = 1;
        echo "<div>";
        while($i <= 5){
          
           $goods++;
        }
        echo '</div>';

        
        ?>

                <h2><?php echo PAGE; ?> </h2>
</body>

</html>