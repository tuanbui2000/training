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
$result="";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sym= $num1= $num2="";
if (isset($_POST['num1'])) {
  $num1=$_POST['num1'];
}
if (isset($_POST['num2'])) {
  $num2=$_POST['num2'];
}
if (isset($_POST['symbol'])) {

 $sym =$_POST['symbol'];
}
if ($sym=="+") {
    $result=$num1+$num2;
    }elseif ($sym=="-") {
        $result=$num1-$num2; 
       } 
//  }

?>
 
<form method="POST" action="" >
    <!-- <?php/*  echo($_SERVER["PHP_SELF"]); */?> -->
    <input type="number" name="num1" id="" value="<?php echo $num1 ?>">
    <select name="symbol" id="">
        <option value="+" <?php if ( isset($sym) &&  $sym=="+") echo "selected";?> >+</option>
        <option value="-" <?php if ( isset($sym) && $sym=="-") echo "selected";?> >-</option>
    </select>
    <input type="number" name="num2" id="" value="<?php echo $num2 ?>">
    <input type="submit" name="calcu" value="=">
<input type="text" name="result" id="" value="<?php echo $result ?>">
</form>
<!--  -->

<br>

<br>

</body>
</html>
