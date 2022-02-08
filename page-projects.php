<?php get_header(); ?>

<div id="main">
  <div class="main-t">
    <div class="main-b">
      <div id="visual-holder">
        <ul class="image-list">
        <?php
          global $post;

          $myprojects = get_posts([ 
            'numberposts' => 10,
            'post_type' => 'projects',
          ]);

          if( $myprojects ){
            foreach( $myprojects as $post ){
              setup_postdata( $post );
              ?>

              <li>
                <a href="<?php echo get_template_directory_uri(); ?>/<?php the_field('link'); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="image"></a>
                <div class="<?php the_field('title'); ?>">
                  <strong><?php the_title(); ?></strong>
                  <?php the_field('description'); ?>
                </div>
                <div class="mask"></div>
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

<?php get_footer(); ?>
