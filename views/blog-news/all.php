<?php
	use yii\helpers\Html;
    use yii\helpers\Url;
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
					<h2><a href="<?= Url::to(['blog-news/article', 'id' => "$post->id"]);?>"><?= $post->name; ?></a></h2>
					<p>Опубликовано: <?= $post->date; ?> <span></span>13</p>
					
				</div>
			</div>
			<div class="row">
				<img width="100%" src="<?= $post->img; ?>" class="bg col-md-12">
			</div>
			<div class="post_bottom">
					<div class="left">Источник: <a href="<?= $post->article_url; ?>"><?= $post->article_url; ?></a></div>
					<div class="right"><div class="view"></div>22<div class="like"></div>13</div>
			</div>
		</div>
	</section>
        <?php endforeach; ?>


