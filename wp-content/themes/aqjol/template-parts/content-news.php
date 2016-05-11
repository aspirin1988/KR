<?php
$page=get_option('posts_per_page');
$category=get_category_by_slug('news');
$count_page=ceil($category->category_count/$page);
$offsett_post= $wp_query->query_vars['page']*$page;
$curent_page=$wp_query->query_vars['page'];
$args = array( 'cat'=> $category->cat_ID ,'numberposts'=>$page ,'offset'=>$offsett_post );
$categories=get_posts($args);
?>
<!-- НОВОСТИ -->
<div class="container news">
	<h3 class="text-center"><?php the_title();?></h3>
	<?php foreach($categories as $key=>$value) : ?>

	<article class="row">
		<a href="<?=get_permalink($value->ID)?>"><h3><?=$value->post_title?></h3></a>
		<div class="col-sm-3">
			<img class="img-responsive" src="<?=get_the_post_thumbnail_url($value->ID)?>" alt="Фото к новости">
		</div>
		<div class="col-sm-9">
			<p class="date"><?=$value->post_date?></p>
			<p>
				<?=mb_substr(strip_tags($value->post_content),0,255).'...'?>
			</p>
		</div>
	</article>

	<?php endforeach; ?>
	<?php if ($count_page>1){?>
		<nav class="text-center" >
			<ul class="pagination">
				<?php if ($curent_page>0){?>
					<li><a href="<?php the_permalink()?><?=0?>"><<</a></li>
					<li><a href="<?php the_permalink()?><?=$curent_page-1?>"><</a></li>
				<?php }$activ='active'?>

				<?php $ind=0; if($curent_page>2){$ind=$curent_page-2;}else{$ind=$curent_page;} for($i=$ind;$i<$curent_page+3;$i++) { if ($i<$count_page){ ?>
					<li class="<?php if($i==$curent_page){echo $activ;}?>"><a  href="<?php the_permalink()?><?=$i?>"><?=$i+1?></a></li>
				<?php }} ?>
				<?php if ($curent_page<$count_page-1){ ?>
					<li><a href="<?php the_permalink()?><?=$curent_page+1?>">></a></li>
					<li><a href="<?php the_permalink()?><?=$count_page-1?>">>></a></li>
				<?php }?>
			</ul>
		</nav>
	<?php }?>

</div>
<!-- конец НОВОСТИ -->
