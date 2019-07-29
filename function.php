<?php
function diskriminant ($a, $b, $c)
{
    return ($b * $b - 4 * $a * $c);
}
assert( 0 == diskriminant (0,0,0) );
assert( 0 == diskriminant (0.5,1,0.5) );
assert( 200 == diskriminant (5,10,-5) );

function gender($x)
{
    if (substr($x, -2) == 'б') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'в') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'г') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'д') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'ж') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'з') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'к') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'л') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'м') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'н') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'й') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'п') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'р') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'с') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'т') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'ф') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'ч') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'ш') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'щ') {
        return 'мужчина';
    } elseif ($x == 'Илья') {
        return 'мужчина';
    } elseif ($x == 'Афоня') {
        return 'мужчина';
    } elseif ($x == 'Игорь') {
        return 'мужчина';
    } elseif ($x == 'Савва') {
        return 'мужчина';
    } elseif ($x == '') {
        return 'мужчина';
    } elseif (substr($x, -2) == 'а' || substr($x, -2) == 'я' || substr($x, -2) == 'ь' || substr($x, -2) == 'и') {
        return 'женщина';
    }    else {
        return null;
    }
}
assert('мужчина'==gender('Григорий'));
assert('женщина'==gender('Виктория'));
assert('мужчина'==gender('Богдан'));
?>