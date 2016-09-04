<?php
session_start();
include_once ('../functions/functions.php');
include_once ('notification.php');
include_once ('../system/configs/dbconnect.php');

$CONNECT = mysqli_connect(HOST,USER, PASS, DB);

$_POST['email'] = FormChars($_POST['email']);
$_POST['password'] = FormChars($_POST['password']);

if (!$_POST['email'] or !$_POST['password']) {
    NoticeShow(2, "Не заполнено поле e-mail или пароль");
} else {
    $Row = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT 'email' FROM 'users' WHERE 'email' = '$_POST[email]'"));
    if ($Row['email']) NoticeShow(1, "Данная электронная почта уже зарегестрирована! Зайдите под своей учетной запись или востановите пароль!");
    mysqli_query($CONNECT, "INSERT INTO 'users' VALUES ('', '$_POST[email]', '$_POST[password]', NOW())");

    NoticeShow(3, "Проверьте свой почтовый ящик!");
}

