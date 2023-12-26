<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script language="javascript" src="./js/jsbasic2.js">
    
        </script>
    </head>
    <body>
        <table border="2" width="270px">
            <tr>
                <td colspan="2" >模板網頁運算</td>
            </tr>
            <tr>
                <td>數值一:</td>
                <td align="right">
                    <input type="text" id="t1" name="t1" size="20"/>
                </td>
            </tr>
            <tr>
                <td>數值二:</td>
                <td align="right">
                    <input type="text" id="t2" name="t2" size="20"/>
                </td>
            </tr>
            <tr >
                <td colspan="2">
                    <input type="button" id="bt1" name="bt1" value="計算" onclick="fun1()"/> 
                    
                    <input type="button" id="bt2" name="bt2" value="清除" onclick="fun2()" style="float:right;"/> 
                </td>
            </tr>
            <tr>
                <td>結果</td>
                <td align="right">
                    <input type="text" id="t3" name="t3" size="20" value=""/>
                </td>
            </tr>
        </table>
        
    </body>
</html>
