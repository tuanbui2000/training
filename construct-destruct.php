<?php
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name;
//   }
//   function __destruct() {
//     echo "The fruit is {$this->name}.";
//   }
// }

// $apple = new Fruit("Apple");
?>



<?php
class connect{
public $db;

    //constructor
    function __construct(){
        try {
            $this->db=new PDO('mysql:host=localhost;dbname=training;charset=utf8','root','');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
          catch(Excecption $e){
              echo 'error: '.$e->getMesseage;
              exit();
          }
    }
    //destructor
function __destruct(){
    

    try {
        $this->db=new PDO('mysql:host=localhost;dbname=training;charset=utf8','root','');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(Excecption $e){
          echo 'error: '.$e->getMesseage;
          exit();
      }
}


}?>



<!-- html  -->
<!-- <!doctype html>
<html>

<head>
    <title>練習</title>
    <meta charset="utf-8">
</head>
<body>
    
    <?php
// require_once "construct-destruct.php";
// $dbconnect = new connect();
// $stmt = $dbconnect->db-> query('select * from prececturals');
?>
</body>
</html> -->