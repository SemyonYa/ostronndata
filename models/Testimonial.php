<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testimonial".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string|null $img
 */
class Testimonial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text'], 'string'],
            [['is_active'], 'integer'], 
            [['name', 'img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Автор',
            'text' => 'Тект отзыва',
            'img' => 'Фото',
            'is_active' => 'Опубликовать'
        ];
    }
}
