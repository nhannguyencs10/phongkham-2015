<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id_post
 * @property integer $group_post
 * @property string $name_post
 * @property string $content
 * @property string $create_day
 * @property integer $status
 *
 * @property Status $status0
 * @property Group $groupPost
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['group_post', 'status'], 'integer'],
            [['name_post', 'content'], 'required'],
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
            'group_post' => 'Nhớm Bài Viết',
            'name_post' => 'Tên Bài Viết',
            'content' => 'Nội Dung',
            'create_day' => 'Ngày Tạo',
            'status' => 'Status',
            'group'=>'Nhóm Bài Viết',
            'statusgroup'=>'Trạng Thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusgroup()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_post']);
    }
}
