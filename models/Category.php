<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property int $order_number
 */
class Category extends \yii\db\ActiveRecord
{
    public $imageFile;

    public function getFileUploadFolderPath()
    {
        $path = Yii::$app->basePath .'/web/uploads/' . self::tableName() . '/';
        if(!file_exists($path)){
            mkdir($path, 0700);
        }
        return $path;
    }

    public function imgUrl()
    {
        return Url::base(true) .'/uploads/'. self::tableName() . '/' . $this->image;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['order_number'], 'required'],
            [['order_number'], 'integer'],
            [['name', 'image'], 'string', 'max' => 255],
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
            'image' => Yii::t('app', 'Image'),
            'description' => Yii::t('app', 'Description'),
            'order_number' => Yii::t('app', 'Order Number'),
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $baseFileName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $uploadPath = $this->getFileUploadFolderPath() . $baseFileName;
            $this->imageFile->saveAs($uploadPath);
            $this->image = $baseFileName;
            return $this->update(false);
        } else {
            return false;
        }
    }

    public function afterDelete()
    {
        parent::afterDelete(); // TODO: Change the autogenerated stub
        if(file_exists($this->image)){
            unlink($this->image);
        }
    }
}
