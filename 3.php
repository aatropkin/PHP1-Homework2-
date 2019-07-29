<html>
<head>
    <title>задание 3</title>
</head>
<body>
<?php
var_dump(include __DIR__ . '/test.php'); // выводит содержимое файла и true в случае успеха
echo '<br>';
var_dump(include __DIR__ . '/test123.php'); // выводит warning и false в случае ошибки (файл не существует)
echo '<br>';
var_dump(include(__DIR__ . '/test.php')); // include можно использовать как функцию - выводит содержимое файла и true в случае успеха
echo '<br>';
var_dump(include(__DIR__ . '/zzzzz.php')); // из файла можно выводить не только содержимое, но и возвращать значения
?>
</body>
</html>
