<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SpecialistSick;
use backend\models\Specialist;

/**
 * SpecialistSicktSearch represents the model behind the search form about `backend\models\SpecialistSick`.
 */
class SpecialistSicktSearch extends SpecialistSick
{
    /**
     * @inheritdoc
     */
    
    public $specialist;
    public $statusgroup;
    public function rules()
    {
        return [
            [['id_sick', 'id_specialist', 'status'], 'integer'],
            [['name_sick', 'create_day','specialist','statusgroup'], 'safe'],
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
        $query = SpecialistSick::find();
        
        $query->joinWith(['specialist','statusgroup']);
        

        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        $dataProvider->sort->attributes['specialist'] = [
            'asc' =>['specialist.name_specialist'=>SORT_ASC],
            'desc' =>['specialist.name_specialist'=>SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['statusgroup'] = [
            'asc' =>['status.name'=>SORT_ASC],
            'desc' =>['status.name'=>SORT_DESC],
        ];
        
        $this->load($params);
                
        if (!$this->validate()) {
            
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_sick' => $this->id_sick,
//            'id_specialist' => $this->id_specialist,
            'create_day' => $this->create_day,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name_sick', $this->name_sick]);
        $query->andFilterWhere(['like','specialist.name_specialist',  $this->specialist])
                 ->andFilterWhere(['like', 'status.name', $this->statusgroup]);

        return $dataProvider;
    }
}
