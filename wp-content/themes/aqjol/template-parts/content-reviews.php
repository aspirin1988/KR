
<!-- ОТЗЫВЫ -->
<div class="container reviews">
	<h3 class="text-center"><?=get_the_title()?></h3>
	<?php $category=get_category_by_slug('reviews');
	$args = array( 'cat'=> $category->cat_ID ,'numberposts'=>20);
	$categories=get_posts($args);?>
	<?php foreach($categories as $key=>$value) : ?>
	<article class="row">
		<img class="avatar" src="<?=get_the_post_thumbnail_url($value->ID)?>" alt="Ава">
		<div class="review-text">
			<h4><?=$value->post_title?></h4>
			<p>
				<?=$value->post_content?>
			</p></div>
		<p class="date"><?=$value->post_date?></p>
	</article>
	<?php endforeach; ?>


</div>
<!-- конец ОТВЕТЫ -->

