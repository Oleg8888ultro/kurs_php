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

$str = 'Привет, мир!';
echo mb_substr($str, 0, 6, 'utf-8');
echo '<br>';
echo mb_substr($str, 8, 3, 'utf-8');
echo '<br>';
echo mb_substr($str, -4, 3, 'utf-8');
echo '<br>';

$str = '&amp;<h1><i>Привет</i>! Меня зовут <b>Вася</b>!</h1><iframe src="http://webformyself.com" height="100%" width="100%"></iframe><script>alert(\'XSS\')</script>';
echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);
// echo $str;

$str = '&amp;&lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;! Меня зовут &lt;b&gt;Вася&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot;http://webformyself.com&quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo htmlspecialchars_decode($str);


?>