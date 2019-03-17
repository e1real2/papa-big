<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "goods_image_conn".
 *
 * @property int $id
 * @property int $good_id
 * @property int $image_id
 * @property int $is_main
 */
class GoodsImageConn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'goods_image_conn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['good_id', 'image_id', 'is_main'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'good_id' => Yii::t('app', 'Good ID'),
            'image_id' => Yii::t('app', 'Image ID'),
            'is_main' => Yii::t('app', 'Is Main'),
        ];
    }
}
