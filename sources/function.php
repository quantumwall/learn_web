<?php
    
    $img_path = '/images/'; 
    function image($src, $alt = "some image", $width = "", $height = "") {
        global $img_path;
        $src = $img_path . $src;
        if (!$width && !$height) {
            $width = "400px";
        }
        print "<img src=\"$src\" alt=\"$alt\" width=\"$width\" height=\"$height\">";
   }

    function hexcolor (int $red, int $green, int $blue): string {
        if (($red < 0 || $red > 255) ||
            ($green < 0 || $green > 255) ||
            ($blue < 0 || $blue > 255)) {
            return 0;
        }
        $red = dechex($red);
        $green = dechex($green);
        $blue = dechex($blue);
        print "#" . $red . $green . $blue;
    }
    function myprint(...$args) {
        foreach ($args as $arg) {
            print "$arg<br>\n";
        }
    }

	function myprintr ($obj) {
		print "<pre>";
		print_r($obj);
		print "</pre>";
	}
    
 
?>
