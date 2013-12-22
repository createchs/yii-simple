<?php

require_once dirname(__DIR__) . '/app/vendor/autoload.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);

Yii::createWebApplication(dirname(__DIR__) . '/app/config/test.php')->run();
