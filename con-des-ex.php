<!-- html  -->
<!doctype html>
<html>

<head>
    <title>construct-destruct</title>
    <meta charset="utf-8">
</head>
<body>
    <!-- đại khái thì đoạn này là gọi từ cái function từ cái construct-destruct 
kiểu như một cái thực thi khi tạo một cái thực thi khi end scriptz -->
    <?php
    try {
        
        require_once "construct-destruct.php";
        
        //thêm cái xử lí exception ở trang exception.php nữa vào
        include_once 'exception.php';
        $dbconnect = new connect();
        $stmt = $dbconnect->db-> query('select * from prefecturals');
        
        while ($data =$stmt->fetch(PDO::FETCH_NUM)) {
            echo "$data[0]";
            echo":";
            echo "$data[1]";
            echo "<br>";
        }
    } catch (Exception $e) {
        throw new OriginalException($e) ;
    }
?>

</body>
</html>