<?php
session_start();

include_once ('configs/dbconnect.php');
$CONNECT = mysqli_connect(HOST,USER,PASS,DB);

