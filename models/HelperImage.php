<?php
namespace app\models;

use Yii;
use \yii\base\Model;

class HelperImage extends Model
{
    public $image;
    
    /**
     * @param Yii\web\UploadedFile $file
     * @return string
     */
    public function uploadImage(yii\web\UploadedFile $file)
    {
        //a uniq name
        $filename = strtolower($file->baseName.'_'.md5(uniqid($file->baseName)).'.'.$file->extension);
        
        //save an image
        $file->saveAs(Yii::getAlias('@app').'\web\uploads\\'.$filename);
        return $filename;
    }
}