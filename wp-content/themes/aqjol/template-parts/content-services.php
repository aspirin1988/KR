
<!-- УСЛУГИ -->
<div class="container services">
	<h3 class="text-center">Услуги</h3>
	<br>

	<?php
	$category=get_category_by_slug('services');
	$args = array( 'cat'=> $category->cat_ID ,'numberposts'=>20);
	$categories=get_posts($args);
	?>

	<div class="row">
		<?php foreach($categories as $key=>$value) : ?>
		<div class="col-sm-4">
			<img class="img-responsive" src="<?=get_the_post_thumbnail_url($value->ID)?>" alt="Описание">
			<a href="<?=get_permalink($value->ID)?>" ><h4><?=$value->post_title?></h4></a>
			<h5>Описание</h5>
			<p><?=$value->post_content?></p>
		</div>
		<?php endforeach; ?>

	</div>
</div>
<!-- конец УСЛУГИ -->
