<?php
    
    setlocale(LC_ALL, 'ru_RU.UTF-8');
    require_once "sources/function.php";
    require_once "sources/html_tpl.php";

    head_html("Working with files");

    /*$f = fopen("test.txt", "rt");
    while (!feof($f)) {
        print nl2br(fread($f, 1));
    }    
    fclose($f);
    print "<br><br>\n";

    $data = file_get_contents("test.txt");
    print $data;
    
    print "<br><br>\n";

    $st = "some new string\nwith new line";
    file_put_contents("test.txt", $st);
    $f = file("test.txt");
    foreach($f as $st) {
        print nl2br($st);
    }
     */

    /*$counter_file = "counter.dat";
    fclose(fopen($counter_file, 'a+b'));
    $f = fopen($counter_file, 'r+t');
        flock($f, LOCK_EX);
        $count = fread($f, 1000);
        print "Current value: $count\n";
        $count++;
        var_dump($count);
        print "After add: $count\n";
        ftruncate($f, 0);
        fseek($f, 0, SEEK_SET);
        fwrite($f, $count);
        fflush($f);
        flock($f, LOCK_UN);
    print fgets(fopen($counter_file, 'rb'));
    */

    function print_tree ($level = 1) {
        $d = opendir(".");
        if (!$d) return;
        while (($e = readdir($d)) !== false) {
            print "$e<br>\n";
        }
    }
    print_tree();

    $dir_content = glob("*");
    print count($dir_content)."elements\n";
    myprintr($dir_content);


    end_html();
?>
