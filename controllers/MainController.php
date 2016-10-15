<?php

namespace app\controllers;

class MainController extends \yii\web\Controller
{
    public $layout = 'main_beard';
    public function actionIndex()
    {
        return $this->render('index');
    }

}
