<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог для задания</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <h1>Блог для задания</h1>
    <a href="index.php?action=add" class="btn btn-info">Добавить статью</a>
    <div>
        <table class="admin-table" style="width: 100%">
            <tr>
                <th>Заголовок</th>
                <th>Добавлено</th>
                <th>Обновлено</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($articles as $a): ?>
                <tr>
                    <td><?= $a['title'] ?></td>
                    <td><?= $a['data_created'] ?></td>
                    <td><?= $a['data_updated'] ?></td>
                    <td><a href="index.php?action=edit&id=<?= $a['id'] ?>">Редактировать</a></td>
                    <td><a href="index.php?action=delete&id=<?= $a['id'] ?>">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<footer>
    <p>Блог для задания<br>Copyright&copy;2017</p></footer>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>