<?php
/**
 * The template for displaying the single page for the Custom Post Type: Events
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
  <div class="hero-body" style="background-image: url('<?php the_field('hero_image'); ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <h1 class="title">
        <?php echo get_the_title(); ?>
      </h1>
    </div>
  </div>
</section>
        <!-- Begin: Bulma Hero -->


<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns">

            <div class="column is-12 maincontentarea entry-content">
              <p class="subtitle"><?php the_field('date_range'); ?></p>
              <?php echo get_the_content(); ?>
            </div>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->







	</main><!-- #main -->

<?php
get_footer();
