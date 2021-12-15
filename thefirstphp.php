<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
        chào <br>
               <?php echo 'học với chả hành, mợt mõi'; ?>

               <?php print "chữ";
               print " <br>";// in ra html's tag
               print "123";
                print 444;  ?>
    <?php

$variable = "biến trong php";
echo $variable;
?>


<?php define("tênhằng", "giá trị của hằng");
echo tênhằng;
echo "<br>";
print tênhằng; ?>

        <?php
        
        $a= "kiểu ";
        $a.= "kết hợp"; //nối chuỗi bằng dấu "." giống + ở java
        echo $a //in ra màn hình kết quả "kiểu kết hợp"

        ?>
        <?php
        // if syntax
        $aa=10;
        if ($aa===1){
            print '$a là 1';
        } elseif ($aa===2){
            print 'else ìf syntax';
        }
        elseif($aa===3){
                print 'else ìf syntax';
        }else{
            print 'ahihi';
        }

        ?>


        <?php 
//tách php syntax 
$abc =1;
?>
<?php  if($abc==2){?>
    <div>nếu</div>
    <?php }?> 



   <?php $a1=10;
        if ($a1===1){?>
        <span>$a1=1</span>
    <?php }  elseif ($a1===2){ ?>
            <span>$a1=2</span>
    <?php } elseif($a1===3){?>    
            <span>$a1=3</span>
    <?php}else{?>
            <span>$a1 nọ bằng cái mô cả</span>
    <?php  }?>




    <?php
    print "<br>";
//in ra màn hình dòng chữ
    echo '今日は晴れるといいな'; 
    print "<br>";
//gán giá trị cho biến rồi in ra màn hình
    $abc='今日は晴れるといいな';
    echo $abc;
    print "<br>";
//gán giá trị cho hằng rồi in ra màn hình
    define("XYZ",'今日は晴れるといいな');
    echo XYZ;
    print "<br>";
//toán tử 
    $a=1;
    $b=2;
    echo $a+$b;
    print "<br>";
//kết hoợp   
    echo"こん "."にちは";

?>

<?php // switch syntax
  switch($a){
    case 10:
        print 'a=10';
        break;
    case 100:
        print 'a=100';
        break;
    case 1000:
    case 200:
        print 'a=1000 hoặc 200';
        break;
        default:
        print 'a bằng mấy cũng chịu';
}
print "<br>";
?>









<?php

//
$a=1;
if($a===1){
    print 'good morning';
}else{
    print 'good bye';
    
}
print "<br>";


if($a===1){
    print 'good morning';
}elseif(a===2){
    print 'good everning';
}
print "<br>";

?><?php $a=3;
switch ($a) {
    case 1:
        print 'good morning';
        break;
    
    case 2:
        print 'hello';
        break;
    
    case 3:
        print 'good everning ';
        break;
    
    default:
        print 'good bye';
        break;
} print "<br>";
?><?php
$a=3;
switch ($a) {
    case $a!=3:
        print 'good morning';
        break;
    
    case 1:
        print '今日はいい天気だね';
        break;
    
    case 2:
        print '今日は寒いね ';
        break;
    case 3:
    print '今日は温度が高いね';
    break;
    
    default:
        print 'good bye';
        break;
} print "<br>";




?>

<?php
$ar[]=700;
$ar[]=800;
$ar[]=900;
var_dump($ar);

$f=array(100, 200, 5=>500, "one"=>1, "php"=>"funny"); print '<br>';
var_dump($f);

$l=array(500,600,700);
$m=array(5=>300,10=>900,15=>230);
print "<br>";
$n=array("tiger"=>"おはよう","rabbit"=>"こんにちは","cow"=>"こんばんは");
var_dump($n);

// thêm vào array
array_push($n,300);

// delete phần tử có tên là cow
unset($n['cow'])

?>





<?php 
//for  loop
for ($i=0;$i<=3;$i++){
    print '$i no value'.$i.'desu<br>';
}?>


<?php 
//while loop
$a=0;
 while ($a < 10) {
     print "a=".$a.'<br>';
     $a++;

 }?>
<?php 
$a=1;
while (true) {
    if ($a<10){
    
        break;
    }
    $a++;
}
?>

<?php
//foreach syntax
$a =array(100=>1000, 150=>1500,200=>2000);
foreach ($a as $value){
    echo $value."<br>";
}
?>
<?php
$shinki=array(
    "spr"=>"春",
    "sum"=>"夏",
    "aut"=>"秋",
    "win"=>"冬"
);
 foreach ($shinki as $key => $name) {
     print $key."is".$name."<br>";
 }?>
 <!-- text -->

 <?php 
 $a="hello, thís is a text in php";
 ?>
<input type="text" value="<?php echo $a; ?>">
<br>
<!-- radio  -->
<?php 
 $aa =1;
 ?>
 <input type="radio" name="sex" id="" <?php if ($aa==  1) echo "checked";?>> male
 <input type="radio" name="sex" id="" <?php if ($aa==  2) echo "checked";?>> female
 <br>



 <!-- checkbox -->
<?php 
 $aaa=1;
 ?>
 <input type="checkbox" <?php if ($aaa=1) echo "checked";?>>male <br>
 <input type="checkbox" value= "check_on" name ="check_flag2" <?php if ($aaa=2) echo "checked";?>>female <br>

 <!-- selcect  -->
<?php 
 $b=2;
 ?>
<select>
<option <?php if ($b=1) echo "selected"; ?> >Danh sách 01</option>
<option <?php if ($b=2) echo "selected"; ?> >Danh sách 02</option>
<option <?php if ($b=3) echo "selected"; ?> >Danh sách 03</option>
<option <?php if ($b=4) echo "selected"; ?> >Danh sách 03</option>
</select>

<br>

<!-- function  -->
<?php 
 function addition($number){
     return $number + 50;
 }
 echo addition(50);
 ?>
 <br>


<!-- function vaf tham chieu -->
<?php 
 function job(&$jobs){
     $jobs="salary man";
    }
    $str="students";
    echo "kansu jikkou mae no \$Str: ".$str."<br>";
    
    // function
    job($str);
    echo "kansu jikkou  ato no \$Str: ".$str."<br>";
        ?>



<br>
<!--default  -->
<?php 
 function job2($profession ="daigakusei"){
     return "profession is: ".$profession;
 }
 echo "<br>"; 
 echo job2();
  echo "<br>";
echo job2("salary ");
 ?>
 <br>




<!-- strlen (string) -->
<?php 
 echo strlen("abc 123");
 echo "<br>";
 echo strlen ("あ");
 echo "<br>";
 echo strlen ("ああああああああ！");
 ?>



<!-- explode (string_separator,string)  phân tách -->

<?php 
$str = explode( "|","abc|def");

 ?>
<br>



<!-- substr(string, start, [length]) cắt  -->
<?php 
 $str1= substr("PHP product",4/* lấy từ số thứ 4 */);
 echo $str1;
 ?>
<br>
<?php 
 $str2= substr("abcdefghijklm",4,5/* lấy 5 số từ số thứ 4 ,*/);
 echo $str2;
 ?>
<br>


<!-- format
printf(format,[args];)
sprint(format,[args];) -->
<?php 
 $y=2000;
 $m=2;
 $d=21;
 printf("%04d-%02d-%02d", $y,$m,$d);
 echo "<br>";
 $sp=sprintf("%04d-%02d-%02d", $y,$m,$d);
 echo $sp;
 ?>
<br> 


<!-- string trim(string str,[string charlist]) -->
<?php 
 $string1=trim (" abc ");// xóa space ở đầu và cuối 
 $string2=rtrim (" abc ");
 $string3=ltrim(" abc ");
 $string4= trim("-abc-", "-");
 ?>
<br>


<!-- replace 
str-replace(find, replace, page)  -->
<?php 
 echo str_replace ("tuấn ","bờm", "bùi đình tuấn ");
 ?>
<br>


<!--match
preg_match("/từ cần tìm/ ", đoạn có từ cần tìm);
-->
<?php 
 $string= "bui dinh tuan";
 if (preg_match("/tuan/", $string)) {
     echo "matched";
    } else {
        echo "no matched";
 }
 
 ?>
<br>
<!--  tìm từ bắt đầu và kết thúc của đoạn văn  -->

<!-- special symbol "^"
string bắt đầu từ ^"đây"-->
<?php 
$string="bui dinh tuan";
if (preg_match("/^tuan/",$string)) {
    echo " string bắt đầu từ \tuan";
}
 ?>
 <br>


 <!-- special symbol "^"
string kết thúc tại $"đây"-->
<?php 
$string="bui dinh tuan";
if (preg_match("/tuan$/",$string)) {
    echo " string kết thúc tại \tuan";
}
 ?>
 <br>


<!-- tìm kiếm trong đoạn văn có từ nào bất kì khôgn   -->
<?php 
$string="bui dinh tuan";
if (preg_match("/[abc]/",$string)) {
    echo " có chứa chữ cái bất kì nòa trong a,b,c không";
}
 ?>
 <br>



<!-- giống trên nhưng phạm vi rộng hơn thôi   -->
<?php 
$string="bui dinh tuan";
if (preg_match("/[a-z]/",$string)) {
    echo " có chứa chữ cái bất kì nòa từ a đến á   không";
}
$string="bui dinh tuan 2122";
if (preg_match("/[0-9]/",$string)) {
    echo " có chứa số bất kì nòa từ 0 đến 9   không";
}
?>
 <br>
 
 
 <!-- tìm và thay thế  -->
 <?php 

$string="bui dinh tuan 2s122";
echo preg_replace("/tuan/","/bom/",$string); 
 ?>
 <br>


<!-- chia string   -->
<?php 
$str ="/usr/local/apache/htdocs/php";
$str_res=preg_split("/\//",$str);
foreach ($str_res as $val ) {
    print $val."<br>";
}
 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>


<!--  -->
<?php 

 
 ?>
 <br>
    </body>
</html>