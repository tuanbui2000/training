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

        form {
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
    <form action="view.php" method="POST">
        <h4>categoriesテーブルのcategoryid</h4>
        <select name="categoryid">
            <?php

// ここにコーディングして下さい

            // database connect
            $db = new PDO('mysql:host=localhost;dbname=training;charset=utf8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $db->prepare('select * from categories');

            $stmt->execute();


            echo "<option hidden value='0'>選択してください</option>";
            while ($data = $stmt->fetch(PDO::FETCH_NUM)) {
                echo "<option value='$data[0]'>$data[0]</option>";


            }

            ?>
        </select>
        <input type="submit" name="send" value="選択">
    </form>
    <br>
    説明：<br>
    「training」DBの「categories」テーブルから「categoryid」を検索してプルダウンに表示する<br>
    プルダウンを選択して「選択」ボタンを押す<br>
    view.phpに遷移して選択した「categoryid」に該当する「categoryname」を表示する
</body>

</html>