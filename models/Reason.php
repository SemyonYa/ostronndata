<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reason".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $img
 */
class Reason extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reason';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description','img'], 'string'],
            [['title'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'img' => 'Картинка'
        ];
    }
}
