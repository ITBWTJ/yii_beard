<?php

namespace app\controllers;

class ArtilcleController extends \yii\web\Controller
{
    public function action404()
    {
        return $this->render('404');
    }

    public function actionArticle()
    {
        return $this->render('article');
    }

    public function actionNews()
    {
        return $this->render('news');
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
