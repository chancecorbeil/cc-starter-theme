    <section class="section pageparticlecontainer"  id="bulmaexample4">
    <div class="container pageparticle">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2">Bulma Example 4</h2>
        </div>
      </div>
      
      <div class="columns">

        <div class="column is-8">
          <h2 class="title is-3">Here is a title</h2>
          <p class="subtitle">Subtitlen goes here</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
            Nullam condimentum luctus turpis.</p>
          <p>Consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus
            turpis.</p>
          <a class="button is-warning" href="#anchorlink1">Anchor Link 1</a>
        </div>

        <div class="column is-4">
          <figure class="image">
          <img src="//via.placeholder.com/500/">
          </figure>
        </div>

      </div>

    </div>

    <div class="container pageparticle"> 
      <div class="columns">

        <div class="column is-8">
          <h2 class="title is-3">Here is a title</h2>
          <p class="subtitle">Subtitlen goes here</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
            Nullam condimentum luctus turpis.</p>
          <p>Consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus
            turpis.</p>
          <a class="button is-warning" href="#anchorlink1">Anchor Link 1</a>
        </div>

        <div class="column is-4">
          <figure class="image">
          <img src="//via.placeholder.com/500/">
          </figure>
        </div>

      </div>
    </div>

    <div class="container pageparticle"> 
      <div class="columns">

        <div class="column is-8">
          <h2 class="title is-3">Here is a title</h2>
          <p class="subtitle">Subtitlen goes here</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
            Nullam condimentum luctus turpis.</p>
          <p>Consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus
            turpis.</p>
          <a class="button is-warning" href="#anchorlink1">Anchor Link 1</a>
        </div>

        <div class="column is-4">
          <figure class="image">
          <img src="//via.placeholder.com/500/">
          </figure>
        </div>

      </div>
    </div>

    <div class="container pageparticle"> 
      <div class="columns">

        <div class="column is-8 notification is-primary">
          <h2 class="title is-3">Here is a title</h2>
          <p class="subtitle">Subtitlen goes here</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
            Nullam condimentum luctus turpis.</p>
          <p>Consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus
            turpis.</p>
          <a class="button is-warning" href="#anchorlink1">Anchor Link 1</a>
        </div>

        <div class="column is-4">
          <figure class="image">
          <img src="//via.placeholder.com/500/">
          </figure>
        </div>

      </div>
    </div>

  </section>








  <!-- Begin: blog loop for custom post type -->
  <section class="section pageparticlecontainer">


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
        <h2 class="title is-2">Blop loop here</h2>
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
      <h2 class="title is-2">Blop loop here</h2>
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



