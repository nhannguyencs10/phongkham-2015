<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PostSick;

/**
 * PostSickSearch represents the model behind the search form about `backend\models\PostSick`.
 */
class PostSickSearch extends PostSick
{
    /**
     * @inheritdoc
     */
    
    public $sick;
    public $statusgroup;
    public function rules()
    {
        return [
            [['id_post', 'id_sick', 'status'], 'integer'],
            [['name_post', 'content', 'create_day','sick','statusgroup'], 'safe'],
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
        $query = PostSick::find();
        
        $query->joinWith(['sick','statusgroup']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        
        $dataProvider->sort->attributes['sick'] = [
            'asc' =>['specialist_sick.name_sick'=>SORT_ASC],
            'desc' =>['specialist_sick.name_sick'=>SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['statusgroup'] = [
            'asc' =>['status.name'=>SORT_ASC],
            'desc' =>['status.name'=>SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_post' => $this->id_post,
            'id_sick' => $this->id_sick,
            'create_day' => $this->create_day,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_post', $this->name_post])
            ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'specialist_sick.name_sick', $this->sick])
            ->andFilterWhere(['like', 'status.name', $this->statusgroup]) ;

        return $dataProvider;
    }
}
