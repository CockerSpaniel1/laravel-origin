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
        $data ="java,delphi,html,javascript,pascal,css";
        echo "java,delphi,html,javascript,pascal,css資料以逗號分割:<br>";
        $v=explode(",", $data);
                
        foreach($v as $h){
            echo $h."<br>";
        }
        
        ?>
    </body>
</html>
