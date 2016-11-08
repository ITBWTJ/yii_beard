<?php

namespace app\models;

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
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'img' => 'Img',
            'date' => 'Date',
            'article_url' => 'Article Url',
        ];
    }
}
