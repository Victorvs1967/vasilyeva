<?php get_header( ); ?>

<div id="main">
  <div class="main-t">
    <div class="main-b">
      <div class="person-holder">

        <?php 
          $post = the_post([
            'post_type' => 'stuff',
          ]); 
          setup_postdata($post);
        ?>

        <a class="avatar" href="<?php echo home_url('team'); ?>">
          <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_field('title'); ?>">
        </a>
        <div class="about">
          <div class="heading">
            <strong><a href="<?php echo home_url('team'); ?>"><?php the_field('name'); ?></a></strong>
            <span><?php the_field('speciality'); ?><?php ?></span>
          </div>
          <div class="text">
            <p><?php the_field('description'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>