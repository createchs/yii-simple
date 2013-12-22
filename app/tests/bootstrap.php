<?php

require_once dirname(__DIR__) . '/vendor/yiisoft/yii/framework/yiit.php';

require_once __DIR__ . '/WebTestCase.php';

Yii::createWebApplication(dirname(__DIR__) . '/config/test.php');
