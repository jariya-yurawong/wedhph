<?php

$servername= 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbemp';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn) {
    die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)".mysqli_connect_error());
}else{
    echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
}
mysqli_set_charset($conn,"utf8");

//mysqli_close($conn); // ปิดฐานข้อมูล
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
        <?php
        $sql = '
        SELECT employee.EmployeeID,employee.Title,employee.Name,employee.Sex,employee.Education,department.DepartmentName
        FROM employee 
        INNER JOIN department
        ON employee.DepartmentID = department.DepartmentID;
        ';
        $objQuery = mysqli_query($conn,$sql) or die ("Error Query [". $sql ."]");
    ?>
    <table border="1">
        <tr>
            <th width="50">
                <div align="center">NO</div>
            </th>
            <th width="100">
                <div align="center">EmployeeID</div>
            </th>
            <th width="100">
                <div align="center">Title</div>
            </th>
            <th width="100">
                <div align="center">Name</div>
            </th>
            <th width="100">
                <div align="center">Sex</div>
            </th>
            <th width="100">
                <div align="center">Education</div>
            </th>
            <th width="100">
                <div align="center">DepartmentName</div>
            </th>
        </tr>
            <?php
            $i = 1 ;
            while ($objResult = mysqli_fetch_array($objQuery)){
            ?>
                <tr>
                    <td>
                    <div align="center"><?php echo $i; ?></div>
                </td>
                <td><?php echo $objResult["EmployeeID"]; ?></td>
                <td><?php echo $objResult["Title"]; ?></td>
                <td><?php echo $objResult["Name"]; ?></td>
                <td><?php echo $objResult["Sex"]; ?></td>
                <td><?php echo $objResult["Education"]; ?></td>
                <td><?php echo $objResult["DepartmentName"]; ?></td>
            </tr>
        <?php
            $i++;
            }
        ?>
        </table>



        <?php
        mysqli_close($conn); // ปิดฐานข้อมูล
        ?>
    </body>
</html>