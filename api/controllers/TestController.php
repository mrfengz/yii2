<?php
/**
 * Created by PhpStorm.
 * User: august
 * Date: 2020/11/9
 * Time: 20:00
 */

namespace frontend\controllers;



use yii\base\Controller;
use yii\rest\ActiveController;

class TestController extends ActiveController
{
    public function actionIndex()
    {
        echo 123;
    }
}