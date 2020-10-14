<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
    <div class="hero-body">
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

      <div class="columns is-variable">

        <div class="column is-12 maincontentarea">

          <?php the_content(); ?>

        </div>

      </div>

    </div>
  </section>
  <!-- End: Main Content Area and Sidebar Section -->

</main><!-- #main -->

<?php
get_footer();