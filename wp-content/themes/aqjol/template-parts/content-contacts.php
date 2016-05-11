
<!-- КОНТАКТЫ -->
<div class="container contacts">
	<h3 class="text-center"><?=get_the_title()?></h3>
	<br>
	<?php the_field('map') ?>
	<div class="row">
		<div class="col-sm-11 col-sm-offset-1">
			<h3>Наши контакты:</h3>

			<p><a><?=get_field('address',4)?></a></p>

			<p><a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a></p>
			<p><a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a></p>

			<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>

			<h3>График работы:</h3>

			<p><?=get_field('reshim',4)?></p>
		</div>
	</div>
</div>
<!-- конец КОНТАКТЫ -->