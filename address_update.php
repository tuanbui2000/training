<!DOCTYPE html>
<html>

<head>
    <title>
        PHP
    </title>
    <meta charset="ulf-8">
</head>

<body>
    <form action="address.php" method="POST">
        <?php


        $db = new PDO('mysql:host=localhost;dbname=training;charset=utf8', 'root', '');
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




/* trong trường hơpj lấy id thì cũng có thể dùng isset
if isset($_GET ['id'])){
    try 
    $id=$_GET['id'];
< kết nối database và gán gía trị cho biến>


    }   
catch (exceotion $e){
    throw new originalException($e);
    }
}
 */



        //get id
        foreach ($_GET as $key => $val) {




            //display data
            $sql = " SELECT * FROM user1 WHERE id=$val";
            $stmt = $db->query($sql);
            while ($data = $stmt->fetch(PDO::FETCH_NUM)) {

                echo "<input type='hidden' name='id' value ='$data[0]'>";
                echo "name:      <input type='text' name='name' value ='$data[1]' > ";
                echo "address:   <input type='text' name='address' value='$data[2]' >";
            }
        }
        ?>

        <input type="submit" name="update" value="update">
    </form>
</body>

</html>