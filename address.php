<!-- html  -->
<!doctype html>
<html>

<head>
    <title>construct-destruct</title>
    <meta charset="utf-8">
</head>

<body>
    
<form action="" method="POST" 
    <?php
    try {
        //construct-destruct
        require_once "construct-destruct.php";

        //thêm cái xử lí exception ở trang exception.php nữa vào
        include_once 'exception.php';

        //db connect
        $db = new PDO('mysql:host=localhost;dbname=training;charset=utf8', 'root', '');
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //delete process
        if (isset($_POST["send"])) {
            if (isset($_POST["id"])) {
                $id = $_POST["id"];
                $sql = "DELETE FROM user1 WHERE id=$id";
                // use exec() because no results are returned
                $db->exec($sql);
            }
        }
        //dùng header để chuyển trang về address.php cũng được example: header('Location: address.php');
        //new process
        if (isset($_POST["new"])) {
            if (isset($_POST["name"])) {
                if (isset($_POST["address"])) {
                    $name = $_POST["name"];
                    $address = $_POST["address"];
                    $sql = "INSERT INTO user1 (name,address)  VALUES ('$name', '$address')";
                    $db->query($sql);
                }
            }
        }


        //update process
        if (isset($_POST["update"])) {
            if (isset($_POST["name"])) {
                if (isset($_POST["address"])) {
                    if (isset($_POST['id'])) {

                        $name = $_POST["name"];
                        $address = $_POST["address"];
                        $id = $_POST["id"];
                        $sql = "UPDATE  user1 set name='$name',address='$address' where id='$id'";
                        $db->query($sql);
                    }
                }
            }
        }


        //display data
        echo '<table border=1>';
        $stmt = $db->query('select * from user1');
        while ($data = $stmt->fetch(PDO::FETCH_NUM)) {
            echo '<tr>';
            echo "<td><input type='radio' value='$data[0]' name='id' ></td>";
            echo '<td>';
            //cái ?id=$data[0] là để gán giá trị cho id bên trang address_update.php
            echo "<a name='getid' value='$data[1]' href='address_update.php?id=$data[0]'>$data[1]</a>";
            echo '</td><td>';
            echo "$data[2]";
            echo "<br>";

            echo '</td></tr>';
        }
        echo '</table>';
    } catch (Exception $e) {
        throw new OriginalException($e);
    }
    $db = null;
    ?> <input type="submit" name='send' value="delete"><br>
    <a href="address_new.php">new</a>
    </form>

</body>

</html>