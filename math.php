<?php
    
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    require_once "sources/function.php";
    require_once "sources/html_tpl.php";
    
    head_html("Matemathic");

    //округления
    $float_numb_pos = 1234.56;
    $float_numb_neg = -2133.35344;

    //abs - возвращает абсолютное значение числа
    myprint("abs");
    myprint(abs($float_numb_pos));
    myprint(abs($float_numb_neg));
    print "<br>\n";

    //round - округляет в сторону большего числа если
    //если значение дробной части больше 0.5
    myprint("round");
    myprint(round($float_numb_pos));
    myprint(round($float_numb_neg));
    myprint(round($float_numb_pos, 0, PHP_ROUND_HALF_DOWN));
    myprint(round($float_numb_neg, 0, PHP_ROUND_HALF_UP));
    print "<br>\n";

    //ceil всегда округляет в сторону большего числа
    myprint("ceil");
    myprint(ceil($float_numb_pos));
    myprint(ceil($float_numb_neg));
    print "<br>\n";
    
    //floor всегда округляет в сторону меньшего числа
    myprint("floor");
    myprint(floor($float_numb_pos));
    myprint(floor($float_numb_neg));
    print "<br>\n";
    
    //случайные числа

    //mt_rand возвращает случайное число из заданного диапазона
    //максимальное число, которое может вернуть mt_rand
    //можно получить из функции mt_getrandmax
    myprint("mt_rand");
    myprint(mt_rand(1, 10));
    myprint("Максимальное число для mt_rand - " . mt_getrandmax());

    //системы счисления
    //base_convert возвращает числовую строку числа сконвертированного
    //из одной системы счисления в другую
    myprint("base_convert", "из десятичной в двоичную");
    myprint("число 34356 в двоичной " . base_convert("34356", 10, 2));
    myprint("это же двоичное в 16-ричную " . base_convert("1000011000110100", 2, 16));
    myprint("оно же в 8-ричную " . base_convert("8634", 16, 8));
    myprint("обратно в 10-тичную " . base_convert("103064", 8, 10));
    print "<br>\n";
    myprint("bindec - из двоичной в десятичную, принимает строку, возращает число");
    myprint("octdec - из восьмеричной в десятичную");
    myprint("hexdec - из шестнадцатеричной в десятичную");
    print "<br>\n";
    myprint("decbin - из десятичной в двоичную, принимает число, возвращает строку");
    myprint("decoct - из десятичной в восьмеричну, принимает число, возвращает строку");
    myprint("dechex - из десятичной в шестнадцатеричную, принимает число, возвращает строку");

    print "<br>\n";
    //max/min

    myprint("min/max принимают несколько чисел или один массив с числами и возвращают минимальное или максимальное из чисел");

    end_html();

?>
