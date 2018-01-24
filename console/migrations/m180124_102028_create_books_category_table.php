<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books_category`.
 */
class m180124_102028_create_books_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable( '{{%books_category}}', [
            'id'            => $this->primaryKey(),
            'category_name' => $this->string( 255 )->notNull(),
            'sort'          => $this->integer(),
        ], $tableOptions );

        Yii::$app->db->createCommand()->batchInsert( '{{%books_category}}', [
            'category_name',
            'sort',
        ], [
            [ 'Кулинария', 1 ],
            [ 'История', 2 ],
            [ 'Другое', 3 ],
        ] )->execute();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable( '{{%books_category}}' );
    }
}
