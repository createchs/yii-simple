<?php

return CMap::mergeArray(
    require __DIR__ . '/main.php',
    [
        'components' => [
            'fixture' => [
                'class' => 'system.test.CDbFixtureManager',
            ],
            
            'db' => require __DIR__ . '/db.php',
        ],
    ]
);