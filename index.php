<!doctype html>
<html>
<head>
	<title>Simple page</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
            width: 50%;
        }
        table, th, td {
            border: 1px solid gray;
            padding: 5px;
        }
    </style>
</head>
<body>
    <!--<script src="/sources/main.js"></script>-->
	<?php
        require 'sources/function.php';
	?>
    <div><?php image("pelican.jpg", "", "", "400px"); ?></div>
</body>
</html>
