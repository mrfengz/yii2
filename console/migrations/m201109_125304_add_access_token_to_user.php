<?php

use yii\db\Migration;

/**
 * Class m201109_125304_add_access_token_to_user
 */
class m201109_125304_add_access_token_to_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201109_125304_add_access_token_to_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201109_125304_add_access_token_to_user cannot be reverted.\n";

        return false;
    }
    */
}
