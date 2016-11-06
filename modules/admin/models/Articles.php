<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property string $id
 * @property string $name
 * @property string $text
 * @property string $img
 * @property string $date
 * @property string $article_url
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $image;
    public $gallery;

    public static function tableName()
    {
        return 'articles';
    }

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'img', 'date', 'article_url'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['name', 'img', 'article_url'], 'string', 'max' => 255],
            [['image'], 'file' , 'extensions' => 'png, jpg'],
            [['gallery'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Индификатор',
            'name' => 'Название',
            'text' => 'Текст',
            'image' => 'Изображение',
            'date' => 'Дата публикации',
            'article_url' => 'Ссылка на внешний ресурс',
        ];
    }

    public function upload() {
        if($this->validate()) {
            $path = 'images/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            return true;
        }
        return false;
    }
}
