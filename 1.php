<html>
<head> <title>Lesson 2</title></head>
<body>
<h3> Задание 1 </h3>
Таблица истинности:
<?php
$x = false;
$y = true;
?>
<table border="1">
    <td>  X  </td>
    <td>  Y  </td>
    <td>   X and Y  </td>
    <td>   X or Y  </td>
    <td> X xor Y </td>
    <tr>
        <td> <?php echo (int) $x ?> </td>
        <td> <?php echo (int) $x ?> </td>
        <td> <?php echo (int) ($x && $x) ?> </td>
        <td> <?php echo (int) ($x || $x) ?> </td>
        <td> <?php echo (int) ($x xor $x) ?> </td>
    </tr>
    <tr>
        <td> <?php echo (int) $x ?> </td>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) ($x && $y) ?> </td>
        <td> <?php echo (int) ($x || $y) ?> </td>
        <td> <?php echo (int) ($x xor $y) ?> </td>
    </tr>
    <tr>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) $x ?> </td>
        <td> <?php echo (int) ($x && $y) ?> </td>
        <td> <?php echo (int) ($x || $y) ?> </td>
        <td> <?php echo (int) ($x xor $y) ?> </td>
    </tr>
    <tr>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) ($y && $y) ?> </td>
        <td> <?php echo (int) ($y || $y) ?> </td>
        <td> <?php echo (int) ($y xor $y) ?> </td>
    </tr>
        <tr>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) $y ?> </td>
        <td> <?php echo (int) ($y && $y) ?> </td>
        <td> <?php echo (int) ($y || $y) ?> </td>
        <td> <?php echo (int) ($y xor $y) ?> </td>
    </tr>
</table>
<body>
</html>
