<?php

namespace frontend\models;

use common\components\storage;
use yii\base\Model;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property int $category
 * @property string $picture
 * @property int $author
 * @property string $title
 * @property string $content
 * @property int $active
 * @property int $created_at
 */
class UploadImage extends Model {
    public $image;

    public function rules(){
        return[
            [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    public function upload(){
        if($this->validate()){
            Yii::$app->storage->saveImage($this->image);
        }else{
            return false;
        }
    }
}