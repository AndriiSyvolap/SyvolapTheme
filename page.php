<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="contentMain">
        <div class="wrapper">
            <?php the_content(); ?>
        </div>
        <?php 
            /* If repeater fields were used, would have done have_rows() while loop to create slides */
            $slides = get_field('swiper_slider');
            if ($slides):
        ?>
        <div class="wrapper slideWrapper">
            <h3>Slides:</h3>
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                  <div class="swiper-slide"><?php echo $slides['text_1']; ?></div>
                  <div class="swiper-slide"><?php echo $slides['text_2']; ?></div>
                  <div class="swiper-slide"><?php echo $slides['text_3']; ?></div>
              </div>
            </div>
        </div>
        <?php endif; ?>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>