<?php
<<<<<<< HEAD
	use yii\helpers\Html;
    use yii\helpers\Url;
=======
    use yii\helpers\Url;
    use yii\helpers\Html;
>>>>>>> 73a0dc827bcabe393610ccb6d684ebab0d9818fc
?>

<div class="container">
		<div class="row">
			<div class="top_search .col-md-12">

					<div class="left">
						<span>сортировка</span>
						<select name="" id="">
							<option value="">все</option>
							<option value="">популярное</option>
							<option value="">новое</option>

						</select>
					</div>

					<div class="right">
						<input type="text" name="search" placeholder="Поиск...">
					</div>

			</div>
		</div>
	</div>

	<?php foreach($posts as $post): ?>
	<section class="post">
		<div class="container post1">
			<div class="row">
				<div class="post_top col-md-12">
<<<<<<< HEAD
					<h2><a href="<?= Url::to(['blog-news/article', 'id' => "$post->id"]);?>"><?= $post->name; ?></a></h2>
=======
					<h2><a href="<?= Url::to(['blog-news/article', 'id' => $post->id]); ?>"><?= $post->name; ?></a></h2>
>>>>>>> 73a0dc827bcabe393610ccb6d684ebab0d9818fc
					<p>Опубликовано: <?= $post->date; ?> <span></span>13</p>
					
				</div>
			</div>
			<div class="row">
                            <?= Html::img("@web/images/post_imgs/$post->img", ['class' => 'bg col-md-12', 'width' => '100%'])?>
			</div>
			<div class="post_bottom">
					<div class="left">Источник: <a href="<?= $post->article_url; ?>"><?= $post->article_url; ?></a></div>
					<div class="right"><div class="view"></div>22<div class="like"></div>13</div>
			</div>
		</div>
	</section>
        <?php endforeach; ?>

