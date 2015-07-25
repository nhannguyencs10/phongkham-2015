<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "specialist_sick".
 *
 * @property integer $id_sick
 * @property integer $id_specialist
 * @property string $name_sick
 * @property string $create_day
 * @property integer $status
 *
 * @property PostSick[] $postSicks
 * @property Specialist $idSpecialist
 * @property $specialist = new Specialist()
 */
class SpecialistSick extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'specialist_sick';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_specialist', 'name_sick'], 'required'],
            [['id_specialist', 'status'], 'integer'],
            [['create_day'], 'safe'],
            [['name_sick'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_sick' => 'Id Sick',
            'id_specialist' => 'Id Specialist',
            'name_sick' => 'Tên Bệnh',
            'create_day' => 'Ngày Tạo',
            'status' => 'Status',
            'specialist'=>'Tên Chuyên Khoa',
            'statusgroup'=>'Trạng Thái'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostSicks()
    {
        return $this->hasMany(PostSick::className(), ['id_sick' => 'id_sick']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialist()
    {
        return $this->hasOne(Specialist::className(), ['id_specialist' => 'id_specialist']);
    }
    
    
    public function getStatusgroup()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
