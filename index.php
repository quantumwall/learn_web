<!doctype html>
<html>
<head>
	<title>Simple page</title>
</head>
<body>
    <!--<script src="/sources/main.js"></script>-->
	<?php
        
        print <<<HTML
        <form action="{$_SERVER['PHP_SELF']}" method="post">
            <select name="lunch[]" multiple>
                <option value="pork">Pork</option>
                <option value="beef">Beef</option>
                <option value="fish">Fish</option>
            </select>
            <button>Send</button>
        </form>
HTML;
        
        if (count($_POST) > 0) {
            print "<p>Submitted values:</p>";
            foreach ($_POST['lunch'] as $meal) {
                print "<li>$meal</li>";
            }
        }
            
    print_r($_POST);
	?>
    

</body>
</html>
