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
    @if($ch==1)
        <h1>春天</h1>
    @elseif($ch==2)
        <h1>夏天</h1>
    @elseif($ch==3)
        <h1>秋天</h1>
    @elseif($ch==4)
        <h1>冬天</h1>
    @else
        <h1>沒有選項</h1>
    @endif
    </body>
</html>
