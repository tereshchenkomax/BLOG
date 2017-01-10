<main class="row">
    <section class="main_top">
<!--        <h2 class="text-center">Fitness blog 2000</h2>-->
    </section>
    <div class="container">
        <div class="row">
            <?php foreach ($articles as $a): ?>
                <div class="article col-lg-12">
                    <h3><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
                    <p class="article_trimmed"><?= articles_intro($a['content']) ?></p>
                    <em>Создано : <?= $a['data_created'] ?></em>
                    <em>Изменено : <?= $a['data_updated'] ?></em>
                </div>

            <?php endforeach ?>

        </div>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item"><h4>1</h4></div>
        <div class="item"><h4>2</h4></div>
        <div class="item"><h4>3</h4></div>
        <div class="item"><h4>4</h4></div>
        <div class="item"><h4>5</h4></div>
        <div class="item"><h4>6</h4></div>
        <div class="item"><h4>7</h4></div>
        <div class="item"><h4>8</h4></div>
        <div class="item"><h4>9</h4></div>
        <div class="item"><h4>10</h4></div>
        <div class="item"><h4>11</h4></div>
        <div class="item"><h4>12</h4></div>
    </div>
    <script>
        $('.owl-carousel').owl-carousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
</main>

