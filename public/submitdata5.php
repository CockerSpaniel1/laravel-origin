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
        <form id="f1" name="f1" method="post" action="submitdata5.php">
        <?php
        $img1="coffee06.jpg";
        if(isset($_POST['st1'])){
            $ch=$_POST['sel'];
            
            switch($ch){
            case '春天':    
                $img1='coffee01.jpg';
                break;
            case '夏天':    
                $img1='coffee02.jpg';
                break;
            case '秋天':    
                $img1='coffee03.jpg';
                break;
            case '冬天':    
                $img1='coffee04.jpg';
                break;
            }
        }
        ?>
            <table border='2' width='350px'>
            <tr>
                <td colspan="3" bgcolor="#CA8EFF">PHP四季花類</td>
            </tr>
            <tr>
                <td>季節:</td>
                <td>
                <select id="sel" name="sel" style="width:185px">
                        <option value="春天">春天</option>
                        <option value="夏天">夏天</option>
                        <option value="秋天">秋天</option>
                        <option value="冬天">冬天</option>
                </select>
                </td>
                <td>
                    <input type="submit" id="st1" name="st1" value="執行" /> 
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <img src="image/<?php echo $img1;?>" width='350' height='250'> 
                </td>
            </tr>
        </table>
    </form>    

    </body>
</html>
