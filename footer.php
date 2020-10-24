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
<section class="section pt-0 pb-0 has-background-grey-darker has-text-grey-lighter footer">
        <div class="container wide-container is-size-7">

            <div class="columns is-vcentered">
                <div class="column is-4 has-text-left">
                <?php if( get_field('footer_field_2', 'option') ): ?>
                    <?php the_field('footer_field_2', 'option'); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-4 has-text-centered">
                    
                <?php if( get_field('footer_field_1', 'option') ): ?>
                    <?php the_field('footer_field_1', 'option'); ?>
                    <?php endif; ?>
                </div>
                <div class="column is-4 has-text-right">
                <?php if( get_field('footer_field_3', 'option') ): ?>
                    <?php the_field('footer_field_3', 'option'); ?>
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
