<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"> 
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
    <?php $this->beginBody() ?>
	<div class="header header_index">
		<div class="container">
			<div class="row">
                            <div class="logo col-md-6 col-sm-6 col-xs-12"><a href="<?= \yii\helpers\Url::home() ?>">Beard`land</a></div>
				<div class="menu_wrap col-md-6 col-sm-6 col-xs-12">
					<ul class="menu" id="menu">
                        <li><a href="<?= Url::to(['/blog-news/all']) ?> ">Статьи</a></li>
						<li><a class="active" href="<?= \yii\helpers\Url::home() ?>">Главная</a></li>	
					</ul>
				</div>
					
				
			</div>
			<div class="row">
				<div class="header_block col-md-7">
					<p class="top">Добро пожаловать на мой новостной сайт</p>
					<p class="text">Новостной сайт посвященный людям имеющим бороду</p>
					<a href="#unique" class="button">Ознакомится</a>
				</div>	
			</div>
		</div>
	</div>

	<section id="unique" class="unique" >	
		<div class="container">
		<div class="row col-md-12"><h1>Особености</h1></div>
			<div class="row">
				<div class="icons  col-md-4">
					<div class="item k"></div>
					<span>Много полезного</span>
				</div>
				<div class="icons  col-md-4">
					<div class="item s"></div>
					<span>Советы по уходу</span>
				</div>
				<div class="icons  col-md-4">
					<div class="item b"></div>
					<span>Справочкик видов</span>
				</div>
			</div>
		</div>
	</section>

	<section class="info">

	</section>



	<footer>
		<div class="container">
			<div class="row">
			<div class="col-md-3"></div>
				<div class="icons col-md-6">
					<a href="#"><i class='g'></i></a>
					<a href="#"><i class="be"></i></a>
					<a href="#"><i class="f"></i></a>
					<a href="#"><i class="vk"></i></a>
					<a href="#"><i class="tw"></i></a>
					<a href="#"><i class="in"></i></a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</footer>
	
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>