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
<div class="container-fluid">
    <h1>Блог для задания</h1>
    <a href="admin" class="btn btn-primary">Панель администратора</a>
    <div>
        <?php foreach ($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
                <p><?= articles_intro($a['content']) ?></p>
                <em>Создано : <?= $a['data_created'] ?></em>
                <em>Изменено : <?= $a['data_updated'] ?></em>
            </div>
        <?php endforeach ?>
    </div>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>