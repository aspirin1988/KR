<?php
?>

<div class="container news">
    <h3 class="text-center"><?=the_title()?></h3>
    <article class="row">
        <div class="col-sm-3">
          <img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" alt="Фото к новости">
            <?php for($i=0; $i<=9; $i++): if (get_field('img'.$i)):?>
                <img class="img-responsive" src="<?=get_field('img'.$i)?>" alt="">
            <?php endif; endfor; ?>
        </div>
        <div class="col-sm-9">
          <p class="date"><?php the_date() ?></p>
          <p>
              <?php the_content()?>
          </p>
        </div>
      </article>
    </div>