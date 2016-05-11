
<!-- ГЛАВНЫЙ РАЗДЕЛ -->
<div class="main-section gallery text-center">
	<div class="container">
		<h3 class="center-text"><?=the_title()?></h3>
		<br>
		<img class="img-responsive main-image" src="<?=get_the_post_thumbnail_url()?>" alt="Интерьер">
		<div class="link-captions">
			<?php $gallery=get_galls(); foreach($gallery as $value):?>
			<p class="<?php if (!$key) echo'selected';?>" ><a href="#<?=$value['gallerey']?>" data-toggle="tab"><?=$value['gallerey']?></a></p>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- конец ГЛАВНЫЙ РАЗДЕЛ -->

<!-- Tab panes -->
<div class="tab-content">
	<?php foreach($gallery as $key=>$value):?>
	<div class="tab-pane <?php if (!$key) echo'active';?> " id="<?=$value['gallerey']?>">
		<div class="container heading-and-breadcrumbs">
			<h2><?=$value['gallerey']?></h2>
			<p>
				<span><a href="/">Главная</a></span> >
				<span><a href="<?php the_permalink() ?>"><?php the_title() ?></a></span> >
				<span><a class="gallery" href="#">Зал торжеств</a></span>
			</p>
		</div>
		<div class="container photolist">
		<?php $image=get_gall($value['gallerey']); foreach($image as $key1=>$value1):?>
			<div class="col-sm-4">
				<a href="<?=$value1['path']?>" data-uk-lightbox="{group:'<?php echo $value['gallerey'];?>'}" title="<?=$value1['img_title'];?>"><img src="<?=$value1['path']?>" alt=""></a>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php endforeach; ?>
</div>

