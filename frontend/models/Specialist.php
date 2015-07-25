<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "specialist".
 *
 * @property integer $id_specialist
 * @property string $name_specialist
 * @property string $create_day
 * @property integer $status
 *
 * @property Status $status0
 * @property SpecialistSick[] $specialistSicks
 */
class Specialist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_specialist'], 'required'],
            [['create_day'], 'safe'],
            [['status'], 'integer'],
            [['name_specialist'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_specialist' => 'Id Specialist',
            'name_specialist' => 'Name Specialist',
            'create_day' => 'Create Day',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialistSicks()
    {
        return $this->hasMany(SpecialistSick::className(), ['id_specialist' => 'id_specialist']);
    }
}
