<?php
/**
 * Template Name: CC Com Home Page
 * 
 * The template for displaying a full width page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CC_Starter_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- Begin: Section #1 -->
  <section class="section homesection salmonsection">
    <div class="container">
      <div class="columns">
        <div class="column is-8">
          <h1 class="title is-1">Chance Corbeil</h1>
          <div class="title is-4"> Full stack developer + front end specialist</div>
        </div>
        <div class="column is-4">
            <figure class="image imagehomeselfie">
              <img class="is-rounded"
                src="http://trinityrising.local/wp-content/uploads/2020/10/cropped-chance-icon-e1602550999357-1.jpg">
            </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #1 -->

  <!-- Begin: Section #2 -->
  <section class="section homesection whitesection">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2">I build websites</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-4">
          <h3>A one-stop developer</h3>
          <p>I have a wide range of design and development skills from SEO to ecommerce.</p>
          <h3>WordPress + WooCommerce</h3>
          <p>I specialize in WordPress development.</p>

        </div>
        <div class="column is-4">
        <article class="panel simplepanel">
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              172 websites built
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              11 years experience
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              WordPress Expert
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Studying React, Gatsby
            </a>
          </article>
        </div>
        <div class="column is-4">
          <article class="panel simplepanel">
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Resume
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Contact Chance
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              My Tech Stack
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Project Examples
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #2 -->

  <!-- Begin: Section #3 -->
  <section class="section homesection tealsection">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2 has-text-centered">Websites I built</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-12">
          <div><?php echo do_shortcode("[instagram-feed]"); ?></div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #3 -->

    <!-- Begin: Section #5 -->
    <section class="section homesection whitesection">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2 has-text-centered">Project Links</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-12">
          <div class="tabs is-toggle is-fullwidth is-primary">
            <ul>
              <li>
                <a>
                  <span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
                  <span>OSC Elate</span>
                </a>
              </li>
              <li>
                <a>
                  <span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
                  <span>CC Starter Theme</span>
                </a>
              </li>
              <li>
                <a>
                  <span class="icon is-small"><i class="fas fa-film" aria-hidden="true"></i></span>
                  <span>GitHub</span>
                </a>
              </li>
              <li>
                <a>
                  <span class="icon is-small"><i class="far fa-file-alt" aria-hidden="true"></i></span>
                  <span>Bridge Meadows</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #5 -->

  <!-- Begin: Section #4 -->
  <section class="section homesection tealsection">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2 has-text-centered">Tech Stack</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-3">
          <article class="panel is-primary">
            <p class="panel-heading">
              Languages
            </p>
            <a class="panel-block is-active">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Javascript
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              CSS
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              HTML
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              SASS
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              PHP
            </a>
          </article>
        </div>
        <div class="column is-3">
          <article class="panel is-primary">
            <p class="panel-heading">
              Frameworks + Libraries
            </p>
            <a class="panel-block is-active">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              React
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Bootstrap
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Bulma
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              node.js
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              anime.js
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              granim.js
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              velocity.js
            </a>
          </article>
        </div>
        <div class="column is-3">
          <article class="panel is-primary">
            <p class="panel-heading">
              Tools
            </p>
            <a class="panel-block is-active">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Github
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Slack
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              VS Code
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              WordPress
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              WooCommerce
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              cPanel
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              CodeKit
            </a>
          </article>
        </div>

        <div class="column is-3">
          <article class="panel is-primary">
            <p class="panel-heading">
              Skills
            </p>
            <a class="panel-block is-active">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Web development
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Responsive design
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Ecommerce
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              SEO
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              UX/UI
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Content management
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Page Speed
            </a>
          </article>
        </div>

      </div>
    </div>
  </section>
  <!-- End: Section #4 -->


  <!-- Begin: Section #6 -->
  <section class="section homesection whitesection">
    <div class="container">
      <div class="columns">
        <div class="column is-6">
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
        <div class="column is-6">
          <h2 class="title is-2">Contact Me</h2>
          <div>Contact Form Here</div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #6 -->

  <!-- Begin: Section #6 -->
  <section class="section homesection whitesection">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2">xxxxxxxxxxxxxxxxxx</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-12">
          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Websites I've built</p>
                <p class="title">172</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Years I've developed websites</p>
                <p class="title">11</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Followers</p>
                <p class="title">456K</p>
              </div>
            </div>
            <div class="level-item has-text-centered">
              <div>
                <p class="heading">Resume</p>
                <p class="title">Resume</p>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #6 -->



</main><!-- #main -->

<?php
get_footer();