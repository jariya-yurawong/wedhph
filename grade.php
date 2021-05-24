
<!DOCTYPE html>
<html>
    <head>
        <title>เกรด</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" type="text/css"href="mystyle.css">
    </head>
    <body>
        <?php
        $score = 40;

        if( $score <= 50 ){
            echo "คุณได้เกรด F";
        }else if( $score >= 50 && $score < 60 ){
            echo "คุณได้เกรด D";
        }else if( $score >= 60 && $score < 70 ){
            echo "คุณได้เกรด C";
        }else if( $score >= 70 && $score < 80 ){
            echo "คุณได้เกรด B";
        }else if( $score >= 80 && $score < 100 ){
            echo "คุณได้เกรด A";
        }
        ?>
       
    </body>
</html>
<?php
       

      