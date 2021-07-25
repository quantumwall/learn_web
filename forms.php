<?php
    require_once 'sources/html_tpl.php';

    head_html("Forms exercise");

    for ($i = 0, $k = 0, $text = "this is no end";
        $i < 50; $i++) {
            $text .= ".";
            $k += $i;
        }
    print "<p>$text</p>";
    end_html();
 ?>
