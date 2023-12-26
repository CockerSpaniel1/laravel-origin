<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         
        <style>
            #dv1{
                width:800px;
                height:200px;
                background-color:#FFD0FF;
            }
            #dv2{
                float:left;
                width:200px;
                height:600px;
                background-color:#ACD6EF;
            }
            #dv3{
                float:left;
                width:600px;
                height:600px;
                background-color:#DFFFDF;
            }
        </style>
        
    </head>
    <body bgcolor="#000000">
    
        <div id="dv1">@include("include.header1")</div>
        <div id="container">
            <div id="dv2">@include("include.footer1")</div>
            <div id="dv3">@include("include.container1")</div>
        </div>
    

    </body>
</html>
