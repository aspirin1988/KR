<?php
$current_cats = get_the_category();
$current_cats=$current_cats[0];
$categories=get_category_by_slug('service');
//print_r(get_category_by_slug('service'));
$args = array(
	'ID'=> 'term_id',
	'type'         => 'post',
	'child_of'     => 0,
	'parent'       => $categories->term_id,
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'taxonomy'     => 'category',
	'pad_counts'   => false,
	// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
);
$categories = get_categories( $args );
//print_r($categories)
?>
<!--начало АККОРДЕОН И ТЕКСТ-->
<div class="container accordion-and-text">
	<div class="row">
		<div class="col-sm-4">
			<!--начало Акконрдеон -->
			<div class="panel-group" id="accordion">
				<?php foreach ($categories as $key => $value ): ?>
					<div class="panel panel-default">
						<div data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$key?>" class="panel-heading">
							<h4 class="panel-title">
								<?=$value->name?>
							</h4>
						</div>
						<div id="collapse<?=$key?>" class="<?php if($current_cats->term_id==$value->term_id) : ?>panel-collapse collapse in<?php else: ?>panel-collapse collapse<?php endif; ?>">
							<div class="panel-body">
								<ul>
									<?php
									$args = array( 'cat'=> $value->term_id ,'numberposts'=>20 , 'order'=>'ASC' );
									$posts=get_posts($args);/* print_r($posts);*/
									foreach ($posts as $value1 ){ ?>
										<li><a href="<?=get_permalink($value1->ID)?>"><?php echo $value1->post_title;?></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="panel-heading">
						<h4 class="panel-title">
							Лазерная шлифовка
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Шлифовка лица</a></li>
								<li><a href="#">Растяжки</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="panel-heading">
						<h4 class="panel-title">
							Фото-Лазерная эпиляция
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Фотоэпиляция</a></li>
								<li><a href="#">Лазерная эпиляция</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="panel-heading">
						<h4 class="panel-title">
							RF Лифтинг
						</h4>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">RF Лифтинг</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse5" class="panel-heading">
						<h4 class="panel-title">
							Антивозрастная косметология
						</h4>
					</div>
					<div id="collapse5" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Биоревитализация</a></li>
								<li><a href="#">Мезотерапия</a></li>
								<li><a href="#">Фотоомоложение</a></li>
								<li><a href="#">Подтяжка нитями</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse6" class="panel-heading">
						<h4 class="panel-title">
							Плазмалифтинг
						</h4>
					</div>
					<div id="collapse6" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Лечение алопеции</a></li>
								<li><a href="#">Омоложение собственной плазмы</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse7" class="panel-heading">
						<h4 class="panel-title">
							Вакуумный лифтинг лица и тела
						</h4>
					</div>
					<div id="collapse7" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Вакуумный лифтинг лица и тела</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse8" class="panel-heading">
						<h4 class="panel-title">
							Диспорт
						</h4>
					</div>
					<div id="collapse8" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Диспорт</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse9" class="panel-heading">
						<h4 class="panel-title">
							Лечение целюлита
						</h4>
					</div>
					<div id="collapse9" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Лечение целюлита</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div data-toggle="collapse" data-parent="#accordion" href="#collapse10" class="panel-heading">
						<h4 class="panel-title">
							Удаление татуировок и татуажа
						</h4>
					</div>
					<div id="collapse10" class="panel-collapse collapse">
						<div class="panel-body">
							<ul>
								<li><a href="#">Удаление татуировок и татуажа</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!--конец Акконрдеон -->
		</div>
		<div class="col-sm-8">
			<h3 class="text-right text-uppercase"><?=get_the_title()?></h3>
			<p><?=get_the_content()?></p>
		</div>
	</div>
</div>
<!--конец АККОРДЕОН И ТЕКСТ-->