<?php get_header(); ?>

<div id="main">
  <div class="main-t">
    <div class="main-b">
      <div class="team-holder">
        <div class="row">

        <?php
          global $post;

          $mystuff = get_posts([ 
            'numberposts' => 6,
            'post_type' => 'stuff',
          ]);

          if( $mystuff ){
            foreach( $mystuff as $post ){
              setup_postdata( $post );
              ?>
              
              <div class="box <?php the_field('position'); ?>">
                <a class="avatar" href="<?php echo home_url('team-advance'); ?>">
                  <img class="on" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_field('title'); ?>">
                  <img class="off" src="<?php the_field('shadow_img'); ?>" alt="<?php the_field('title'); ?>">
                </a>
                <div class="about">
                  <strong><a href="<?php echo home_url('team-advance'); ?>"><?php the_field('name'); ?></a></strong>
                  <span><?php the_field('speciality'); ?></span>
                </div>
              </div>

            <?php 
            }
          } else {
            // Постов не найдено
          }
          wp_reset_postdata(); // Сбрасываем $post
        ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
