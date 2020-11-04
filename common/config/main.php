<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            // 文件缓存
            // 'class' => 'yii\caching\FileCache',
            'class' => '\common\components\RedisCache',
            'host' =>  '192.168.1.247',
            'port' => 6379,
            'selectDb' => 1,
            'auth' => 'august',
            'persistent' => false,
        ],
        "authManager" => [
            "class" => 'yii\rbac\DbManager',
            "defaultRoles" => ["guest"],
        ],
    ],
];
