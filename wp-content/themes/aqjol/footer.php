<!--начало Футер-->
<?php get_the_category_by_ID( $cat_ID )?>
<footer class="container">
	<img class="img-responsive" src="<?=get_field('footer_logo',4) ?>" alt="Logo inverted">
	<div class="contacts-footer">
		<h4>Наши контакты:</h4>
		<p>
			<a href="#"><?=get_field('address',4)?></a><br>
			<br>
			<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a>
			<br>
			<a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a>
			<br>
			<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a><br>
			<br>
			<?=get_field('reshim',4)?></p>
	</div>
	<ul class="hidden-sm hidden-xs">
		<?php $menu=wp_get_nav_menu_items('main'); $title=get_post();  foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_post(); if($title->ID==$val->object_id){$class='selected';} ?>
			<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
		<?php }}?>
	</ul>
</footer>
<!--конец Футер-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js	"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory') ?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/lightbox.min.js"></script>
<script src="https://callback.blink.kz/resources/callback/js/mailer.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/slideshow-fx.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/datepicker.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/bower_components/uikit/js/components/timepicker.js"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); }, function(error) {});


</script>
<?=get_field('google',4)?>
<?=get_field('yandex',4)?>
</body>
</html>