<!-- Begin: blog loop for custom post type -->
  <section class="section pageparticlecontainer"  id="bulmatemplate4">
    <div class="container pageparticle">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2">Bulma Template 4</h2>
        </div>
      </div>


  <?php wp_reset_query(); ?>

<?php
    $args = array(
      'posts_per_page' => -1,
      'post_type' => array( 'examples' ),
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $loop = new WP_Query( $args ); 
    ?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>


    <div class="container pageparticle">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2">Custom Post Type Here</h2>
        </div>
      </div>
      
      <div class="columns">

        <div class="column is-8">
          <h2 class="title is-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <p><?php echo get_the_excerpt(); ?></p>
          <a class="button is-warning" href="<?php echo get_the_permalink(); ?>">Link</a>
        </div>

        <div class="column is-4">
          <figure class="image">
          <?php echo get_the_post_thumbnail(); ?>
          </figure>
        </div>

      </div>

    </div>

    <?php endwhile; ?>
          <?php wp_reset_query(); ?>

  </section>
    <!-- End: blog loop for custom post type -->










      <!-- Begin: blog loop for posts -->
  <section class="section pageparticlecontainer">

  <div class="container pageparticle">
    <div class="columns">
      <div class="column is-12">
        <h2 class="title is-2">Blop loop</h2>
      </div>
    </div>
 </div>

<?php wp_reset_query(); ?>

<?php
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $loop = new WP_Query( $args ); 
  ?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

    <div class="container pageparticle">
    <div class="columns">

      <div class="column is-8">
        <h2 class="title is-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
        <a class="button is-warning" href="<?php echo get_the_permalink(); ?>">Link</a>
      </div>

      <div class="column is-4">
        <figure class="image">
        <?php echo get_the_post_thumbnail(); ?>
        </figure>
      </div>

    </div>

  </div>

  <?php endwhile; ?>
        <?php wp_reset_query(); ?>

</section>
  <!-- End: blog loop for posts -->












      <!-- Begin: blog loop for posts -->
      <section class="section pageparticlecontainer withdividingline">

<div class="container pageparticle">
  <div class="columns">
    <div class="column is-12">
      <h2 class="title is-2">Blop loop with class .withdividingline</h2>
    </div>
  </div>
</div>

<?php wp_reset_query(); ?>

<?php
$args = array(
  'posts_per_page' => -1,
  'post_type' => 'post',
  'orderby' => 'date',
  'order' => 'DESC',
);
$loop = new WP_Query( $args ); 
?>

<?php while ( $loop->have_posts() ) : $loop->the_post();?>

  <div class="container pageparticle">
  <div class="columns">

    <div class="column is-8">
      <h2 class="title is-3"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
      <p><?php echo get_the_excerpt(); ?></p>
      <a class="button is-warning" href="<?php echo get_the_permalink(); ?>">Link</a>
    </div>

    <div class="column is-4">
      <figure class="image">
      <?php echo get_the_post_thumbnail(); ?>
      </figure>
    </div>

  </div>

</div>

<?php endwhile; ?>
      <?php wp_reset_query(); ?>

</section>
<!-- End: blog loop for posts -->



