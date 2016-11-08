<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Articles */


$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->title = 'Просмотр статьи';
?>
<div class="articles-view">
    
    <h1><?= Html::encode($model->name) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить статью?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $img = $model->getImage(); ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'text:ntext',
            [
                'attribute' => 'image',
                'value' => "<img src='{$img->getUrl('x100')}'>",
                'format' => 'html',
            ],
            'date',
            'article_url:url',
        ],
    ]) ?>

</div>
