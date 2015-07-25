<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property integer $id
 * @property string $fullname
 * @property string $avatar
 * @property string $intro
 * @property integer $status
 *
 * @property Status $status0
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'intro'], 'required'],
            [['intro'], 'string'],
            [['status'], 'integer'],
            [['fullname', 'avatar'], 'string', 'max' => 500]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullname' => 'Họ Tên',
            'avatar' => 'Ảnh Đại Diện',
            'intro' => 'Giới Thiệu',
            'status' => 'Trạng Thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
