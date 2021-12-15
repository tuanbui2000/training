<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
 

<form action="" method="POST">
<!--  -->
<?php

try {
    
    
    
    // database connect
    $db= new PDO('mysql:host=localhost;dbname=training;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //radio process
    if(isset($_POST["send"])){
    $c_id=$c_name="";
    if(isset($_POST["c_id"])){
        $c_id=$_POST["c_id"];
        if(isset($_POST["c_name"])) $c_name=$_POST["c_name"][$c_id];
     
        print $c_id.$c_name;
        $db->query('update categories set categoryName="'.$c_name.'" where categoryId ='.$c_id);
    }
    }
$stmt = $db->prepare('select * from categories');

$stmt->execute();

print " <table border=1>";
print " <tr>
<td></td>
<td>categoryID</td>
<td>categoryName</td>
</tr>";
while ($data =$stmt->fetch(PDO::FETCH_NUM)) {

print "<tr>";
print "<td><input type='radio' value='$data[0]' name='c_id' ></td>";
print "<td>$data[0]</td>";
print "<td><input type='text' value='$data[1]' name='c_name[$data[0]]'></td>";
    print "</tr>";
}

print "</table>";
$db=null;





    
} catch (PDOException $e) {
    print ('database not connected '.$e->getMessage());
    
} catch (Exception $e) {
    print ('予期せぬerorr '.$e->getMessage());
    
}








?>
<br>
<input type="submit" name ="send" value="edit">
<br>
</form>


</body>
</html>