<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tool".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property string|null $img
 * @property int $type_id
 *
 * @property Tool $type
 * @property Tool[] $tools
 */
class Tool extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tool';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type_id'], 'required'],
            [['description'], 'string'],
            [['price', 'type_id'], 'integer'],
            [['name', 'img'], 'string', 'max' => 100],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'description' => 'Описание',
            'price' => 'Цена',
            'img' => 'Картинка',
            'type_id' => 'Тип инструмента',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTools()
    {
        return $this->hasMany(Type::className(), ['type_id' => 'id']);
    }
}
