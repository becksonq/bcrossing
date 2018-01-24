<?php

use yii\db\Migration;

/**
 * Class m180124_141341_add_user_admin
 */
class m180124_141341_add_user_admin extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert( '{{%user}}', [
            'username',
            'email',
            'password_hash',
            'auth_key',
            'confirmed_at',
            'unconfirmed_email',
            'blocked_at',
            'registration_ip',
            'created_at',
            'updated_at',
            'flags',
            'last_login_at'
        ], [
            [
                'admin',
                'vasja@pupkin.com',
                '$2y$10$AhIzwqkYy5VRSC2e/RwPg.fEaqFrf8CKxESts1dlYME.3UJIdt17S',
                '57C5Y7DFPezwmlydg9pJVczwY2NZE-A3',
                '1508878907',
                'null',
                'null',
                '127.0.0.1',
                '1508878890',
                '1516773584',
                '0',
                '1516773376'
            ],
        ] )->execute();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180124_141341_add_user_admin cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180124_141341_add_user_admin cannot be reverted.\n";

        return false;
    }
    */
}
