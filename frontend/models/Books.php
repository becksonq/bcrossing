<?php

namespace frontend\models;

use backend\models\Categories;
use Yii;
use \yii\db\ActiveRecord;
use dektrium\user\models\User;
use frontend\models\BooksPoints;

/**
 * This is the model class for table "{{%books}}".
 *
 * @property int $id
 * @property string $book_title
 * @property string $description
 * @property string $author
 * @property int $category
 * @property int $user
 * @property int $book_point
 * @property int $created_at
 * @property int $updated_at
 *
 * @property BooksPoints $bookPoint
 * @property User $user0
 */
class Books extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%books}}';
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_title',], 'required'],
            [['description'], 'string'],
            [['category', 'user', 'book_point', 'created_at', 'updated_at'], 'integer'],
            [['book_title', 'author'], 'string', 'max' => 255],
            [ ['book_point'], 'exist', 'skipOnError' => true, 'targetClass' => BooksPoints::className(), 'targetAttribute' => [ 'book_point' => 'id']],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
            [ ['categories'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => [ 'category' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_title' => 'Book Title',
            'description' => 'Description',
            'author' => 'Author',
            'category' => 'Category',
            'user' => 'User',
            'book_point' => 'Book Point',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooksPoints()
    {
        return $this->hasOne(BooksPoints::className(), ['id' => 'book_point']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category']);
    }
}
