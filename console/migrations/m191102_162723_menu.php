<?php

use yii\db\Migration;

/**
 * Class m191102_162723_rbac
 */
class m191102_162723_menu extends Migration
{
    const TABLE_MENU = '{{%menu}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable(self::TABLE_MENU, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull()->defaultValue(''),
            'parent' => $this->integer(11),
            'route' => $this->string(255),
            'order' => $this->integer(11),
            'data' => $this->text()
        ], $tableOptions);

        $this->createIndex('parent', self::TABLE_MENU, 'parent');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191102_162723_rbac cannot be reverted.\n";
        // return $this->dropTable(self::TABLE_MENU);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191102_162723_rbac cannot be reverted.\n";

        return false;
    }
    */
}
