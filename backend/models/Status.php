<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Doctor[] $doctors
 * @property Post[] $posts
 * @property PostSick[] $postSicks
 * @property Specialist[] $specialists
 * @property SpecialistSick[] $specialistSicks
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDoctors()
    {
        return $this->hasMany(Doctor::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostSicks()
    {
        return $this->hasMany(PostSick::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialists()
    {
        return $this->hasMany(Specialist::className(), ['status' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialistSicks()
    {
        return $this->hasMany(SpecialistSick::className(), ['status' => 'id']);
    }
}
