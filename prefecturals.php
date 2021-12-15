<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
        <style>
         <style>
            body{
                background-color: #ebebeb;

            }        
.choose {
    background-color: rgb(241, 229, 229);
  height: 250px;
    margin: 10px 15% 5px 15%;
    padding-top: 50px ;
    text-align: center;
    border-radius:25px;
}
.display{
    background-color: rgb(241, 229, 229);
    margin: 5px 15% 10px 15%;
    padding-top: 25px;
    padding-bottom: 25px;
        text-align: center;
        border-radius:25px;
}
        
        </style>
    </head>
    <body>
 
<div class="choose">
<h1>prefecturals テーブル</h1>
<form action="" method="POST">
<select name="sele"  id =" selec" >
    <option hidden value="0">選択してください</option>
    <option value="1">「都」の付く都道府県</option>
    <option value="2">「道」の付く都道府県</option>
    <option value="3">「府」の付く都道府県</option>
    <option value="4">「県」の付く都道府県</option>
</select>
<input type="submit" name ="send" value="選択">
<br>
</form>
</div>
<!--  -->
<div class="display">
<?php
//get value of select box
if (isset($_POST['sele'])) {   $select =$_POST['sele'];   }

try {  
    // database connect
    $db= new PDO('mysql:host=localhost;dbname=training;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // submit process
    if(isset($_POST["send"])){

    
switch ($select) {
    case 1:
        $sql = "SELECT * FROM prefecturals WHERE name like '%都%'";
        break;
    case 2:
        $sql = "SELECT * FROM prefecturals WHERE name like '%道%'";
        break;
    case 3:
        $sql = "SELECT * FROM prefecturals WHERE name like '%府%'";
        break;
    case 4:
        $sql = "SELECT * FROM prefecturals WHERE name like '%県%'";
        break;    
        default:
    exit;


}

//database select
$stmt = $db->query($sql);


//display data
while ($data =$stmt->fetch(PDO::FETCH_NUM)) {
echo "$data[0]";
echo":";
echo "$data[1]";
echo "<br>";


}
}


$db=null;





    
} catch (PDOException $e) {
    print ('database not connected '.$e->getMessage());
    
} catch (Exception $e) {
    print ('予期せぬerorr '.$e->getMessage());
    
}

?>
</div>



</body>
</html>