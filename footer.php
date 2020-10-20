<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CC_Starter_Theme
 */

?>

</div><!-- #page -->





<!-- Begin: Footer Template 2 -->
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







    


<script>
function modalContact() {
      var element = document.getElementById("modal");
      element.classList.toggle("is-active");
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
