<html>
<head>
    <title>Домашка 2</title>
</head>
<body>
<h4>Опеределение пола по имени:</h4>
<?php
include __DIR__ . '/function.php';
$x='Кристина'; //Имя человека пол которого необходимо определить
echo $x . ' - ' . gender($x) . '!';
?>
</body>
</html>