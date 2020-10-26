<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CC_Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
  <!-- Google Fonts --><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" id="cc-starter-theme-style-css" href="<?php echo get_site_url(); ?>/wp-content/themes/cc-starter-theme/sass/bulma/bulma.css" media="all">-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cc-starter-theme' ); ?></a>

	<header id="masthead" class="site-header">



<!-- Javascript for menu toggle -->

<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

// Check if there are any navbar burgers
if ($navbarBurgers.length > 0) {

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
}

});
</script>

    
    


<!-- Header Template 1-->

    <?php 
if( get_field('select_header_template', 'option') == 'headertemplate1' ) {
?>

<section class="section headersection">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->
                

                    <button class="button navbar-burger" data-target="primary-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            </div>

    <div id="navbarBasicExample" class="navbar-menu">
          

<?php
    wp_nav_menu( array(
      'theme_location'    => 'primary',
      'depth'             => 2,
      'container'         => false,
      // 'items_wrap'        => 'div',
      'menu_class'        => 'navbar-menu, navbar-end',
      'menu_id'           => 'primary-menu',
      'after'             => "</div>",
      'walker'            => new Navwalker())
  );
        ?>

    </div>
    </nav>
    </div>
    
</section>
    
    <?php
}?>
<!-- Header Template 1-->


<!-- Header Template 2 -->
<?php if( get_field('select_header_template', 'option') == 'headertemplate2' ) {
?>
<!-- Announcement Bar -->
<?php if( get_field('announcement_bar', 'option') ): ?>

<div class="has-background-secondary has-text-white has-text-centered is-size-7 announcement">
    <?php the_field('announcement_bar', 'option'); ?>
</div>

<?php endif; ?>


<section class="section shortsection has-background-white-ter" id="bulmatemplate10">
    <div class="container wide-container">

        <div class="columns is-vcentered">
            <div class="column is-6 logocontainer">
                <a class="title is-3 has-text-primary" href="<?php echo get_site_url() ?>">Chance Corbeil</a>
                <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="" width="18" height="18"
                    class="starlogo" />

            </div>

            <div class="column is-6 headermenucontainer">
            <a class="button has-background-secondary" href="<?php echo get_site_url() ?>/resume">Resume</a>
                    <a class="button has-background-primary "
                    href="mailto:hello@chancecorbeil.com?subject=Hi Chance!">Contact</a>
            </div>

        </div>
    </div>
</section>
<!-- Header -->
<?php
}?>
<!-- Header Template  2-->









	</header><!-- #masthead -->
    