<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "post_sick".
 *
 * @property integer $id_post
 * @property integer $id_sick
 * @property string $name_post
 * @property string $content
 * @property string $create_day
 * @property integer $status
 *
 * @property SpecialistSick $idSick
 */
class PostSick extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post_sick';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sick', 'name_post', 'content'], 'required'],
            [['id_sick', 'status'], 'integer'],
            [['content'], 'string'],
            [['create_day'], 'safe'],
            [['name_post'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_post' => 'Id Post',
            'id_sick' => 'Id Sick',
            'name_post' => 'Tên Bài Viết',
            'content' => 'Nội Dung',
            'create_day' => 'Ngày Tạo',
            'status' => 'Status',
            'sick'=>'Tên bệnh',
            'statusgroup'=>'Trạng Thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSick()
    {
        return $this->hasOne(SpecialistSick::className(), ['id_sick' => 'id_sick']);
    }
    
    
    public function getStatusgroup()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
