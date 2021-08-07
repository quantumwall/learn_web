<?php
    
    setlocale(LC_ALL, '');
    require_once "sources/html_tpl.php";
    require_once "sources/function.php";

    head_html("Arrays");


    $arr = ["a" => "zero",
            "t" => "Zero",
            "d" => "Centauro"];
    $index_array = ["Patatas", "Tomato", "Bacon"];
    myprint("Before string sorting:\n", ...$arr);
    print "<br>";
    asort($arr);
    myprint("After string sorting:\n", ...$arr);
    print "<br>";
    arsort($arr);
    myprint("Reverse string sort\n", ...$arr);
    print "<br>";
    asort($arr, SORT_NUMERIC);
    myprint("Numeric sort:\n", ...$arr);
    print "\n";
    asort($index_array);
    foreach ($index_array as $key => $value) {
        print "$key => $value\n";
    } 
    print "<br>\n";
    foreach (array_reverse($index_array) as $key => $value) {
        print "$key => $value";
    }
    shuffle($arr);
    shuffle($index_array);
    print "<pre>";
    print_r($arr);
    print_r($index_array);
    print "</pre>";

    end_html();
?>
