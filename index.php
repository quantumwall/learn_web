<?php
    require_once "sources/html_tpl.php";
    head_html("Home page");
    
    function myecho (...$arguments) {
        foreach ($arguments as $argument) {
            echo "$argument\n<br>";
        }
    }

    myecho(...[1,2,3,4,5,'sting']);

    function counter () {
        static $count = 0;
        $count++;
        print $count;
    }


    for ($i = 0; $i < 5; $i++) {
        counter();
    }

    print "<br>\n";
    //print "<pre>";
    print_r($GLOBALS);
    //print "</pre>";
    end_html();
?>
