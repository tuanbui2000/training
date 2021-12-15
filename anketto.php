<!DOCTYPE html>
<html>

<head>
    <title>javascript</title>
    <meta charset="utf-8">
   
</head>

<body>

    <form  action="./view.php" method="POST">
        <h1>アンケート</h1>
        <b>名前</b>
        <input type="text" name="name1" size="10" id ="id2">
        <hr>
        <p class="class">
            <b>質問（1）</b><br>

            英語を話せるようになりたいとおもいますか？<br>
            <label><input type="radio" name="eigo" value="yes">はい</label>
            <label><input type="radio" name="eigo" value="avaible">どちらもいえない</label>
            <label><input type="radio" name="eigo" value="no">いいえ</label>
        </p>
        <hr>
        <p>
            <b>質問（2）</b><br>
            英語以外で興味のある語学があれば選択してください（複数回答可）<br>

            <label><input type="checkbox" name="sub[]" value="ドイツ語">ドイツ語</label>
            <label> <input type="checkbox" name="sub[]" value="フランス語">フランス語</label>
            <label><input type="checkbox" name="sub[]" value="イタリア語">イタリア語</label>
            <label><input type="checkbox" name="sub[]" value="スペイン語">スペイン語</label>
            <input type="checkbox" name="sub[]" value="中国語">中国語
        </p>
        <hr>
        <p class="class">
            <b>質問（3）</b><br>
            英語の授業に対する意見と感想<br>
            <textarea name="kanso" id="" cols="30" rows="10"></textarea>
        </p>
        <hr>
        <p class="class">
            <b>質問（4）</b><br>
            あなたの年齢を選択してください　
            <br>
            <select name="size">
                <option>以下から選択</opsion>
                <option value="10世代">10～19際</option>
                <option value="20世代">20～39歳</option>
                <option value="30世代">30～39歳</option>
                <option value="40世代">40～49歳</option>
                <option value="50世代">50～59歳</option>
                <option value="60世代">60～69歳</option>
                <option value="70歳以上">70歳以上</option>
        </select></p>
        <hr>
        <input type="submit" value="送信" >
        <input type="reset" value="クリア">


    </form>
    

   



    <?php 
    
    session_start();

    $eigo="";
$name1="";
$kanso="";
$radio="";
$value="";
$size="";

if (isset($_POST['session4'])){
    if (isset($_POST['name1'])) {     $name1=$_POST['name1'];}
    // radio 
    if(isset($_POST['eigo'])){    $radio = $_POST['eigo'];} 
    //checkbox
    if (isset($_POST['sub'])) {   $_POST['sub'] = $value ;}
    //Xử lý các phần tử được chọn
    //textaria
    if (isset($_POST['kanso'])) { $kanso =nl2br($_POST['kanso']);}
    //select
    if (isset($_POST['size'])) {   $size =$_POST['size'];   }
    
    
    
    $_SESSION['name1']=$name1;
    $_SESSION['eigo']=$eigo;
    $_SESSION['sub']=$value;
    $_SESSION['kanso']=$kanso;
    $_SESSION['size']=$size;
    
    print $name1 ;print '<br>';
    print $eigo ;print '<br>';
    print $value ;print '<br>';
    print $kanso ;print '<br>';
    print $size ;print '<br>';
    header("location:viewbysession.php");
    // header("location:session.php");
    ?>
 <form action="" method="post">
     <input type="submit" value="get">
    </form>   
</body>

</html>



