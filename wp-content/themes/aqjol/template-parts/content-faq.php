
<!-- РАСПЛЫВЧАТАЯ КАРТИНКА -->
<div class="container image-faq">
	<img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="Вопрос-ответ">
</div>
<!-- конец РАСПЛЫВЧАТАЯ КАРТИНКА -->

<!-- ВОПРОСЫ И ОТВЕТЫ -->
<div class="container faq">
	<h3 class="text-center"><?=get_the_title()?></h3>
	<?php $category=get_category_by_slug('faq');
	$args = array( 'cat'=> $category->cat_ID ,'numberposts'=>20);
	$categories=get_posts($args);?>
	<?php foreach($categories as $key=>$value) : ?>
	<article>
		<p class="question">Вопрос: <?=$value->post_title?></p>
		<p class="answer">Ответ: <?=$value->post_content?></p>
	</article>
	<?php endforeach; ?>

</div>
<!-- конец ВОПРОСЫ И ОТВЕТЫ -->
