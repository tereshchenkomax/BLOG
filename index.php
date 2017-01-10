<?php
    require_once ("database.php");
    include ('views/header.php');
    require_once ("models/articles.php");
    include('count.php');


    $link = db_connect();
    $articles = articles_all($link);

    include ("views/articles.php");
    include ('views/showstats.php');
    include ('views/footer.php');

