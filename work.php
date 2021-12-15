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
          
      ?>
      4-1 <br>
      <input type="text" name="" id="" value= <?php  
      echo "hello";?>>
<br>4-2 <br>
      <input type="button" value= "<?php echo"oshitemite";?>">
<br>    4-3 <br>
     <?php $a='mouyoruda';?>
     <p><?php echo $a?></p>
<br>
4-4
<br>
<?php
function tax($zeikin){
return $zeikin*1.1;}
echo tax(130);
?>
<br>
4-5 <br>

<?php 
 function name(&$memo){
     $memo ="yamada hanako";
 }
$note="yamada tarou";
name($note);
echo $note;
 ?>

<!-- 1-1 -->
 <?php 
  $str = "あいう,かきく";
 
  
  print_r(explode(',',$str));
  
  ?>
 
<br>

<!-- 1-2 0rime  chèn thêm 2 số 0 vào phía trước -->
 <?php
echo sprintf("%05d\n",345)
?>
<br>

<!-- 1-3 -->
<?php
 
 $momo="momotarou was born from peach";
  echo str_replace ("momotarou","momoko", $momo);
 ?>
<br>

<!-- 1-4 -->
 <?php
 $string="Momotarou was born from peach";
 if (preg_match("/^[a-zA-Z\s]+$/",$string)) {
 /* +$ lặp lại cũng  được 
    ^bắt đầu bằng abc đều đợc */
    echo " yes, you right";
 }
 else{
     echo "no, you wrong";
 }
 ?>
<br>

<!--  -->
 <?php
 
 ?>
<br>
</body>
</html>