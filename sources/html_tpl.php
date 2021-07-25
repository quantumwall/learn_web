<?php
    function head_html ($title) {
        print "<!DOCTYPE html>\n";
        print "<html>\n";
        print "<head>\n";
        print "<title>$title</title>\n";
        print "</head>\n";
        print "<body>\n";
    }
    function end_html () {
        print "</body>\n";
        print "</html>\n";
    }
?>
