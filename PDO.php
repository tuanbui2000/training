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
try {
    $db= new PDO('mysql:host=localhost;dbname=training;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $db->prepare('select * from prefecturals where id <= :suu ');
$stmt->bindValue(':suu',10,PDO::PARAM_INT);
$stmt->execute();
print " <table border=1>";
while ($result =$stmt->fetch()) {
    
    print " <tr><td>";
    print  ($result['id']);
    print " </td><td>";
    print  ($result['name']);
    print " </td><td>";
    
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

<br>

</body>
</html>