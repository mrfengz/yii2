<?php
namespace console\controllers;

use common\utils\ARedis;
use yii\console\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        // \Yii::$app->cache->get('test', 'oo1');

        echo "hello \n";

        ARedis::getInstance(true)->set('nu', 'nooule');
        ARedis::getInstance()->set('lai', 'jianlai');
        ARedis::getInstance()->flushDB();
        // redis缓存
        // try {
        //     $res = \Yii::$app->cache->set('test', 'august');
        // } catch(\Exception $e) {
        //     echo $e->getMessage();
        // }
        //
        // echo \Yii::$app->cache->get('test');
    }
}