<?php
//core
require ($_SERVER['DOCUMENT_ROOT'].'/core/system/index.php');

//uri
require ($_SERVER['DOCUMENT_ROOT'].'/core/modules/url.php');

//plugins
include ($_SERVER['DOCUMENT_ROOT'].'/core/modules/notification.php');
include ($_SERVER['DOCUMENT_ROOT'].'/core/functions/functions.php');

//template
include ($_SERVER['DOCUMENT_ROOT'].'/templates/fortress/index.php');