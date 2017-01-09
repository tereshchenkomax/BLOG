<?php

$res1 = mysqli_query($link, "SELECT 'views','hosts' FROM visits WHERE 'date'= '$date'");
$row = mysqli_fetch_assoc($res1);

echo '<br>Уникальных посетителей: ' . $row['hosts'] . '</br>';
echo '<br>Просмотров: '. $row['views'] . '</br>';

/**
 * Created by PhpStorm.
 * User: jesus
 * Date: 09.01.2017
 * Time: 2:36
 */