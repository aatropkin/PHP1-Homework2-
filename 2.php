<html>
<head> <title>Lesson 2</title></head>
<body>

<h3> Задание 2 <h3>
 <?php
 include __DIR__ . '/function.php';
 $a=2;
 $b=4;
 $c=1;
        if ($a!=0 and $b!=0 and $c!=0) {
        echo 'Имеем полное квадратное уравнение:' . $a. '&#149  x&#178 +' . $b . '&#149 x +' . $c . ' = 0';
        } else {
        echo 'Имеем неполное квадратное уравнение!  Вычисления не точны! Используйте другую программу!';
        }
        ?>
        <br/>
        <?php
        echo 'Дискриминант квадратного уравнения равен: D='. diskriminant ($a, $b, $c);
        ?>
        <br/>
        <?php
        $D=diskriminant($a, $b, $c);
        if ($D>0) {
            echo 'Уравнение имеет два действительных корня:X1=' . (-$b+sqrt($D))/(2*$a) . ' X2='. (-$b-sqrt($D))/(2*$a);
        } elseif ($D==0) {
            echo 'Уравнение имеет один корень X1=' . (-$b+sqrt($D))/(2*$a);
        } else {
            echo 'Дискриминант меньше нуля! Уравнение имеет два мнимых  корня.';
        }
        ?>
        <body>
</html>