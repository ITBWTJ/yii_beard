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
 * @property string $article_url
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text', 'img', 'article_url'], 'required'],
            [['text'], 'string'],
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
            'article_url' => 'Article Url',
        ];
    }
}
