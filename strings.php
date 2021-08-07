<?php
    //установка локали LC_ALL для всего, не указывая 
    //тип локали
    setlocale(LC_ALL, '');
    require_once "sources/html_tpl.php";
    require_once "sources/function.php";

    head_html("String functions");

    $str = "  This is the string with whitespaces in begin and the end   ";

    //strpos позиция искомой подстроки в исходной строке
    myprint( strpos($str, 'the'));
    myprint( $str[10]);
    myprint( strpos(trim($str), "the"));
    myprint( "Lenght of original string - ".strlen($str));
    myprint( "Lenght of string without whitespace - ".strlen(trim($str)));
    $code_example = <<<code
<?php 
    myprint( "Hello");
?>
code;
    myprint( htmlspecialchars($code_example));

    myprint( sprintf("The percent - %'~-15.2f%%", 23.5));
    //функция myprint(f работает точно также, но не 
    //возвращает строку, а печатает в браузер
    myprint( number_format(2345677890, 2, ", ", " "));
    
    $html_str = "<p>This is\nthe demonstration of function<br>\nnl2br\n";
    myprint( $html_str);
    myprint(nl2br($html_str));

    myprint("strip_tags demo", strip_tags($html_str));
    
    function cite ($text, $max_len = 60, $prefix = "> ") {
        $st = wordwrap($text, $max_len - strlen($prefix), "\n");
        $st = str_replace("\n", "<br>$prefix", $st);
        return $st;
    }
    myprint(cite($html_str, 5));
    

    //получение хеша строки, метод ниже рекомендуем
    //для получения хеша пароля
    $pass = "qwerty12345";
    $hash = password_hash($pass, PASSWORD_BCRYPT);

    //проверка соответствеия пароля хэшу
    if (password_verify($pass, $hash)) {
        print "Match";
    } else {
        print "No match";
    }


    end_html();
?>
