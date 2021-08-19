<?php

    setlocale(LC_ALL, 'ru_RU.UTF-8');
    require_once('sources/function.php');
    require_once('sources/html_tpl.php');

    head_html('Regular expressions');

    $text = htmlspecialchars(file_get_contents(__FILE__));
    $html = preg_replace('/(\$[a-z]\w*)/i', "<b>$1</b>", $text);
    myprint($html);

    end_html();
?>
