<?php

define('CSS_PATH', '/shop/public/css/');
define('JS_PATH', '/shop/public/js/');
define('IMG_PATH', '/shop/public/image/');
define('ICON_PATH', '/shop/public/iconfont/');

include 'core/Debug.php';
include 'core/router.php';
include 'core/smarty/Smarty.class.php';
include 'core/main.php';
include 'core/indexMain.php';
include 'core/db.php';
include 'core/unit.php';
router::run();
?>