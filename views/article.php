<?php
//include '../models/count.php';
//setcookie("count", "$count", time() + 3600 * 24 - (3600 * getdate()['hours'] + 60 * getdate()['minutes'] + getdate()['seconds']));
//$count = $_COOKIE['count'];
//if(!isset($count)){
//    $count = 0;
//}
//$count++;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог для задания</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Блог для задания</h1>
    <div>
        <div class="article">
            <h3><?= $article['title'] ?></h3>
            <em>Создано <?= $article['data_created'] ?></em>
            <em>Изменено <?= $article['data_updated'] ?></em>
            <p><?= $article['content'] ?></p>
        </div>
    </div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>

</body>
</html>