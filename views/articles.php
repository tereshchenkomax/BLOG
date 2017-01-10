<main class="row">
    <section class="main_top">
<!--        <h2 class="text-center">Fitness blog 2000</h2>-->
    </section>
    <div class="container">
        <div class="row">
            <?php $b=1 ?>
            <?php foreach ($articles as $a): ?>
                <div class="col-lg-6">
                    <img class="images" src="img/main_content_img_0<?= $b++?>.jpg">
                </div>
                <div class="article col-lg-6">
                    <h3><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
                    <p class="article_trimmed"><?= articles_intro($a['content']) ?></p>
                    <em>Создано : <?= $a['data_created'] ?></em>
                    <em>Изменено : <?= $a['data_updated'] ?></em>
                </div>

            <?php endforeach ?>

        </div>
    </div>
</main>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>