
<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" type="text/css"href="mystyle.css">
    
    
    
    
    
    
    
    
    
    
    
    </style>
    </head>
    <body>
        <?php
        $start_multiplication =2;
        $stop_multiplication =6;
        for($start_multiplication;$start_multiplication <=$stop_multiplication;$stop_multiplication){
            //echo "<div class= col-50>";
            for($i=1;$i<=12;$i++){
                $multiplication =$start_multiplication*$i;
                echo "$start_multiplication * $i = $multiplication <br>";
            }
            //echo "</div>";
            }
        $start_multiplication =2;
        $stop_multiplication =6;
        for($start_multiplication;$start_multiplication <=$stop_multiplication;$stop_multiplication){
            echo"<div class= col-60>";
            for($i=1;$i<=12;$i++){
                $multiplication =$start_multiplication*$i;
                echo "$start_multiplication * $i = $multiplication <br>";
            }
            echo "</div>";
          }
        ?>

    </body>
</html>
