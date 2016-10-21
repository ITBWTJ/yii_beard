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
        $article = Articles::findOne($id);
        $this->view->title = 'Статья';
<<<<<<< HEAD
        return $this->render('article', compact('article'));
=======
        $model = Articles::findOne($id);
        return $this->render('article',compact('model') );
>>>>>>> 73a0dc827bcabe393610ccb6d684ebab0d9818fc
    }

    public function actionAll()
    {
<<<<<<< HEAD
        $posts = Articles::find()->all();
=======
        $model = Articles::find()->all();
>>>>>>> 73a0dc827bcabe393610ccb6d684ebab0d9818fc
        $this->view->title = 'Все статьи';
        return $this->render('all', compact('posts'));
    }

    public function actionSearch()
    {
        return $this->render('search');
    }

}
