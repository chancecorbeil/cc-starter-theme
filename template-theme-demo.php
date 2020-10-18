<?php
/**
 * Template Name: Theme Demo
 * 
 * The template for displaying the theme demo.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main maincontentarea">


  <!-- Begin: Modal for contact form -->
  <div class="modal" id="modal">
    <div class="modal-background" onclick="modalContact()"></div>
    <div class="modal-content">

      <div class="box">
        <h2 class="title is-2">Contact Me</h2>
        <div>
          <div class="field">
            <label class="label">Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Text input">
            </div>
          </div>

          <div class="field">
            <label class="label">Username</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-success" type="text" placeholder="Text input" value="bulma">
              <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
              </span>
            </div>
            <p class="help is-success">This username is available</p>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
              <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
              </span>
            </div>
            <p class="help is-danger">This email is invalid</p>
          </div>

          <div class="field">
            <label class="label">Subject</label>
            <div class="control">
              <div class="select">
                <select>
                  <option>Select dropdown</option>
                  <option>With options</option>
                </select>
              </div>
            </div>
          </div>

          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" placeholder="Textarea"></textarea>
            </div>
          </div>

          <div class="field">
            <div class="control">
              <label class="checkbox">
                <input type="checkbox">
                I agree to the <a href="#">terms and conditions</a>
              </label>
            </div>
          </div>

          <div class="field">
            <div class="control">
              <label class="radio">
                <input type="radio" name="question">
                Yes
              </label>
              <label class="radio">
                <input type="radio" name="question">
                No
              </label>
            </div>
          </div>

          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link">Submit</button>
            </div>
            <div class="control">
              <button class="button is-link is-light">Cancel</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <button class="modal-close is-large" aria-label="close"></button>
  </div>
  <!-- Begin: Modal for contact form -->


  <!-- Begin: Page Intro -->
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12 has-text-centered">
          <h2 class="title is-2">Bulma Parts</h2>
          <p class="subtitle">Use these Bulma components in your projects</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Page IntroPage Intro -->

  <!-- Add Bulma Example 1  --> <?php get_template_part( 'templates-bulma/bulma-example-1'); ?>
  <!-- Add Bulma Example 2  --> <?php get_template_part( 'templates-bulma/bulma-example-2'); ?>
  <!-- Add Bulma Example 3  --> <?php get_template_part( 'templates-bulma/bulma-example-3'); ?>
  <!-- Add Bulma Example 4  --> <?php get_template_part( 'templates-bulma/bulma-example-4'); ?>
  <!-- Add Bulma Example 5  --> <?php get_template_part( 'templates-bulma/bulma-example-5'); ?>
  <!-- Add Bulma Example 6  --> <?php get_template_part( 'templates-bulma/bulma-example-6'); ?>
  <!-- Add Bulma Example 7  --> <?php get_template_part( 'templates-bulma/bulma-example-7'); ?>
  <!-- Add Bulma Example 8  --> <?php get_template_part( 'templates-bulma/bulma-example-8'); ?>
  <!-- Add Bulma Example 9  --> <?php get_template_part( 'templates-bulma/bulma-example-9'); ?>
  <!-- Add Bulma Example 10  --> <?php get_template_part( 'templates-bulma/bulma-example-10'); ?>










</main><!-- #main -->

<?php
get_footer();