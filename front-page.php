<?php
/**
 * The home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <h1 class="title">CC Starter Theme</h1>
        <div class="subtitle">Below are instructions on using the theme.</div>
      </div>
    </div>
  </section>
  <!-- Begin: Bulma Hero -->

  <!-- Begin: documentation -->
  <section class="section">
    <div class="container">

      <div class="columns is-variable">

        <div class="column is-12 maincontentarea">

          <p>This is the front-page.php template.</p>

          <div class="title is-2">Documentation</div>

          <p>This theme can be a parent theme or a child theme.</p>

          <div class="title is-3">CSS and SASS</div>

          <p>This theme uses SASS. The style.scss file must be compiled into style.css. Both files are in the root direcory of the theme.</p>
          <p>The color and font variables are in _variables.scss located in the /sass directory.</p>

          <div class="title is-3">Includes</div>

          <ul>
          <li>Bulma</li>
          <li>XXXXXX</li>
</ul>




<div class="title is-2">Links</div>

<ul>
<li><a href="<?php echo get_home_url(); ?>/theme-demo/">Theme Demo</a></li>
<li><a href="<?php echo get_home_url(); ?>/advanced-custom-fields/">Advanced Custom Fields</a></li>
</ul>




          <div class="title is-2">Coming soon to the documentation</div>

          <ul>
          <li>Download links for ACF import files and similar downloadable files.</li>
          <li>Includes list</li>
</ul>

        </div>

      </div>

    </div>
  </section>
  <!-- End: documentation -->
  
  

</main><!-- #main -->

<?php
get_footer();