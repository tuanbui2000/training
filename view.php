<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
<?php


$size="";
$name1="";
$kanso="";
$radio="";
$size="";
//tên
if (isset($_POST['name1'])) {     $name1=$_POST['name1'];}
 // radio 
 if(isset($_POST['eigo'])){    $radio = $_POST['eigo'];} 
 //checkbox
 if (isset($_POST['sub'])) {     foreach($_POST['sub'] as $value) }
         //Xử lý các phần tử được chọn
//textaria
if (isset($_POST['kanso'])) { $kanso =nl2br($_POST['kanso']);}
       //select
     if (isset($_POST['size'])) {   $size =$_POST['size'];   }
        
     
     
     
     
     
     echo $name1;
     print "<br>";
     echo $size;
     print "<br>";
        echo $kanso;
        print "<br>";
        echo $value."<br/>";
        print $radio;
        print "<br>";
        ?> 
<!-- có thể sắp xếp theo cách cho isset lên một chỗ cho dễ nhìn -->
<!-- và dùng $A=$b=$C='' cho nhanh thay vì làm từng cái. -->
<br>

</body>
</html>