<!-- Section 10 -->




<!-- Header -->

<!-- Announcement Bar -->
<?php if( get_field('announcement_bar', 'option') ): ?>

<div class="has-background-grey-dark has-text-white has-text-centered is-size-7 announcement">
    <?php the_field('announcement_bar', 'option'); ?>
</div>

<?php endif; ?>


<section class="section shortsection has-background-primary" id="bulmatemplate10">
    <div class="container wide-container">






        <div class="columns is-vcentered">
            <div class="column is-3">
                <a class="title is-3 has-text-white">Chance Corbeil</a>
            </div>

            <div class="column is-6 has-text-centered">

                <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">

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

            <div class="column is-3 has-text-right">
                <div class="button has-background-accent " onclick="modalContact()">Contact</div>
            </div>

        </div>
    </div>
</section>
<!-- Header -->










<!-- Home Hero -->
<section class="section hero is-primary herowithhomebg">
    <div class="hero-body">
        <div class="container wide-container">

            <div class="columns">

                <div class="column is-4">
                    <h2 class="title is-2">I build websites</h2>
                    <p>I specialize in WordPress development.<br>Building themes, structuring websites, and helping
                        clients through their projects from beginning to end.</p>
                    <p>For a bright future, I study Jamstack.</p>
                </div>

                <div class="column is-7">
                </div>

            </div>

        </div>
    </div>


</section>
<!-- Home Hero -->


<!-- Website Portfolio -->
<section class="section">
    <div class="container wide-container">

        <div class="columns">

            <?php wp_reset_query(); ?>

            <?php
$args = array(
'posts_per_page' => 4,
'post_type' => array( 'websites' ),
'orderby' => 'date',
'order' => 'DESC',
);
$loop = new WP_Query( $args ); 
?>

            <?php while ( $loop->have_posts() ) : $loop->the_post();?>

            <div class="column is-3">
                <div class="browser tiny">
                    <div class="title-bar">
                        <div class="btns">
                            <div class="close"></div>
                            <div class="min"></div>
                            <div class="max"></div>
                        </div>
                        <div class="location-bar"></div>
                    </div>
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
                <!-- <h3 class="title is-5">Night Flowers</h3> -->
                <!-- <div class="subtitle is-6">A short description that assists the title</div> -->
            </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>

        </div>

        
        <div class="column is-12 has-text-centered">
            <h2 class="button is-accent">Instagram Link</h2>
        </div>
    </div>

</section>
<!-- Website Portfolio -->




<!-- Testimonials -->
<section class="section has-background-lightorange">
    <div class="container">

        <div class="columns testimonial">
            <div class="column is-3">
                <div class="image"><?php the_custom_logo(); ?></div>
            </div>
            <div class="column is-9">
                <div class="testimonialquote is-size-4 is-family-secondary"><span
                        class="has-text-secondary quotemarks">"</span>Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
                    Nullam condimentum luctus turpis.<span class="has-text-secondary quotemarks">"</span></div>
                <div class="has-text-grey-dark"><span class="has-text-weight-semibold">Gary Placebo</span> from the Med
                    Staff Cult</div>
            </div>
        </div>

    </div>
</section>
<!-- Testimonials -->








<!-- Tech Stack -->
<section class="section has-background-grey-dark has-text-white-ter" id="mytechstack">
    <div class="container wide-container">
        <div class="columns">

            <div class="column is-4">
                <h2 class="title is-2 has-text-white-ter">Tech Stack</h2>
                <p>Lorem ipsum re et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Consectetur adipiscing elit, sed do eiusmim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip.</p>
            </div>

            <div class="column is-8">

                <div class="columns">
                    <div class="column is-offset-2 is-size-7">
                        <span class="has-text-weight-semibold">Learning</span><br>
                        <span>xJavascript</span><br>
                        <span>CxSS</span><br>
                        <span>HTxML</span><br>
                        <span>SASxS</span><br>
                        <span>PHPx</span>
                    </div>

                    <div class="column is-size-7">
                        <span class="has-text-weight-semibold">Languages</span><br>
                        <span>Javascript</span><br>
                        <span>CSS</span><br>
                        <span>HTML</span><br>
                        <span>SASS</span><br>
                        <span>PHP</span>
                    </div>

                    <div class="column is-size-7">
                        <span class="has-text-weight-semibold">Frameworks +<br>Libraries</span><br>
                        <span>React</span><br>
                        <span>Bootstrap</span><br>
                        <span>Bulma</span><br>
                        <span>node.js</span><br>
                        <span>anime.js</span><br>
                        <span>granim.js</span><br>
                        <span>velocity.js</span><br>
                    </div>

                    <div class="column is-size-7">
                        <span class="has-text-weight-semibold">Tools</span><br>
                        <span>Github</span><br>
                        <span>Slack</span><br>
                        <span>VS Code</span><br>
                        <span>WordPress</span><br>
                        <span>WooCommerce</span><br>
                        <span>cPanel</span><br>
                        <span>CodeKit</span>
                    </div>

                    <div class="column is-size-7">
                        <span class="has-text-weight-semibold">Skills</span><br>
                        <span>Web development</span><br>
                        <span>Responsive design</span><br>
                        <span>Ecommerce</span><br>
                        <span>SEO</span><br>
                        <span>UX/UI</span><br>
                        <span>Content management</span><br>
                        <span>Page speed</span>
                    </div>

                </div>

            </div>
        </div>
</section>
<!-- Tech Stack -->

<!-- Section 10 -->