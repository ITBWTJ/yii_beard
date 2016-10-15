<?php

namespace app\controllers;

class BlogNewsController extends \yii\web\Controller
{
    public $layout = 'news_beard';

    public function action404()
    {
        return $this->render('404');
    }

    public function actionArticle()
    {
        return $this->render('article');
    }

    public function actionAll()
    {
        return $this->render('all');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
