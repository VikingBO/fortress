<?php

if ($_SERVER['REQUEST_URI'] == '/') {
    $Page = 'index';
    $Module = 'index';
} else {
    $URL_Path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $URL_Parts = explode('/', trim($URL_Path, ' /'));
    $Page = array_shift($URL_Parts);
    $Module = array_shift($URL_Parts);

    if(!empty($Module)) {
        $Param = array();
        for ($i = 0; $i < count($URL_Parts); $i++) {
            $Param[$URL_Parts[$i]] = $URL_Parts[++$i];
        }
    }
}

//TODO сделать проверку главной страницы и вывод страницы 404

$url = mysqli_fetch_assoc(mysqli_query($CONNECT, "SELECT `url`,`path` FROM `pages` WHERE `url` = '$Page' LIMIT 1"));
if ($url['url']) include_once($_SERVER['DOCUMENT_ROOT'].$url['path']);
else {echo 'error';}

