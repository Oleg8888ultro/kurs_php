<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>

<body>

</body>

</html>

<?php
$str = 'Привет мир';
// echo mb_strpos($str, 'и', 9, 'utf-8');
if (mb_strpos($str, 'п') !== false) {
    // строгое сравнение.   mb_stripos не чувствителен к регистру
    echo 'Есть буква И';
} else {
    echo 'Буквы И нету';
}

echo '<br>';

$str = "У Мэри Был Маленький Ягнёнок и Она Его Очень ЛЮБИЛА";
$str = mb_strtolower($str);
echo $str; // Выведет у мэри был маленький ягнёнок и она его очень любила

echo '<br>';

$str = "У Мэри Был Маленький Ягнёнок и Она Его Очень ЛЮБИЛА";
$str = mb_strtoupper($str);
echo $str; // Выведет У МЭРИ БЫЛ МАЛЕНЬКИЙ ЯГНЕНОК И ОНА ЕГО ОЧЕНЬ ЛЮБИЛА

echo '<br>';
?>