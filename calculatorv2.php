<!DOCTYPE html>
<html>
    <head>
        <title>
            PHP
        </title>
        <meta charset="ulf-8">
        <style>
            .container {
   width: auto;
 
}
#post {
 
   float: left;
}


      </style>
    </head>
    <body>
        <?php 





       $text1=$text2=$text3= $result=0;
       

      
    
    
 
     

    
/* lấy giá trị từ radio rồi chuyển từ abc */
if(isset($_POST['ra'])){
   $radio = $_POST['ra'];
       

if ($radio==11) {
   $text2=$_POST['text2'];
   $text3=$_POST['text3'];

   if (isset($_POST['one'])) {
      $text1=$_POST['text1'].=1;    
  }
  if (isset($_POST['two'])) {
     $text1=$_POST['text1'].=2;    
  }
  
  if (isset($_POST['three'])) {
     $text1=$_POST['text1'].=3;    
  }
  if (isset($_POST['four'])) {
     $text1=$_POST['text1'].=4;    
  }
  if (isset($_POST['five'])) {
     $text1=$_POST['text1'].=5;    
  }
  if (isset($_POST['six'])) {
     $text1=$_POST['text1'].=6;    
  }
  if (isset($_POST['seven'])) {
     $text1=$_POST['text1'].=7;    
  }
  if (isset($_POST['eight'])) {
     $text1=$_POST['text1'].=8;    
  }
  if (isset($_POST['nine'])) {
     $text1=$_POST['text1'].=9;    
  }
  if (isset($_POST['zero'])) {
     $text1=$_POST['text1'].=0;    
   }
   $text1=(int)$_POST['text1'];
     if (isset($_POST['C'])) {
        $text1=0;    
     }
} elseif ($radio==22) {
   $text1=$_POST['text1'];
   $text3=$_POST['text3'];

   if (isset($_POST['one'])) {
      $text2=$_POST['text2'].=1;    
  }
  if (isset($_POST['two'])) {
     $text2=$_POST['text2'].=2;    
  }
  
  if (isset($_POST['three'])) {
     $text2=$_POST['text2'].=3;    
  }
  if (isset($_POST['four'])) {
     $text2=$_POST['text2'].=4;    
  }
  if (isset($_POST['five'])) {
     $text2=$_POST['text2'].=5;    
  }
  if (isset($_POST['six'])) {
     $text2=$_POST['text2'].=6;    
  }
  if (isset($_POST['seven'])) {
     $text2=$_POST['text2'].=7;    
  }
  if (isset($_POST['eight'])) {
     $text2=$_POST['text2'].=8;    
  }
  if (isset($_POST['nine'])) {
     $text2=$_POST['text2'].=9;    
  }
  if (isset($_POST['zero'])) {
     $text2=$_POST['text2'].=0;    
  }   
  
  $text2=(int)$_POST['text2'];
  if (isset($_POST['C'])) {
   $text2=0;    
}



} elseif ($radio==33) {
   $text2=$_POST['text2'];
   $text1=$_POST['text1'];
   if (isset($_POST['one'])) {
      $text3=$_POST['text3'].=1;    
  }
  if (isset($_POST['two'])) {
     $text3=$_POST['text3'].=2;    
  }
  
  if (isset($_POST['three'])) {
     $text3=$_POST['text3'].=3;    
  }
  if (isset($_POST['four'])) {
     $text3=$_POST['text3'].=4;    
  }
  if (isset($_POST['five'])) {
     $text3=$_POST['text3'].=5;    
  }
  if (isset($_POST['six'])) {
     $text3=$_POST['text3'].=6;    
  }
  if (isset($_POST['seven'])) {
     $text3=$_POST['text3'].=7;    
  }
  if (isset($_POST['eight'])) {
     $text3=$_POST['text3'].=8;    
  }
  if (isset($_POST['nine'])) {
     $text3=$_POST['text3'].=9;    
  }
  if (isset($_POST['zero'])) {
     $text3=$_POST['text3'].=0;    
  }
  $text3=(int)$_POST['text3'];
  if (isset($_POST['C'])) {
     $text3=0;    
   }
}



}
   if (isset($_POST['AC'])) {
      $text1=$text2=$text3= $result=0;
}

if (isset($_POST['equal'])) {
       $result=$text1+$text2+$text3;    
  }










?>




<form method="POST" action="" >
        <div id="content" class="container">
            <div id="post">
         <input type="submit" value="AC" name ="AC">   
         <input type="submit" value="C"name ="C">   
            <br>
            
            <input type="submit" value="1"name ="one">
            <input type="submit" value="2"name ="two">
           <input type="submit" value="3"name ="three">
            <br>
            <input type="submit"value="4"name ="four">
            <input type="submit" value="5"name ="five">
            <input type="submit" value="6"name ="six">
            <br>
            <input type="submit" value="7"name ="seven">
            <input type="submit"  value="8"name ="eight">
            <input type="submit" value="9"name ="nine">
            <br>
            <input type="submit" value="0"name ="zero">
            <input type="submit" value="="name ="equal">
        
            </div>
            <div id="sidebar">
               
    <input type="radio" name="ra"  value="11"<?php if (isset($radio) && $radio=="11") echo "checked";?>>1:    <input type="text" name="text1" value="<?php echo $text1?>" style="text-align: right"><br>
    <input type="radio" name="ra" Value="22"<?php if (isset($radio) && $radio=="22") echo "checked";?>>2:<input type="text" name="text2"  value= "<?php echo $text2?>"style="text-align: right"><br>
    <input type="radio" name="ra" value="33" <?php if (isset($radio) && $radio=="33") echo "checked";?>>3:<input type="text" name="text3"  value= "<?php echo $text3 ?>"style="text-align: right"><br>
    total:<input type="text" name="result" value="<?php echo $result ?>" style="text-align: right"><br>
</div>
<div class="clear"></div>

</div>
</form>


    <!--  -->
<?php

?>
<br>



</body>
</html>