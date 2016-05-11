
<!-- ГЛАВНЫЙ РАЗДЕЛ -->
<div class="main-section text-center">
	<div class="container">

		<h2 class="text-uppercase">Зал торжеств / Ресторан / Кафе</h2>
		<img class="img-responsive main-image" src="<?=get_the_post_thumbnail_url(10)?>" alt="Интерьер">
		<a href="<?php the_permalink(10) ?>" class="gen-button" type="button" >Перейти в галерею</a>
	</div>
</div>
<!-- конец ГЛАВНЫЙ РАЗДЕЛ -->

<!-- О РЕСТОРАНЕ -->
<div class="container about-on-mainpage">
	<div class="row">
		<div class="col-sm-4 text-center">
			<img class="img-responsive" src="<?=get_field('logo')?>" alt="Лого">
			<h3>О ресторане</h3>
		</div>
		<div class="col-sm-8">
			<img class="img-responsive" src="<?=get_the_post_thumbnail_url(6)?>" alt="Интерьер">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10">
			<p>
			<?php $about=get_post(6); echo mb_substr($about->post_content,0,512); ?>
			</p>
			<a href="<?php the_permalink(6) ?>" class="gen-button" type="button" >Читать далее</a>
		</div>
		<div class="col-sm-2">
			<img class="img-responsive" src="<?php bloginfo('template_directory') ?>/public/images/east-europe-foods.png" alt="Виды кухонь">
		</div>
	</div>
</div>
<!-- конец  О РЕСТОРАНЕ -->

<!-- НОВОСТИ -->
<div class="container news-on-mainpage text-center">
	<div class="row">
		<?php $category=get_category_by_slug('news');
		$args = array( 'cat'=> $category->term_id ,'numberposts'=>1 );
		$categories=get_posts($args);
		?>
		<div class="col-sm-8">
			<h3><?php echo $categories[0]->post_title ?></h3>
			<p>
				<?php echo mb_substr($categories[0]->post_content,0,580) ?>
			</p>
			<a href="<?php the_permalink(8)?>">читать далее...</a>
		</div>
		<div class="col-sm-4 hidden-xs">
		</div>
	</div>
</div>
<!-- конец НОВОСТИ -->

<!-- ОБРАТНАЯ СВЯЗЬ -->
<form class="container feedback-on-main blink-mailer">
	<input style="display: none" type="text" name="title" value="ОБРАТНАЯ СВЯЗЬ">
	<hr>
	<div class="line"></div>
	<h3 class="text-center">Обратная связь</h3>
	<div class="row">
		<div class="col-sm-3">
			<label for="name">Имя</label>
			<input type="text" id="name" name="name">
		</div>
		<div class="col-sm-3">
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email">
		</div>
		<div class="col-sm-3">
			<label for="phoneNumber">Телефон</label>
			<input type="tel" id="phoneNumber" name="phoneNumber">
		</div>
		<div class="col-sm-3">
			<p></p>
			<input type="submit" value="Отправить">
		</div>
	</div>
	<br>
	<p class="text-center">* заполните все поля и мы свяжeмся с Вами</p>
</form>
<!-- конец ОБРАТНАЯ СВЯЗЬ -->