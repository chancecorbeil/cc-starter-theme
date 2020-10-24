<?php
/**
 * Template Name: cc-home
 * The template for displaying the theme demo.
 * @package CC_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main maincontentarea">






<!-- Website Portfolio -->
<section class="section">
    <div class="container wide-container">


        <div class="columns has-text-centered  has-text-primary  ">
            <div class="column is-offset-3 is-6">
                <h2 class="title is-2 has-text-primary">I Build Websites</h2>
                <p class="subtitle">Full stack developer + and WordPress specialist</p>

                <div class="columns has-text-centered">

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold" href="#testimonials">Testimonials</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold" href="#aboutme">About Me</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold" href="#mytechstack">My Tech Stack</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold" href="#resume">Resume</a>
                    </div>

                </div>


            </div>
        </div>



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
            <a class="button is-accent" href="https://www.instagram.com/chancecorbeilwebsites/">More On Instagram</a>
        </div>
    </div>

</section>
<!-- Website Portfolio -->




<!-- Testimonials -->
<section class="section has-background-primary" id="testimonials">
    <div class="container">

        <div class="columns testimonial">
            <div class="column is-3">
                <div class="image"><img src="<?php echo get_template_directory_uri() ?>/images/avatar1.svg" alt="" width="300"
                    class="starlogo" /></div>
            </div>
            <div class="column is-9">
            <div class="box">
                <div class="testimonialquote is-size-4 is-family-secondary"><span
                        class="has-text-secondary quotemarks">"</span>This morning both Susan and Barb spontaneously told me that they think you're the greatest. Apparently you're the first tech guy they've worked with who explains things in an understandable way! 😊  Well done.<span class="has-text-secondary quotemarks">"</span></div>
            </div>
            </div>
        </div>

        <div class="columns testimonial">
            <div class="column is-9">
            <div class="box">
                <div class="testimonialquote is-size-4 is-family-secondary"><span
                        class="has-text-secondary quotemarks">"</span>Chance- you're awesome!! I know I tell you all the time but YOU DA MAN!!! I'm feeling so much better about our site since you came on board.<span class="has-text-secondary quotemarks">"</span></div>
            </div>
            </div>
            <div class="column is-3">
            <div class="image"><img src="<?php echo get_template_directory_uri() ?>/images/avatar4.svg" alt="" width="300"
                    class="starlogo" /></div>
            </div>
        </div>

    </div>
</section>
<!-- Testimonials -->





<!-- CTA -->
<section class="section">
    <div class="container">

    <div class="columns has-text-centered">
            <div class="column is-offset-3 is-6">
                <h2 class="title is-2 has-text-primary">Let's Talk</h2>
                <p class="subtitle">I'm currently accepting new projects.<br>
                Send me an email at <a href="mailto:hello@chancecorbeil.com?subject=Hi Chance!">hello@chancecorbeil.com</a></p>
                <a class="button is-accent" href="mailto:hello@chancecorbeil.com?subject=Hi Chance!">Connect With Chance</a>
            </div>
        </div>


    </div>
</section>
<!-- CTA -->





<!-- Tech Stack -->
<section class="section has-background-grey-dark has-text-white-ter" id="mytechstack">
    <div class="container wide-container">
        <div class="columns">

            <div class="column is-4">
                <h2 class="title is-2 has-text-white-ter">Tech Stack</h2>
                <p>I'm a full stack developer and digital designer with over a decade in WordPress experience. I love building websites, and helping clients through their projects from beginning to end.</p>
                <p>For a bright future, I study jamstack.</p>
            </div>

            <div class="column is-8">

                <div class="columns">
                    <div class="column is-offset-2 is-size-7">
                        <span class="has-text-weight-semibold">Experience</span><br>
                        <span>11 years</span><br>
                        <span>172 websites built</span><br>

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






</main><!-- #main -->

<?php
get_footer();