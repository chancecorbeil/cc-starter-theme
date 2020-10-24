<?php
/**
 * The template for displaying the Archive for the Custom Post Type: Event
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">


  <!-- Begin: Bulma Hero -->
  <section class="hero is-primary is-medium">
    <div class="hero-body"
      style="background-image: url('<?php the_field('hero_image'); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <h1 class="title">
          Events
        </h1>
      </div>
    </div>
  </section>
  <!-- Begin: Bulma Hero -->


  <!-- Begin: Main Content Area and Sidebar Section -->
  <section class="section">
    <div class="container">

      <div class="columns is-variable">

        <div class="column is-9 maincontentarea">

          <?php wp_reset_query(); ?>

          <?php
              $args = array(
                'posts_per_page' => -1,
                'post_type' => array( 'dev-journal' ),
                'orderby' => 'date',
                'order' => 'DESC',
              );
              $loop = new WP_Query( $args ); 
              ?>

          <?php while ( $loop->have_posts() ) : $loop->the_post();?>

          <div class="pageparticle newsarticle">
            <p class="subtitle"><?php the_field('date_range'); ?></p>
            <h2 class="title is-2"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            <div class="newscontent"><?php echo get_the_excerpt(); ?></div>
            <a class="button is-primary" href="<?php echo get_the_permalink(); ?>">Learn More</a>
          </div>

          <?php endwhile; ?>
          <?php wp_reset_query(); ?>

        </div>

        <?php get_template_part( 'sidebar' );           // sidebar (sidebar.php) ?>

      </div>

    </div>
  </section>
  <!-- End: Main Content Area and Sidebar Section -->


</main><!-- #main -->

<?php
get_footer();