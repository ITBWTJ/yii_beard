<?php 
    use yii\helpers\Html;
?>
<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="top_search .col-md-12">

                <div class="left">
                    <p>статьи</p>
                </div>

                <div class="right">
                    <input type="text" name="search" placeholder="Поиск...">
                </div>

            </div>
        </div>
    </div>
</div>

<section class="article">
    <div class="container art_bg">

        <div class="row">
            <h2><?= $model->name ?></h2>
        </div>
        <div class="row">
            <?= Html::img("@web/images/post_imgs/$model->img", ['alt' => 'Все о бороде', 'class' => 'bg col-md-12']); ?>
        </div>
        <div class="top_line"></div>
        <div class="row">
            <div class="post col-md-12 ">
                <?= $model->text?>
            </div>

        </div>
    </div>
</section>


<section class="s_bot">
    <div class="container">
        <div class="row">
            <div class="art_bot">
                <div class="left">
                    <p>Источник: <a href="<?= $model->article_url; ?>"> <?= $model->article_url; ?></a></p>
                </div>
                <div class="right">	

                </div>
            </div>
        </div>
    </div>
</section>