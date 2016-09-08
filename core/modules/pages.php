<?php
session_start();

include_once ('core/functions/functions.php');
include_once ('core/modules/notification.php');
include_once ('core/system/configs/dbconnect.php');

$CONNECT = mysqli_connect(HOST,USER, PASS, DB);

$_POST['url'] = FormChars($_POST['url']);
$_POST['path'] = FormChars($_POST['path']);
$_POST['role'] = FormChars($_POST['role']);

if (!$_POST['url'] or !$_POST['path']) {
    NoticeShow(2, "Не заполнено поле название страницы или пути к странице");
} else {
    $pages = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `url` FROM `pages` WHERE `url` = '$_POST[url]'"));
    if ($pages['url']) NoticeShow(1, "Данная страница уже существует в безе данных под таким именем!");

    mysqli_query($CONNECT, "INSERT INTO `pages` VALUES ('','$_POST[url]','$_POST[path]','$_POST[role]')");
    NoticeShow(3, "Страница зарегестрирована под адресом <a href='".$_SERVER['SERVER_NAME']."/".$_POST['url']."'>".$_SERVER['SERVER_NAME']."/".$_POST['url']."</a>");
}

//TODO Сделать проверку данной страницы. Если такая страница существует, то предложить просто внести её в базу данных, если же нет, то создать её.