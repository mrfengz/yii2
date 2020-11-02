<?php

use yii\db\Migration;

/**
 * Class m191029_144854_book
 */
class m191029_144854_book extends Migration
{
    const TABLE_NAME = '{{%book}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->defaultValue('')->comment('书名'),
            'author' => $this->string(128)->notNull()->defaultValue('')->comment('作者'),
            'translator' => $this->string(128)->notNull()->defaultValue('')->comment('译者'),
            'publisher' => $this->string(96)->notNull()->defaultValue('')->comment('出版社'),
            'published_at' => $this->date()->notNull()->defaultValue('1970-01-01')->comment('出版日期'),
            'isbn' => $this->string(16)->notNull()->defaultValue('')->comment('书号'),
            'book_img' => $this->string()->notNull()->defaultValue('')->comment('封面图'),
            'created_at' => $this->integer()->unsigned()->notNull()->defaultValue(0),
            'updated_at' => $this->integer()->unsigned()->notNull()->defaultValue(0),
            'total_num' => $this->tinyInteger()->unsigned()->notNull()->defaultValue(0)->comment('馆藏'),
            'available_num' => $this->tinyInteger()->unsigned()->notNull()->defaultValue(0)->comment('可借阅数量'),
            'reserve_num' => $this->tinyInteger()->unsigned()->notNull()->defaultValue(0)->comment('不可外借数量'),
            'status' => $this->tinyInteger()->unsigned()->notNull()->defaultValue(1),
            'description' => $this->string(512)->notNull()->defaultValue('')->comment('简介')
        ], $tableOptions);

        $this->createIndex('name', self::TABLE_NAME, 'name');
        $this->createIndex('isbn', self::TABLE_NAME, 'isbn');
        $this->createIndex('created_at', self::TABLE_NAME, 'created_at');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191029_144854_book cannot be reverted.\n";
        $this->dropTable(self::TABLE_NAME);
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191029_144854_book cannot be reverted.\n";

        return false;
    }
    */
}
