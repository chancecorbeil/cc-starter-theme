<!-- Begin: blog loop for posts -->
<section class="section pageparticlecontainer" id="bulmatemplate7">

  <div class="container pageparticle">
    <div class="columns">
      <div class="column is-12">
        <h2 class="title is-2">Bulma Template 7</h2>
        <p  class="subtitle">Blop loop - 3 cards</p>
      </div>
    </div>
  </div>

  <div class="container pageparticle">
    <div class="columns card has-text-centered">

      <?php wp_reset_query(); ?>

      <?php
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $loop = new WP_Query( $args ); 
  ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post();?>

      <div class=" column is-4">
        <div class="card-image">
          <figure class="image">
            <?php echo get_the_post_thumbnail(); ?>
          </figure>
        </div>
        <div class="card-content">

          <div class="content">
            <h2 class="title is-4"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            
                                <!-- Subtitle -->
                                <?php if( get_field('subtitle') ): ?>
                                  <p class="subtitle"><?php the_field('subtitle'); ?></p>
                    <?php endif; ?>

          </div>
        </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_query(); ?>

    </div>
  </div>

</section>
<!-- End: blog loop for posts -->