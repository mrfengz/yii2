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

    public function actionDelayQueue()
    {
        $key = 'notify:coupon:ttl:seconds';
        // 这种的可能会面临一个问题，就是数据比较多，这个时候单个key可能存储很多的数据，所以可以考虑使用hash，建立多个key，然后放到不同的队列中。
        // key的个数，我们可以事先确定好，如果数量变多，就需要扩容。
        // 每个key单独有一个进程取进行处理，只取出来可以取的，放入新的队列中
        // 多个消费者同时去消费已经取出的队列
        ARedis::getInstance()->zAdd($key, time() + 10, json_encode(['user_id' => 1, 'coupon_id' => 2]));
        ARedis::getInstance()->zAdd($key, time() + 30, json_encode(['user_id' => 1, 'coupon_id' => 3]));
        ARedis::getInstance()->zAdd($key, time() + 90, json_encode(['user_id' => 1, 'coupon_id' => 5]));
        ARedis::getInstance()->zAdd($key, time() + 1200, json_encode(['user_id' => 1, 'coupon_id' => 7]));
        $end = time() + 380;
        $start = time() - 100;
        $res = ARedis::getInstance()->zRangeByScore($key, $start, $end, ['withscores' => true]);
        foreach ($res as $zkey => $deadline) {
            $data = json_decode($key, true);
            print_r($data);
            sleep(0.5);
            ARedis::getInstance()->zRem($key, $zkey);
        }
        // var_dump($res);
    }
}