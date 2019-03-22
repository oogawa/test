<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=lesson1;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>4eachblog掲示板</title>
 <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
 <h1>4each掲示板</h1>
    
 <div class="confirm">
<p>投稿有難うございました。<br></p>   
 </div>
</body>
</html>