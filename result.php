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

// $input_data = (int)$_POST['text1'];
$input_data = (int)$_GET['text1'];
if ($input_data ==40){
    print ("correct. congratulation!");
    
}else{
    print('oops!, try again !');
    print('<p>');
    print('kadai: 4x10');
    print('</p>');
    // print(' <form method="POST" action="./result.php">');
    print(' <form method="GET" action="./result.php">');
    print('<input type = "text" name= "text1" >');
    print('<input type = "submit" name= "btn1" value="submit" >');
    print('</form>');
}
?> 

<br>

</body>
</html>