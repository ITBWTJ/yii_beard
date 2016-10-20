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
<body class="bg">
    <?php $this->beginBody() ?>
	<div class="header header_news">
		<div class="container">
			<div class="row">
				<div class="logo col-md-6 col-sm-6 col-xs-12"><a href="<?= \yii\helpers\Url::home() ?>">Beard`land</a></div>
				<div class="menu_wrap col-md-6 col-sm-6 col-xs-12">
					<ul class="menu" id="menu">
                                                                                     
                                                <li><a href="<?= Url::to(['/admin/post/create']) ?>">Добавить</a></li>
                                                <li><a href="<?= Url::to(['/admin/post/index']) ?>">Статьи</a></li> 
						<li><a href="<?= \yii\helpers\Url::home() ?>">Главная</a></li>	
					</ul>
				</div>
				
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="title_art"><h1><?= Html::encode($this->title) ?></h1></div>
			</div>
		</div>
		
	</div>

    <div class="container" />
        <?= $content ?>
    </div>
	


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