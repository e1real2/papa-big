<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social_links".
 *
 * @property int $id
 * @property string $url
 * @property int $order_num
 * @property string $type
 */
class SocialLinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url'], 'required'],
            [['order_num'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'url' => 'Ссылка на соцсеть',
            'order_num' => 'Порядок',
            'type' => 'Тип',
        ];
    }
}
