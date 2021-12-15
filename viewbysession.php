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
  session_start();
  if (isset($_POST['name1'])) print $_SESSION['name1'];
  // radio 
  if(isset($_POST['eigo'])) print $_SESSION['eigo'];
   //checkbox
  if (isset($_POST['sub'])) print $_SESSION['sub'];
  //Xử lý các phần tử được chọn
 //textaria
 if (isset($_POST['kanso'])) print $_SESSION['kanso'];
  //select
  if (isset($_POST['size']))  print $_SESSION['size'];
     
 
?>
<br>

<br>

</body>
</html>