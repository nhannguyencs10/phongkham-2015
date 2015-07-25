<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bacsi".
 *
 * @property integer $id
 * @property string $hoten
 * @property string $avatar
 * @property string $gioithieu
 * @property integer $trangthai
 */
class Bacsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bacsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hoten', 'gioithieu'], 'required'],
            [['gioithieu'], 'string'],
            [['trangthai'], 'integer'],
            [['hoten', 'avatar'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hoten' => 'Hoten',
            'avatar' => 'Avatar',
            'gioithieu' => 'Gioithieu',
            'trangthai' => 'Trangthai',
        ];
    }
}
