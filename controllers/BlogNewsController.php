<?php

namespace app\controllers;

use Yii;
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

        return $this->render('article', compact('article'));

    }

    public function actionAll()
    {

        $posts = Articles::find()->all();

        $this->view->title = 'Все статьи';
        return $this->render('all', compact('posts'));
    }

    public function actionSearch()
    {
        $s = Yii::$app->request->get('str');
        $query = Articles::find()->where(['like', 'text', $s]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('posts'));
    }

}
