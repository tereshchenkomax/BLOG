<?php
$link = db_connect();
$visitor_ip = $_SERVER["REMOTE_ADDR"];
echo $_SERVER['REMOTE_ADDR'];
//echo $_SERVER['SERVER_NAME'];

$date = date("Y-m-d");
//Были ли посещения за сегодня?
$res = mysqli_query($link, "SELECT visit_id FROM visits WHERE date= '$date'") or die("Проблема при подключении");
//Если за сегодня еще не было посетителей
if (mysqli_num_rows($res) == 0) {
    echo ('Первое условие');
    //Clean table's ip's
    mysqli_query($link, "DELETE FROM ip");
    //Add new visitior's ip
    mysqli_query($link, "INSERT INTO ip(`ip_adress`) VALUES ('$visitor_ip')");
    //Add hosts to base named 'visits'
    $res_count = mysqli_query($link, "INSERT INTO visits(`date`, `hosts`, `views`) VALUES ('$date',1,1)");
} else {
    echo ('Второе условие');
    //checkin' ip matches
    $current_ip = mysqli_query($link, "SELECT ip_id FROM ip WHERE ip_adress='$visitor_ip'");
    //echo (string $current_ip);
    //not unique ip
    if (mysqli_num_rows($current_ip) == 1) {
        echo ('Не уникальный ИП');
        mysqli_query($link, "UPDATE visits SET views='views'+1 WHERE date='$date'");//+1 view 4 this date //WHERE date='$date'//
    } else {
        mysqli_query($link, "INSERT INTO ip(`ip_adress`) VALUES ('$visitor_ip')");//adding new ip to base
        mysqli_query($link, "UPDATE visits SET hosts='hosts'+1, views='views'+1 WHERE date='$date'");//+1 new(hosts + view)
    }
    //echo ('$res');
}