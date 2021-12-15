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
        print '<table border=1 cellspacing=1 cellpading=1';
for ($i=1;$i<=9;$i++){
    print '<tr>';
      for ($j=1;$j<=9;$j++){
          if($i*$j==18){
            print '<th><font color=red>'.$i.'x'.$j.'='.$i*$j.'</th>';
          }elseif ($i*$j%2==1) {
              // background color  
            print '<th bgcolor="#CCCCCC">  '.$i.'x'.$j.'='.$i*$j.'</th>';
          }else{
        print '<th>'.$i.'x'.$j.'='.$i*$j.'</th>';
    }}
    print '</tr>';
   
} print '</table>' ?>
   
</body>
</html>