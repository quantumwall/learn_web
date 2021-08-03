<?php
    require_once "sources/html_tpl.php";
    head_html("Home page");
    
    function myprint_r ($obj) {
        print "<pre>";
        print_r($obj);
        print "</pre>";
    }

    function myecho (...$arguments) {
        foreach ($arguments as $argument) {
            echo "$argument\n<br>";
        }
    }

    //myecho(...[1,2,3,4,5,'sting']);

    /*function counter () {
        static $count = 0;
        $count++;
        print $count;
    }*/
    
    function tabber ($spaces, ...$args) {
        $arr = [];
        /*foreach ($args as $values) {
            $arr[] = str_repeat("&nbsp;", $spaces).$values;
        }*/
        for ($i = 0; $i < count($args); $i++) {
            $arr[] = str_repeat("&nbsp;", $spaces + $i).$args[$i];
        }
        myecho (...$arr);
    }
    tabber (10, "string1", "string2", "string3");


    end_html();


?>
