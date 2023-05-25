<?php
// require_once 'inc.php';
header('Content-Type: text/html; charset=utf-8');
//header('Location: inc.php');
header('refresh: 5; url=inc.php');
// exit;
//die;

// header('HTTP/1.0 304 Not Modified');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<!--<meta charset="UTF-8">-->
	<title>redirekt</title>
</head>

<body>

	<?= $test ?>
	привет, мир!

</body>

</html>