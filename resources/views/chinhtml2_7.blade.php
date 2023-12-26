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
        <?php $sum=0; ?>
        @for($i=1;$i<=100;$i++)
            <?php $sum += $i ; ?>
        
        @endfor
        <h1>{{ $sum }}</h1>
      
    </body>
</html>
