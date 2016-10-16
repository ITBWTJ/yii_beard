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

    public function actionArticle()
    {
        $this->view->title = 'Статья';
        return $this->render('article');
    }

    public function actionAll()
    {
        $model = new Articles();
        $this->view->title = 'Все статьи';
        return $this->render('all', compact('model'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
