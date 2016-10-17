<?php

namespace app\controllers;

use app\models\Articles;

class BlogNewsController extends \yii\web\Controller
{
    public $layout = 'news_beard';

    public function action404()
    {
        return $this->render('404');
    }

    public function actionArticle($id)
    {
        $this->view->title = 'Статья';
        $model = Articles::findOne($id);
        return $this->render('article',compact('model') );
    }

    public function actionAll()
    {
        $model = Articles::find()->all();
        $this->view->title = 'Все статьи';
        return $this->render('all', compact('model'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
