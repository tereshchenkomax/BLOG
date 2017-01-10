<div class="container">
    <div>
        <div class="article">
            <h3 class="title_article"><?= $article['title'] ?></h3>
            <p><?= $article['content'] ?></p>
            <em>Создано <?= $article['data_created'] ?></em>
            <em>Изменено <?= $article['data_updated'] ?></em>

        </div>
    </div>
    <a href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
</div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>