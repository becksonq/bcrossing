<?php

namespace backend\models;

use Yii;
use frontend\models\Books;

/**
 * This is the model class for table "{{%books_category}}".
 *
 * @property int $id
 * @property string $category_name
 * @property int $sort
 *
 * @property Books[] $books
 */
class BooksCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%books_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['sort'], 'integer'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
            'sort' => 'Sort',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['category' => 'id']);
    }
}
