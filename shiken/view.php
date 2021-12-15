<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>PHP定期試験</title>
    <style>
        body {
            background-color: #dddddd;
            margin-right: auto;
            margin-left: auto;
            width: 700px;
        }

        div {
            width: 700px;
            min-height: 300px;
            margin-top: 1.5%;
            margin-bottom: 1.5%;
            background-color: #ffffff;
            font-size: 1.6em;
            line-height: 1.5em;
            border-radius: 15px;
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div>
        <h4>categoriesテーブルのcategoryname</h4>
        <?php
        // db connect
        $db = new PDO('mysql:host=localhost;dbname=training;charset=utf8', 'root', '');
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        //submit 
        if (isset($_POST["send"])) {

            //   select process
            if (isset($_POST['categoryid'])) {

                $select = $_POST['categoryid'];
            }

            //display
            $sql = ("SELECT * from categories where categoryID ='$select' ");


            $stmt = $db->query($sql);
            while ($data = $stmt->fetch(PDO::FETCH_NUM)) {
                echo $data[1];
            }
        }


        ?>
    </div>
</body>

</html>