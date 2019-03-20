<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $category_id
 * @property int $order_number
 * @property string $height
 * @property string $width
 * @property string $length
 * @property string $weight
 * @property string $price
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['category_id', 'order_number'], 'required'],
            [['category_id', 'order_number'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['height', 'width', 'length', 'weight', 'price'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => 'Наименование',
            'description' => 'Описание',
            'category_id' => 'Категория',
            'order_number' => 'Порядковый номер',
            'height' => 'Высота',
            'width' => 'Ширина',
            'length' => 'Длина',
            'weight' => 'Вес',
            'price' => 'Цена',
        ];
    }
}
