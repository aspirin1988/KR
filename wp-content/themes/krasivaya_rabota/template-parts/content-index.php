<!--начало ГЛАВНЫЙ БАННЕР-->
<div class="banner-main">
	<div class="container">
		<?php the_field('slug') ?>
	</div>
</div>
<!--начало ГЛАВНЫЙ БАННЕР-->

<!--начало ВИДЫ УСЛУГ-->
<div class="container services-on-main">
	<div class="row">
		<?php $main=explode(',',get_field('main-service',4)); foreach ($main as $value) : ?>
		<div class="col-sm-6 col-md-3">
			<img src="img/index/icon-rodinki.png" alt="Удаление родинок">
			<h4>Удаление родинок</h4>
			<p>Fusce tincidunt, tellus
				eget tristique cursus, orci mi iaculis </p>
			<a href="#">читать всё</a>
		</div>
		<?php endforeach; ?>
		<div class="col-sm-6 col-md-3">
			<img src="img/index/icon-pampiloni.png" alt="Удаление родинок">
			<h4>Удаление папиллом</h4>
			<p>Fusce tincidunt, tellus
				eget tristique cursus, orci mi iaculis </p>
			<a href="#">читать всё</a>
		</div>
		<div class="col-sm-6 col-md-3">
			<img src="img/index/icon-epilation.png" alt="Удаление родинок">
			<h4>Фотоэпиляция</h4>
			<p>Fusce tincidunt, tellus
				eget tristique cursus, orci mi iaculis </p>
			<a href="#">читать всё</a>
		</div>
		<div class="col-sm-6 col-md-3">
			<img src="img/index/icon-lifting.png" alt="Удаление родинок">
			<h4>RF лифтинг</h4>
			<p>Fusce tincidunt, tellus
				eget tristique cursus, orci mi iaculis </p>
			<a href="#">читать всё</a>
		</div>
	</div>
</div>
<!--конец ВИДЫ УСЛУГ-->

<!-- начало АНТИВОЗРАСТНАЯ КОСМЕТОЛОГИЯ-->
<div class="anti-age-cosmetology">
	<div class="container">
		<div class="anti-age-cosmetology__heading">
			<figure></figure>
			<h2>Антивозрастная косметология</h2>
			<figure></figure>
		</div>

		<div class="row">
			<div class="col-md-6 anti-age-cosmetology__section">
				<div class="row">
					<div class="col-sm-7">
						<img src="img/index/anti-age-cosm-mezoterapy.png" alt="">
					</div>
					<div class="col-sm-5 summary">
						<button>Мезотерапия</button>
						<p>Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu
							magna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 anti-age-cosmetology__section">
				<div class="row">
					<div class="col-sm-7">
						<img src="img/index/anti-age-cosm-shlifovka.png" alt="Лазерная шлифовка">
					</div>
					<div class="col-sm-5 summary">
						<button>Лазерная шлифовка</button>
						<p>Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu
							magna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 anti-age-cosmetology__section">
				<div class="row">
					<div class="col-sm-7">
						<img src="img/index/anti-age-cosm-niti.png" alt="Подтяжка нитями">
					</div>
					<div class="col-sm-5 summary">
						<button>Подтяжка нитями</button>
						<p>Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu
							magna.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 anti-age-cosmetology__section">
				<div class="row">
					<div class="col-sm-7">
						<img src="img/index/anti-age-cosm-tatuazh.png" alt="Удаление татуажа">
					</div>
					<div class="col-sm-5 summary">
						<button>Удаление татуажа</button>
						<p>Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit eu
							magna.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- конец АНТИВОЗРАСТНАЯ КОСМЕТОЛОГИЯ-->

<!--начало НЕМНОГО О КРАСИВОЙ РАБОТЕ-->
<div class="container about-on-main">
	<h3><a href="#">НЕМНОГО О «КРАСИВОЙ РАБОТЕ»</a></h3>
	<img class="img-responsive" src="img/doctor.jpg" alt="Доктор">
	<div class="text-block clearfix">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequuntur dolorum earum est odit placeat quam quidem quo recusandae sint ut vitae voluptate voluptatibus! Accusamus aperiam corporis, culpa dignissimos fugit laudantium minima nisi reprehenderit. Aspernatur delectus harum ratione similique tenetur veniam! Aspernatur at ducimus esse magnam modi quod sunt! Cum dolor eligendi enim fugiat nobis optio repellat. Aliquid animi ex expedita numquam provident ratione veritatis voluptatem. Et eum nobis perspiciatis ut. Accusamus accusantium alias debitis dolore ducimus eum excepturi exercitationem facilis fugit id illo laborum magnam necessitatibus neque non nulla numquam, odit optio porro quae qui quo quos ratione sed sequi sunt vel voluptatibus. Atque ipsam mollitia qui quibusdam tempore. Accusamus ad alias aspernatur commodi eligendi exercitationem facilis fugiat laudantium libero nisi odit quibusdam quis ratione suscipit tempora velit? Aliquam assumenda autem ea eos eum non provident quidem rerum sed voluptas! Accusamus aperiam atque aut blanditiis corporis eligendi esse facere hic ipsa molestiae omnis perferendis, placeat provident quos sapiente tempora temporibus unde. Debitis laboriosam minus molestiae velit!</p>
		<a href="#">Читать далее</a>
	</div>
</div>
<!--конец НЕМНОГО О КРАСИВОЙ РАБОТЕ-->