<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
    </head>
    <body>
    <textarea name="detail" cols="50" rows="8"></textarea>
    <textarea name="detail" >Giá trị mặt định</textarea>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
     $detail = $_POST['detail'];
     if(empty($detail)){
        // Xử lý khi người dùng chưa nhập dữ liệu
     }
 }
?>
<!--  -->
<?php

?>
<br>

<br>

</body>
</html>