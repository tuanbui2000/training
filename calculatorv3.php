<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
 

<!--  -->
<?php
$ans=0;
$num1=0;
$num2=0;
$num3=0;
$iFlg=0;


if (isset($_POST["num1"])) $num1=$_POST["num1"];
if (isset($_POST["num2"])) $num2=$_POST["num2"];
if (isset($_POST["num3"])) $num3=$_POST["num3"];
if (isset($_POST["ans"])) $ans=$_POST["$ans"];
 if (isset($_POST["no"])) $iFlg =$_POST["no"];


    if (isset($_POST['number'])){
        $num = $_POST['number'];
        if ($iFlg==1) {
            $num1=(int)($num1.$num);
        }
        elseif ($iFlg==2) {
            $num2=(int)($num2.$num);
        }
        elseif ($iFlg==3) {
            $num3=(int)($num3.$num);
        }
    }


    if (isset($_POST["result"]) and $iFlg <>4){
        $iFlg=4;
        $ans=$num1+$num2+$num3;
    }
?>
<input type="radio" name="no" value="1" <?php if ($iFlg ==1 or $iFlg==0 or $iFlg==4) {print "checked='checkded";?>>1:
    
<input type="text" name="num1" readonly value="<?php echo $num1 ?>"><br>
<input type="text" name="num2" readonly value="<?php echo $num2 ?>"><br>
<input type="text" name="num3" readonly value="<?php echo $num3 ?>"><br>

<br>

    # code...
}
<br>

</body>
</html>