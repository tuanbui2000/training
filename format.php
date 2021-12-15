<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
  <!-- format ngày tháng năm -->
 <?php
 $str = date("Y/m/d");
 echo $str;
 ?>
<br>

<!-- check day  -->
<?php
$year = 2009;
$month1=2;
$day =21;
var_dump(checkdate($month1, $day, $year));
?>
<br>



<!-- format lại tí chứ nhiêu đâu mà lo  -->
<?php
$str = date("Y年m月d日");
 echo $str;
?>
<br>



<!-- năm nay có nhuận khôgn đó mà -->
<?php
$thisyear= date("Y");
if ($thisyear%4==0) {
    echo "this year is a leap year";
}
else {
    echo "this year is not a leap year";
}

?>
<br>



<!-- LỚP TRONG PHP  -->
<?php
// định nghĩa, tạo
class calculate {
    // định nghĩa propertie
    public $result;
    // tạo method
    public function addition($number){
        $this->result = $number *100;
        /* this ở đây là tên thuộc tính */
    } 
}

//tạo instance
$jsansu= new calculate;
$jsansu->addition(5);
echo $jsansu->result;
?>
<br>



<!--  -->
<?php
class message{
    function hello() {
        return "good morning";
    }
}
$message1= message::hello();
echo " value of message1 is {".$message1."} "; 
?>
<br>



<!-- 5 tháng sau là tháng mấy  -->
<?php

$month= date("m");
class monthago{
    function fivemonthago($month){
        if ($month<8) {
         $month+=5;    
        } else {
         
            $month-=7;    
        }
        return $month;
        
    }
}
$fivemonthago1=monthago::fivemonthago(10);
echo "go kageetsu go ha ".$fivemonthago1;

?>
<br>



<!-- -->
<?php
class NextMonth {
    static public function GetNext5Month(){
        //timestamp =strtotime(date('y-m-01').'+5 month');
        $timestamp = strtotime("5 month");
        return date ('n',$timestamp);
    }
}
//create instance
$nm = new NextMonth;
echo $nm->GetNext5Month();
print "<br>";


// by scope
echo NextMonth::GetNext5Month();
echo "<br>";
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