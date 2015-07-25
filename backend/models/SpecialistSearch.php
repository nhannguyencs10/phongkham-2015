<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Specialist;

/**
 * SpecialistSearch represents the model behind the search form about `backend\models\Specialist`.
 */
class SpecialistSearch extends Specialist
{
    /**
     * @inheritdoc
     */
    
    
    public $statusgroup;
    public function rules()
    {
        return [
            [['id_specialist', 'status'], 'integer'],
            [['name_specialist', 'create_day','statusgroup'], 'safe'],
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
        $query = Specialist::find();
        
        
        $query->joinWith('statusgroup');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
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
            'id_specialist' => $this->id_specialist,
            'create_day' => $this->create_day,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_specialist', $this->name_specialist])
                ->andFilterWhere(['like', 'status.name', $this->statusgroup]) ;

        return $dataProvider;
    }
}
