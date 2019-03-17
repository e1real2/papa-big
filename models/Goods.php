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
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'category_id' => Yii::t('app', 'Category ID'),
            'order_number' => Yii::t('app', 'Order Number'),
            'height' => Yii::t('app', 'Height'),
            'width' => Yii::t('app', 'Width'),
            'length' => Yii::t('app', 'Length'),
            'weight' => Yii::t('app', 'Weight'),
            'price' => Yii::t('app', 'Price'),
        ];
    }
}
