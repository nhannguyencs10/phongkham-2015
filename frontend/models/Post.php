<?php

namespace frontend\models;

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
            'group_post' => 'Group Post',
            'name_post' => 'Name Post',
            'content' => 'Content',
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
    public function getGroupPost()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_post']);
    }
    
    public function getIntro(){
        $result = Post::find()->where(['group_post'=>1,'status'=>1])->one();
        return $result;
    }
    
    
    public function getCare(){
        $result = Post::find()->where(['group_post'=>3,'status'=>1])->all();
        return $result;
    }
}
