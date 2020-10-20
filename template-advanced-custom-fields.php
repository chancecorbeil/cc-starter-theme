<?php
/**
 * Template Name: Advanced Custom Fields
 * The template for displaying the ACF fields.
 * @package CC_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main maincontentarea">

    <section class="section">
        <div class="container">


            <!-- Begin: Page Intro -->
            <div class="columns">
                <div class="column is-12 has-text-centered">
                    <h2 class="title is-2">Advanced Custom Fields</h2>
                    <p class="subtitle">Use these ACF codes to construct your theme templates</p>
                </div>
            </div>
            <!-- End: Page IntroPage Intro -->


            <!-- Begin: ACF -->
            <div class="columns">
                <div class="column is-12">


                    <!-- Announcement Bar -->
                    <?php if( get_field('announcement_bar', 'option') ): ?>

                    <div class="notification is-info">
                        <?php the_field('announcement_bar', 'option'); ?>
                    </div>

                    <?php endif; ?>


                    <!-- Subtitle -->
                    <?php if( get_field('subtitle') ): ?>

                    <p>
                        <?php the_field('subtitle'); ?>
                    </p>

                    <?php endif; ?>


                    <!-- Begin: Footer -->

                    <h2 class="title is-2">Footer Section</h2>

                    <div class="title is-4">Which footer template is selected?</div>
                    <?php 
if( get_field('select_footer_template', 'option') == 'optionone' ) {
    ?><p class="subtitle">Option One Selected</p><?php
}
if( get_field('select_footer_template', 'option') == 'optiontwo' ) {
    ?><p class="subtitle">Option Two Selected</p><?php
} ?>

                    <!-- Footer: Option 1 -->
                    <div class="title is-4">Footer Template 1</div>
                    <?php if( get_field('footer_field_1', 'option') ): ?>

                    <p class="subtitle"><?php the_field('footer_field_1', 'option'); ?></p>

                    <?php endif; ?>





  <!-- Begin: Footer Template 2 -->
  <div class="title is-4">Footer Template 2</div>

<section class="section has-background-info has-text-grey-lighter">
        <div class="container">

            <div class="columns is-vcentered">
                <div class="column is-4 has-text-left">
                <?php if( get_field('footer_field_2', 'option') ): ?>
                    <p class="subtitle"><?php the_field('footer_field_2', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="column is-4 has-text-centered">
                <?php if( get_field('footer_field_1', 'option') ): ?>
                    <p class="subtitle"><?php the_field('footer_field_1', 'option'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="column is-4 has-text-right">
                <?php if( get_field('footer_field_3', 'option') ): ?>
                    <p class="subtitle"><?php the_field('footer_field_3', 'option'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
    </section>
<!-- End: Footer Template 2 -->



                    <!-- End: Footer -->






                    <!-- Begin: Demo Controls -->

                    <h2 class="title is-2">Demo Controls</h2>

                    <div class="title is-4">Which demo template is selected?</div>
                    <?php 
if( get_field('select_demo_template', 'option') == 'demotemplateone' ) {
?><p class="subtitle">Demo Template One</p><?php
}
if( get_field('select_demo_template', 'option') == 'demotemplatetwo' ) {
?><p class="subtitle">Demo Template Two</p><?php
}
if( get_field('select_demo_template', 'option') == 'demotemplatethree' ) {
?><p class="subtitle">Demo Template Three</p><?php
} ?>

                    <!-- Demo Template One -->
                    <div class="title is-4">Demo Template One</div>
                    <?php if( get_field('demo_template_one', 'option') ): ?>

                    <p class="subtitle">
                        <?php the_field('demo_template_one', 'option'); ?>
                    </p>

                    <?php endif; ?>

                    <!-- Demo Template Two -->
                    <div class="title is-4">Demo Template Two</div>
                    <?php if( get_field('demo_template_two', 'option') ): ?>

                    <p class="subtitle">
                        <?php the_field('demo_template_two', 'option'); ?>
                    </p>

                    <?php endif; ?>

                    <!-- Demo Template Three -->
                    <div class="title is-4">Demo Template Three</div>
                    <?php if( get_field('demo_template_three', 'option') ): ?>

                    <p class="subtitle">
                        <?php the_field('demo_template_three', 'option'); ?>
                    </p>

                    <?php endif; ?>


                    <!-- End: Demo Controls -->





                </div>
            </div>
            <!-- End: ACF -->


        </div>
    </section>









</main><!-- #main -->

<?php
get_footer();