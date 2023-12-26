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
    @switch($ch)
    @case("春天")
        <h1>櫻花</h1>
        @break
    @case("夏天")
        <h1>杜鵑花</h1>
        @break
    @case("秋天")
        <h1>楓葉</h1>
        @break
    @case("冬天")
        <h1>梅花</h1>
        @break
    @default
        <h1>沒有選項</h1>
    @endswitch
    </body>
</html>
