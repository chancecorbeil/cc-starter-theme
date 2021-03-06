<?php
/**
 * The template for displaying the blog archive - nope
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
        Blog
      </h1>
    </div>
  </div>
</section>
		<!-- Begin: Bulma Hero -->
		
<!-- Begin: Main Content Area and Sidebar Section -->
<section class="section">
    <div class="container">

        <div class="columns is-variable is-8">

            <div class="column is-9 maincontentarea newsloop">

				<?php if ( have_posts() ) : ?>

                        <div class="pageparticle newsarticle">
                            <p class="subtitle"><?php the_field('source_and_date'); ?></p>
							<h2 class="title is-2"><a href="<?php the_field('article-url'); ?>"><?php the_archive_title(); ?></a></h2>
                            <div class="newscontent"><?php the_archive_description(); ?></div>
                            <a class="button is-primary" href="<?php the_field('article-url'); ?>">Learn More</a>                          
                        </div>

						<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

            </div>

            <?php get_template_part( 'sidebar' );           // sidebar (sidebar.php) ?>

        </div>

    </div>
</section>
<!-- End: Main Content Area and Sidebar Section -->







	</main><!-- #main -->

<?php
get_footer();
