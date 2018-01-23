<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books_points`.
 */
class m180123_190057_create_books_points_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable('{{%books_points}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'address' => $this->text(),
            'created_at' => $this->integer()->unsigned()->notNull(),
            'updated_at'   => $this->integer()->unsigned()->notNull(),
        ], $tableOptions);

        Yii::$app->db->createCommand()->batchInsert( '{{%books_points}}', [
            'title',
            'address',
            'created_at',
            'updated_at'
        ], [
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
            [ 'Point_title', 'Архангельск, ул. Воскресенская, 119', mktime(), mktime() ],
        ] )->execute();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%books_points}}');
    }
}
