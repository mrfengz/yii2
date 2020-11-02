<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name 书名
 * @property string $author 作者
 * @property string $translator 译者
 * @property string $publisher 出版社
 * @property string $published_at 出版日期
 * @property string $isbn 书号
 * @property string $book_img 封面图
 * @property string $created_at
 * @property string $updated_at
 * @property int $total_num 馆藏
 * @property int $available_num 可借阅数量
 * @property int $reserve_num 不可外借数量
 * @property int $status
 * @property string $description 简介
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'class' => TimestampBehavior::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published_at'], 'safe'],
            [['created_at', 'updated_at', 'total_num', 'available_num', 'reserve_num', 'status'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['author', 'translator'], 'string', 'max' => 128],
            [['publisher'], 'string', 'max' => 96],
            [['isbn'], 'string', 'max' => 16],
            [['book_img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app/book', 'ID'),
            'name' => Yii::t('app/book', '书名'),
            'author' => Yii::t('app/book', '作者'),
            'translator' => Yii::t('app/book', '译者'),
            'publisher' => Yii::t('app/book', '出版社'),
            'published_at' => Yii::t('app/book', '出版日期'),
            'isbn' => Yii::t('app/book', '书号'),
            'book_img' => Yii::t('app/book', '封面图'),
            'created_at' => Yii::t('app/book', 'Created At'),
            'updated_at' => Yii::t('app/book', 'Updated At'),
            'total_num' => Yii::t('app/book', '馆藏'),
            'available_num' => Yii::t('app/book', '可借阅数量'),
            'reserve_num' => Yii::t('app/book', '不可外借数量'),
            'status' => Yii::t('app/book', 'Status'),
            'description' => Yii::t('app/book', '简介'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return BookQuery the active query used by this AR class.
     */
    /*public static function find()
    {
        return new self();
    }*/
}
