<!-- Section 11 -->



<!-- Header -->

<!-- Announcement Bar -->
<?php if( get_field('announcement_bar', 'option') ): ?>

<div class="has-background-grey-dark has-text-white has-text-centered is-size-7 announcement">
    <?php the_field('announcement_bar', 'option'); ?>
</div>

<?php endif; ?>


<section class="section shortsection has-background-white-ter" id="bulmatemplate10">
    <div class="container wide-container">

        <div class="columns is-vcentered">
            <div class="column is-3">
                <a class="title is-3 has-text-primary">Chance Corbeil</a>
                <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="" width="18" height="18"
                    class="starlogo" />

            </div>

            <div class="column is-6 has-text-centered">
            </div>

            <div class="column is-3 has-text-right">
                <a class="button has-background-primary "
                    href="mailto:hello@chancecorbeil.com?subject=Hi Chance!">Contact</a>
            </div>

        </div>
    </div>
</section>
<!-- Header -->






<!-- Website Portfolio -->
<section class="section">
    <div class="container wide-container">


        <div class="columns has-text-centered  has-text-primary  ">
            <div class="column is-offset-3 is-6">
                <h2 class="title is-2 has-text-primary">I Build Websites</h2>
                <p class="subtitle">Full stack developer + and WordPress specialist</p>

                <div class="columns has-text-centered">

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold">Testimonials</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold">About Me</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold">My Tech Stack</a>
                    </div>

                    <div class="column is-size-7">
                        <a class="has-text-weight-semibold">Resume</a>
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
            <h2 class="button is-accent">More On Instagram</h2>
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

        <div class="columns testimonial">
            <div class="column is-9">
                <div class="testimonialquote is-size-4 is-family-secondary"><span
                        class="has-text-secondary quotemarks">"</span>Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas.
                    Nullam condimentum luctus turpis.<span class="has-text-secondary quotemarks">"</span></div>
                <div class="has-text-grey-dark"><span class="has-text-weight-semibold">Gary Placebo</span> from the Med
                    Staff Cult</div>
            </div>
        </div>
        <div class="column is-3">
                <div class="image"><?php the_custom_logo(); ?></div>
            </div>

    </div>
</section>
<!-- Testimonials -->


<!-- CTA -->
<section class="section">
    <div class="container">

        <div class="columns testimonial">
            <div class="column is-6">
                <div class="image"><?php the_custom_logo(); ?></div>
            </div>

            <div class="column is-6">
                <h2>Let's chat</h2>
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
                <p>Lorem ipsum re et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Consectetur adipiscing elit, sed do eiusmim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip.</p>
            </div>

            <div class="column is-8">

                <div class="columns">
                    <div class="column is-offset-2 is-size-7">
                        <span class="has-text-weight-semibold">Experience</span><br>
                        <span>172 websites built</span><br>
                        <span>11 years</span><br>
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

<!-- Section 11 -->