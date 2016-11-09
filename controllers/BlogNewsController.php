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
        $cache = Yii::$app->cache;
        $posts = $cache->get('cache-articles');
        if(!$posts)
        {
            $posts = Articles::find()->all();
            $cache->add('cache-articles', $posts , 300 );
        }
        $this->view->title = 'Все статьи';

        return $this->render('all', compact('posts'));
    }

    public function actionSearch()
    {
        $str = Yii::$app->request->get('str');
        $query = Articles::find()->where(['like', 'text', $str]);
        $posts = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('posts', 'str'));
    }

}
