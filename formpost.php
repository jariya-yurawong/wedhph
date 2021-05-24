<?php

$firstname = $_POST['firstname'];
$password = $_POST['password'];
$comment = $_POST['comment'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <link rel ="stylesheet" type="text/css"href="mystyle.css">
    </head>
    <body>
    <h2>ส่งข้อมูลผ่าน Form (Post)</h2>
    <form action="formpost.php" method="POST">
        First Name : <input type ="text" name="firstname"><br><br>
        Password : <input type ="password" name="password"><br><br>
        Comment : <textarea name ="comment " ></textarea><br><br>
        <input type ="submit" value="SEND"><br><br>
        </form>
        <?php
        if(isset($firstname)){
        echo "<h3>ข้อมูลที่รับเข้ามา</h3>";
            echo $firstname;
            echo '<br>';
            echo $password;
            echo '<br>';
            echo $comment;
        }//End isset
        else{
            echo "ไม่มีข้อมูล";
        }
        ?>
    </body>
</html>
