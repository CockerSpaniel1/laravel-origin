<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $file_arr = explode(".", $_FILES['file1']['name']);
        
        $file_type=$file_arr[count($file_arr) - 1];
        $destination = "./upload/".$file_arr[0].".".$file_type;
        echo $_FILES['file1']['tmp_name']."<br>";
        echo $_FILES['file1']['name']."<br>";
        echo $destination;
        move_uploaded_file($_FILES['file1']['tmp_name'], $destination);
        ?>
    </body>
</html>
