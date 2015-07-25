<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Post;

/**
 * PostSearch represents the model behind the search form about `backend\models\Post`.
 */
class PostSearch extends Post
{
    /**
     * @inheritdoc
     */
    
    public $group;
    public $statusgroup;
    public function rules()
    {
        return [
            [['id_post', 'group_post', 'status'], 'integer'],
            [['name_post', 'content', 'create_day','group','statusgroup'], 'safe'],
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
        $query = Post::find();
        
        
        $query->joinWith(['group','statusgroup']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        
        
        $dataProvider->sort->attributes['group'] = [
            'asc' =>['group.name'=>SORT_ASC],
            'desc' =>['group.name'=>SORT_DESC],
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
            'group_post' => $this->group_post,
            'create_day' => $this->create_day,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_post', $this->name_post])
            ->andFilterWhere(['like', 'content', $this->content])
                ->andFilterWhere(['like', 'group.name', $this->group])
             ->andFilterWhere(['like', 'status.name', $this->statusgroup])    
                ;

        return $dataProvider;
    }
}
