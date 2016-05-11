
<!-- ГЛАВНЫЙ РАЗДЕЛ -->
<div class="main-section about text-center">
	<div class="container">
		<img class="img-responsive logo-big" src="<?=get_field('logo',4)?>" alt="Большое лого">
		<br>
		<img class="img-responsive main-image" src="<?=get_the_post_thumbnail_url(10)?>" alt="Интерьер">
	</div>
</div>
<!-- конец ГЛАВНЫЙ РАЗДЕЛ -->

<!-- О РЕСТОРАНЕ ТЕКСТ -->
<div class="container about-text-container">
	<div class="row">
		<div class="col-lg-12">
			<h3><?php the_title()?></h3>
			<p><?=get_the_content()?>
			</p></div>
	</div>
</div>
<!-- конец  О РЕСТОРАНЕ ТЕКСТ -->

<!-- КАРТИНКИ О РЕСТОРАНЕ -->
<div class="container pictures-about">
	<div class="row">
		<div class="col-sm-5">
			<img class="img-responsive" src="<?=get_field('dish1')?>" alt="Блюдо">
		</div>
		<div class="col-sm-2">
			<img class="img-responsive" src="<?php bloginfo('template_directory')?>/public/images/east-europe-foods.png" alt="Кухни">
		</div>
		<div class="col-sm-5">
			<img class="img-responsive" src="<?=get_field('dish2')?>" alt="Блюдо">
		</div>
	</div>
</div>
<!-- конец КАРТИНКИ О РЕСТОРАНЕ -->