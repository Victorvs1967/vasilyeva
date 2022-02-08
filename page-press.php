<?php get_header(); ?>

<div id="main">
  <div class="main-t">
    <div class="main-b">
      <div class="container">
        <div class="container-holder">
          <ul class="press-list">

          <?php
            global $post;

            $mypress = get_posts([ 
              'numberposts' => 10,
              'post_type' => 'press',
            ]);

            if( $mypress ){
              foreach( $mypress as $post ){
                setup_postdata( $post );
                ?>

                <li>
                  <a href="<?php echo home_url('press'); ?>/#">
                    <img class="on" src="<?php the_field('on_image'); ?>" alt="image">
                    <img class="off" src="<?php the_field('off_image'); ?>" alt="image">
                  </a>
                  <div class="press-info">
                    <div class="info-frame">
                      <a class="image-close btn-close" href="<?php echo home_url('press'); ?>/#"><img src="<?php the_post_thumbnail_url(); ?>" alt="image"></a>
                      <div class="info-text">
                        <p><?php the_field('name'); ?></p>
                        <p><?php the_field('date'); ?></p>
                      </div>
                    </div>
                  </div>
                </li>

              <?php 
              }
            } else {
              // Постов не найдено
            }
            wp_reset_postdata(); // Сбрасываем $post
          ?>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
