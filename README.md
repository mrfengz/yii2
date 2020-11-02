# library
    图书馆系统
## 安装的是高级模板
    参考 [yii2高级模板安装](https://github.com/yiisoft/yii2-app-advanced/blob/master/docs/guide-zh-CN/start-installation.md)
    
## 修改migrations,插入管理员
    console/migrations/m_xxxx_xxxxxx_init.php
    
## 如果要使用i18n，需要在common/main(-local).php配置i18n信息
    'i18n' => [
        'translations' => [
            '*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@common/messages', // if advanced application, set @frontend/messages
                'sourceLanguage' => 'zh_CN',
                'fileMap' => [
                    //'main' => 'main.php',
                ],
            ],
        ],
    ],    
 
 ## 使用adminlte后台框架   
    composer require dmstr/yii2-adminlte-asset
    
    配置文件添加（不做格式定制，快速入手）
        'components' => [
            'view' => [
                 'theme' => [
                     'pathMap' => [
                        '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                     ],
                 ],
            ],
        ],
        
    如果需要自定义页面格式，可以将yii2-app的文件，拷贝到backend/views中，进行修改，不要直接在vendor中修改。同时删除掉上边的配置。
    
    backend/main-local.php gii crud模板
    if (YII_ENV_DEV) {    
        $config['modules']['gii'] = [
            'class' => 'yii\gii\Module',
            'generators' => [ // HERE
                'crud' => [
                    'class' => 'yii\gii\generators\crud\Generator',
                    'templates' => [
                        'adminlte' => '@vendor/dmstr/yii2-adminlte-asset/gii/templates/crud/simple',
                    ]
                ]
            ],
        ];
    }
    添加后会显示在code template下拉框中（找了半天，汗）

## yii2 rbac权限控制
    auth_item 路由表 
        type=2 路由
        type=1 角色
    auth_item_child 角色-权限表
    auth_rule 规则表
    auth_assignment 分配表
    
    上一步完成后，可以手动添加，选择路由，添加角色，设置菜单，分配。
    这里是参考脚本导入的 [yii2 rbac](https://www.yiichina.com/tutorial/1184)
    
             
## 使用Yii2框架开发
    <p align="center">
        <a href="https://github.com/yiisoft" target="_blank">
            <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
        </a>
        <h1 align="center">Yii 2 Advanced Project Template</h1>
        <br>
    </p>
    
    Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
    developing complex Web applications with multiple tiers.
    
    The template includes three tiers: front end, back end, and console, each of which
    is a separate Yii application.
    
    The template is designed to work in a team development environment. It supports
    deploying the application in different environments.
    
    Documentation is at [docs/guide/README.md](docs/guide/README.md).
    
    [![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
    [![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
    [![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)
    
    DIRECTORY STRUCTURE
    -------------------
    
    ```
    common
        config/              contains shared configurations
        mail/                contains view files for e-mails
        models/              contains model classes used in both backend and frontend
        tests/               contains tests for common classes    
    console
        config/              contains console configurations
        controllers/         contains console controllers (commands)
        migrations/          contains database migrations
        models/              contains console-specific model classes
        runtime/             contains files generated during runtime
    backend
        assets/              contains application assets such as JavaScript and CSS
        config/              contains backend configurations
        controllers/         contains Web controller classes
        models/              contains backend-specific model classes
        runtime/             contains files generated during runtime
        tests/               contains tests for backend application    
        views/               contains view files for the Web application
        web/                 contains the entry script and Web resources
    frontend
        assets/              contains application assets such as JavaScript and CSS
        config/              contains frontend configurations
        controllers/         contains Web controller classes
        models/              contains frontend-specific model classes
        runtime/             contains files generated during runtime
        tests/               contains tests for frontend application
        views/               contains view files for the Web application
        web/                 contains the entry script and Web resources
        widgets/             contains frontend widgets
    vendor/                  contains dependent 3rd-party packages
    environments/            contains environment-based overrides
    ```
