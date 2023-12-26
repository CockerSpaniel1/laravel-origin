<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript">
            function fun1(){
                document.getElementById("if1").src = "./phpbasics14.php";
            }
            function fun2(){
                document.getElementById("if1").src = "./phpbasics17.php";
            }
            function fun3(){
                document.getElementById("if1").src = "./phpbasics15.php";
            }
        </script>
    </head>
    <body>
        <table border="2" width="200" style="height:400px";>
            <tr>
                <td>
                    <a href="javascript:void;" id="a1" onclick="fun1()" >內容選單一</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:void;" id="a2" onclick="fun2()" >內容選單二</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:void;" id="a3" onclick="fun3()" >內容選單三</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:void;" id="a4"  >內容選單四</a>
                </td>
            </tr
            <tr>
                <td>
                    <a href="javascript:void;" id="a5"  >內容選單五</a>
                </td>
            </tr>
        </table>
    </body>
</html>
