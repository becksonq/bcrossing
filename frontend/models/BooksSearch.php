<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Books;

/**
 * BooksSearch represents the model behind the search form of `frontend\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category', 'user', 'book_point', 'created_at', 'updated_at'], 'integer'],
            [['book_title', 'description', 'author'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Books::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'category' => $this->category,
            'user' => $this->user,
            'book_point' => $this->book_point,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'book_title', $this->book_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }

    public function searchById( $pointId )
    {
        // TODO: проверка $pointId
        $query = Books::find()
            ->where( [ 'book_point' => $pointId ] )
            ->joinWith( 'books_category' );

        $dataProvider = new ActiveDataProvider( [
            'query' => $query,
        ] );

        return $dataProvider;
    }
}
