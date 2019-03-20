<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $map_lat
 * @property string $map_long
 * @property string $map_text
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'map_text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['map_lat', 'map_long'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => 'Заголовок',
            'description' => 'Описание',
            'map_lat' => 'Шырота',
            'map_long' => 'Долгота',
            'map_text' => 'Текст внутри карты',
        ];
    }
}
