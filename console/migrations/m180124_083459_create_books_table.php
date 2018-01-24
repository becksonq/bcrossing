<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books`.
 */
class m180124_083459_create_books_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';

        $this->createTable( '{{%books}}', [
            'id'          => $this->primaryKey(),
            'book_title'  => $this->string( 255 )->notNull(),
            'description' => $this->text(),
            'author'      => $this->string( 255 ),
            'category'    => $this->integer(),
            'user'        => $this->integer(),
            'book_point'  => $this->integer(),
            'created_at'  => $this->integer()->unsigned()->notNull(),
            'updated_at'  => $this->integer()->unsigned()->notNull(),
        ], $tableOptions );

        $this->addForeignKey( 'fk-user_id', '{{%books}}', 'user', 'user', 'id' );
        $this->addForeignKey( 'fk-book_point', '{{%books}}', 'book_point', 'books_points', 'id' );

        Yii::$app->db->createCommand()->batchInsert( '{{%books}}', [
            'book_title',
            'description',
            'author',
            'category',
            'user',
            'book_point',
            'created_at',
            'updated_at'
        ], [
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '3',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '15',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '11',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
            [ 'Посол нового мира', 'Book description', 'Жуковский Н', '2', '2', '1',  mktime(), mktime() ],
        ] )->execute();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable( '{{%books}}' );
    }
}
