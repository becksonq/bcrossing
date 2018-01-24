<?php

use yii\db\Migration;

/**
 * Class m180124_103920_add_foreign_keys
 */
class m180124_103920_add_foreign_keys extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->addForeignKey( 'fk-books_category', '{{%books}}', 'category', '{{%books_category}}', 'id' );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180124_103920_add_foreign_keys cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180124_103920_add_foreign_keys cannot be reverted.\n";

        return false;
    }
    */
}
