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



<!-- Begin: Header Section -->
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
		<!-- End: Header Section -->
		



	</header><!-- #masthead -->
