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

  <section class="section">
    <div class="container">

      <div class="columns">

        <div class="column is-12 maincontentarea entry-content">

          <h1 class="title">
            <?php echo get_the_title(); ?>
          </h1>

          <?php if( get_field('subtitle') ): ?>
          <p class="subtitle"><?php the_field('subtitle'); ?></p>
          <?php endif; ?>

          <?php echo get_the_content(); ?>
        </div>

      </div>

    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();