<?php

//TODO Доделать активацию е-мейла

if (!$_SESSION['USER_ACTIVE_EMAIL']) {
    $Email = base64_decode(substr($Param['code'], 5).substr($Param['code'], 0, 5));
    if (strpos($Email, '@') !==false) {
        echo $Email;
    }
}