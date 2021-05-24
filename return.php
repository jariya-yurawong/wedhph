
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
        function area ($base,$high) {
            $result =1/2*$base*$high;
            echo $result;
            return $result;
        }

        $a = 2; $b = 3;
        $triangle1 = area($a,$b);
        echo "Area 1 = $triangle1 <br>";

        $x = 10; $y = 5 ;
        $triangle2 =area($x,$y);
        echo "Area 12 = $triangle2 <br>";

        ?>
    </body>
</html>
