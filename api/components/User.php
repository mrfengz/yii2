<?php
namespace api\components;

use common\models\User as UserModel;
use yii\web\IdentityInterface;

class User implements IdentityInterface
{

    public $loginUrl = null;

    public function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }

    /**
     * author: august 2020/11/9
     * @param int|string $id
     * @return UserModel|IdentityInterface|null
     */
    public static function findIdentity($id)
    {
        return UserModel::findIdentity($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){

    }
}