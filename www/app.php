<?php

require_once dirname(__DIR__) . '/app/vendor/autoload.php';

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

Yii::createWebApplication(dirname(__DIR__) . '/app/config/main.php')->run();
