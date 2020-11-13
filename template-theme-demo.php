<?php
/**
 * Template Name: Theme Demo
 * The template for displaying the theme demo.
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
          <h2 class="title is-2">Theme Demo</h2>
          <p class="subtitle">Use these components in your projects</p>

          <div class="tabs is-centered">
            <ul>
              <li><a href="#template1">Template 1</a></li>
              <li><a href="#template2">Template 2</a></li>
              <li><a href="#template3">Template 3</a></li>
              <li><a href="#template4">Template 4</a></li>
              <li><a href="#template5">Template 5</a></li>
            </ul>
          </div>

          <div class="tabs is-centered">
            <ul>
              <li><a href="#template6">Template 6</a></li>
              <li><a href="#template7">Template 7</a></li>
              <li><a href="#template8">Template 8</a></li>
              <li><a href="#template9">Template 9</a></li>
              <li><a href="#template10">Template 10</a></li>
            </ul>
          </div>

          <div class="tabs is-centered">
            <ul>
              <li><a href="#template11">Template 11</a></li>
              <li><a href="#template12">Template 12</a></li>
              <li><a href="#template13">Template 13</a></li>
              <li><a href="#template14">Template 14</a></li>
              <li><a href="#template15">Template 15</a></li>
            </ul>
          </div>

          <h2 class="title is-2">Notes for this page</h2>
          <ul>
          <li>Make sure each template has a subtitle describing what is in the section</li>
          <li>Make template title area stand out in some way</li>
          <li>Make template template. Get it...</li>
          </ul>

        </div>
      </div>
    </div>
  </section>
  <!-- End: Page IntroPage Intro -->

  <!-- Add Template 1  --> <?php get_template_part( 'templates/template-1'); ?>
  <!-- Add Template 2  --> <?php get_template_part( 'templates/template-2'); ?>
  <!-- Add Template 3  --> <?php get_template_part( 'templates/template-3'); ?>
  <!-- Add Template 4  --> <?php get_template_part( 'templates/template-4'); ?>
  <!-- Add Template 5  --> <?php get_template_part( 'templates/template-5'); ?>
  <!-- Add Template 6  --> <?php get_template_part( 'templates/template-6'); ?>
  <!-- Add Template 7  --> <?php get_template_part( 'templates/template-7'); ?>
  <!-- Add Template 8  --> <?php get_template_part( 'templates/template-8'); ?>
  <!-- Add Template 9  --> <?php get_template_part( 'templates/template-9'); ?>
  <!-- Add Template 10  --> <?php get_template_part( 'templates/template-10'); ?>
  <!-- Add Template 11  --> <?php get_template_part( 'templates/template-11'); ?>










</main><!-- #main -->

<?php
get_footer();