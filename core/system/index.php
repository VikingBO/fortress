<?php
session_start();

include_once ('configs/dbconnect.php');
$CONNECT = mysqli_connect(HOST,USER, PASS, DB);

include_once ('core/functions/functions.php');
include_once ('core/modules/notification.php');