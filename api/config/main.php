<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'api\controllers',
    'components' => [
        // 'request' => [
        //     // 'csrfParam' => '_csrf-frontend',
        //     // 接收json格式输入的数据。如果不配置，尽可以分辨 application/x-www-form-urlencoded 和 multipart/form-data 输入格式
        //     'parsers' => [
        //         'application/json' => 'yii\web\JsonParser',
        //     ]
        // ],
        'user' => [
            'identityClass' => 'api\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
            // 'loginUrl ' => null,
            // 'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        // 'session' => [
        //     // this is the name of the session cookie used for login on the frontend
        //     'name' => 'advanced-frontend',
        // ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        // rest
        'urlManager' => [
            // 'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            // 'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'user',
                    'extraPatterns'=>[
                        'POST login'=>'login',
                    ],
                ],
            ],
        ]
    ],
    'params' => $params,
];
