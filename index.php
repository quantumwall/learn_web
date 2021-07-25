<!doctype html>
<html>
<head>
	<title>Simple page</title>
</head>
<body>
    <!--<script src="/sources/main.js"></script>-->
	<?php
        
        $home_dir = "/home/rico/";
        $list_dir = `ls -la $home_dir`;
        print "<pre>$list_dir</pre>";

	?>
</body>
</html>
