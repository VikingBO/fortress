<?php
function NoticeShow($p1, $p2) {
    if ($p1 == 1) {
        $p1 = 'Ошибка: ';
        $class = "notification--error";
    }
    else if ($p1 == 2) {
        $p1 = 'Подсказка: ';
        $class = "notification--help";
    }
    else if ($p1 == 3) {
        $p1 = 'Уведомление: ';
        $class = "notification--notice";
    }

    $_SESSION['notification'] = '<div class="notification '.$class.'"><div class="wrap"><b>'.$p1.'</b>'.$p2.'</div></div>';
    exit(header('Location: '.$_SERVER['HTTP_REFERER']));
}

function Notification() {
    if ($_SESSION['notification']) $notification = $_SESSION['notification'];
    echo $notification;
    $_SESSION['notification'] = array();
}