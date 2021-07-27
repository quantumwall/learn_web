<?php
    require_once "sources/html_tpl.php";
    head_html("Home page");
    
    function myecho (...$arguments) {
        foreach ($arguments as $argument) {
            echo "$argument\n<br>";
        }
    }

    myecho(...[1,2,3,4,5,'sting']);

    end_html();
