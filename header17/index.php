<?php
// require_once 'inc.php';
header('Content-Type: text/html; charset=utf-8');
// header('Content-Type: text/plain; charset=utf-8');
// header('Content-Disposition: attachment; filename="downloaded1.txt"');
// readfile('text.txt');
// die;
//header('HTTP/1.0 304 Not Modified');
//header('Location: inc.php');
header('refresh: 5; url=inc.php');
//exit;
//die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!--<meta charset="UTF-8">-->
	<title>Document</title>
</head>

<body>

	<?= $test ?>
	привет, мир!!!!!

</body>

</html>