<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChinComponent1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function(){
    return "welcome laravel frmawork";
});


Route::get('chinbasic1', function(){
    $v1=100;
    return $v1;
});

Route::get('chinbasic2', function(){
    $a=30;
    $b=50;
    $sum=$a+$b;
    return $sum;
});

Route::get('chinbasic3', function(){
    $h1="<ul><li>程式設計</li>";
    $h1.= "<li>網頁設計</li>";
    $h1.= "<li>美工設計</li>";
    $h1.= "<li>文件設計</li>";
    $h1.= "<li>資料庫設計</li>";
    $h1.= "</ul>";
    return $h1;
});

Route::get('chinbasic4', function(){
    
    $str="";
    for($i=0;$i<=10;$i++){
        $str .= $i."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    return $str;
});

Route::get('chinbasic4_1', function(){
    
    $str="<table border='2' width='250'>";
    $str .= "<tr>";
    for($i=1;$i<=9;$i++){
        if ( ($i%3)==0 ){
            $str .= "<td>".$i."</td>";
            $str .= "</tr><tr>";
        } else{
            $str .= "<td>".$i."</td>";
        }
    }
    $str .= "</tr>";
    $str .= "</table>";
    return $str;
});

Route::get('chinbasic4_2', function(){
    $str="<img src='./image/arabica.png' width='350' height='250' alt='放圖片'/>";
    return $str;
});
    
Route::get('chinbasic4_3', function(){
    
    $str="<iframe src='./submitdata5.php' width='380' height='360'></iframe>";
    $str .= "<iframe src='./phpconsplitdata.php' width='380' height='360'></iframe><br>";
    $str .= "<iframe src='./webfile1.html' width='760' height='80'></iframe>";
    return $str;
});

Route::get('formbasic1', function(){
    $form = "<form id='f1' name='f1' method='post' action='./recv2.php'>";
    $form .= "<input type='text' id='t1' name='t1' size='20' /><br>";
    $form .= "<input type='submit' id='s1' name='s1' value='傳送' /></form>";
    return $form;
});

Route::get("routebasic1", function(){
    return view("chinhtml1");
});

Route::get("routebasic2", function(){
    return view("chinhtml2");
});
    
Route::get("routebasic2_1", function(){
    return view("chinhtml2_1");
});

Route::get("routebasic2_2", function(){
    return view("chinhtml2_2", ["name"=>"迪荔樂芭"],["id"=>"p1003"]);
});
    
Route::get("routebasic2_3", function(){
    return view("chinhtml2_3", ["score"=>89]);
});

Route::get("routebasic2_4", function(){
    return view("chinhtml2_4", ["ch"=>3]);
});


Route::get("routebasic2_5", function(){
    return view("chinhtml2_5", ["ch"=>"秋天"]);
});

Route::get("routebasic2_6", function(){
    $b=array(10,20,30,40,50);
    return view("chinhtml2_6", ["a"=>$b]);
});

Route::get("routebasic2_7", function(){
    return view("chinhtml2_7");
});

Route::get("routebasic2_8", function(){
    return view("chinhtml2_8");
});

Route::get("routebasic2_9", function(){
    return view("chinhtml2_9", ["a"=>20], ["b"=>50]);
});


Route::get("routebasic2_10", function(){
    return view("totalcontainer1");
});


Route::get("routebasic2_11", function(){

    return response("Hello World!", 200)->header("content-type", "text/html");
});

Route::get("routebasic2_12", function(){
    $str = "Laravel 路由器直接輸出資料";
  return response($str, 200)->header("content-type", "text/html");
});

Route::get("paramebasic1/{id}", function($id){
    echo "編號: ".$id;
});

Route::get("paramebasic2/{id}/{name}", function($id, $name){
    echo "編號: ".$id."\t姓名".$name;
});

Route::get("controlpath1", [ChinComponent1::class, "show"]);