
<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" type="text/css"href="mystyle.css">
    </head>
    <body>
    <?php
        
        for ($i=1; $i < 101 ; $i++)
        {
        echo $i." ".pow($i,2)." ".pow($i,3)."<br>";
        }
         ?>
    </body>
</html>
