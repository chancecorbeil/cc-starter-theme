<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

      <div class="columns">

        <div class="column is-12 maincontentarea">

          <?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'ccstartertheme' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'ccstartertheme' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

				endwhile; // End of the loop.
				?>

        </div>

      </div>

    </div>
  </section>
  <!-- End: Main Content Area and Sidebar Section -->


</main><!-- #main -->

<?php
get_footer();