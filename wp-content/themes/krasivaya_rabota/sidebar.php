<?php
$current_cats = get_the_category();
$current_cats=$current_cats[0];
$args = array( 'cat'=> $current_cats->term_id ,'numberposts'=>20 , 'order'=>'ASC' );

$posts=get_posts($args);/* print_r($posts);*/
if(!get_the_content()){$post=$posts[0];}
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
			</div>
			<!--конец Акконрдеон -->
		</div>
		<div class="col-sm-8 text-center ">
			<h3 class="text-right text-uppercase"><?=get_the_title()?></h3>
			<img src="<?=get_the_post_thumbnail_url() ?>" >
			<p><?php if(!get_the_content()){echo $post->post_content;} else{ echo get_the_content();}?></p>
		</div>
	</div>
</div>
<!--конец АККОРДЕОН И ТЕКСТ-->