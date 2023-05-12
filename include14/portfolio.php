<?php

error_reporting(-1);

// (0) скрывает все ошибки
// E_ALL & ~E_NOTICE & ~E_WARNING    скрывает WARNING 

?>

<?php require_once 'inc/header.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_14</title>
</head>

<body>
    <h2><a href="index.php">home</a></h2>

    <h1>portfolio</h1>
    <span><a href="blog.php">blog</a> <a href="contact.php">contact</a> <a href="portfolio.php">portfolio</a></span>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>

    <!-- для подключения файлов -->

    <?php include 'inc/inc.php' ?>
    <!-- <?php require 'inc/inc.php' ?>  приориттетнее-->

    <!-- require_once
        не позволяют второй раз прописать файл
    include_once -->


    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>



    <?php require_once 'inc/footer.php' ?>







</body>

</html>

<!-- https://www.php.net/manual/ru/function.include-once.php    источник -->