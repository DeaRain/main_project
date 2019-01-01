<?php

namespace common\components;

use yii\base\Component;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use Yii;

class Storage extends Component
{
    public $LOCATION_PATH = "uploads/";

    public function getImagePath($save_Name)
    {
        $name = substr_replace($save_Name, '/', 4, 0);
        $name = substr_replace($name, '/', 2, 0);
        return Yii::getAlias("@image").'/'.$name;
    }

    public function saveImage($image)
    {
        $name = sha1_file($image->tempName);
        $fileName = substr_replace($name, '/', 4, 0);
        $fileName = substr_replace($fileName, '/', 2, 0);
        FileHelper::createDirectory("uploads/".substr($fileName, 0,5));
        $image->saveAs("uploads/".$fileName.'.'.$image->extension);
        return $name.'.'.$image->extension;
    }

}