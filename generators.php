<?php
        
    function counter ($start = 1, $end = 50) {
        for ($i = $start; $i < $end; $i++) {
            yield $i;
        }
    }
    /*foreach (counter() as $number) {
        if ($number >= 10) break;
        print $number;
    }
    print "<br>Continuamos";
    print counter()."<br>";
    print counter()."<br>";*/

    function pairs ($arr, $callback) {
        foreach ($arr as $elmnt) {
            if ($callback ($elmnt) && $elmnt >= 0) yield $elmnt;
        }
    }

   $arr = function(){
        for ($i = 0; $i < 5; $i++) {
            yield mt_rand(1, 50);
        }
   };
    

    //вызов генератора из генератора с помощью from
    //генератор square также должен возвращать с 
    //помощью yield, если return будет ошибка
    function square ($number) {
        yield $number * $number;
    }
    function even_numbers ($arr) {
        foreach ($arr as $value) {
            if ($value % 2 == 0) {
                yield from square($value);
            }
        }
    }
    $squares = even_numbers($arr());
    foreach ($squares as $value) {
       print "$value<br>\n";
    }
    //memory_get_usage выдает количество байт
    //которое потребляет скрипт
    print memory_get_usage() / 1024 . "kB";

?>
