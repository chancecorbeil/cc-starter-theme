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


  <!-- Begin: Section #1 -->
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-12">
          <h2 class="title is-2 has-text-centered">Project Links</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-4">
          <article class="panel simplepanel">
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              WordPress Websites
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Bridge Meadows
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Portland Chinatown Museum
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Blah blah blah
            </a>
          </article>
        </div>

        <div class="column is-4">
          <article class="panel simplepanel">
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              Fun For Me
            </a>
            <a class="panel-block">
              <span class="panel-icon">
                <i class="fas fa-book" aria-hidden="true"></i>
              </span>
              OSC Elate
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
        <div class="buttons">
  <button class="button is-primary" onclick="modalContact()">Primary</button>
  <button class="button is-link" onclick="modalContact()">Link</button>
</div>

<div class="buttons">
  <button class="button is-info" onclick="modalContact()">Modal</button>
  <button class="button is-success" onclick="modalContact()">Modal</button>
  <a class="button is-warning" href="#anchorlink1">Anchor Link 1</a>
  <a class="button is-danger" href="#anchorlink2">Anchor Link 2</a>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #1 -->



  <!-- Begin: Section #2 -->
  <section class="section">
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
  <!-- End: Section #2 -->


  <!-- Begin: Section #3 -->
  <section class="section" id="anchorlink1">
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
        <div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item" aria-label="reply">
            <span class="icon is-small">
              <i class="fas fa-reply" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="retweet">
            <span class="icon is-small">
              <i class="fas fa-retweet" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="like">
            <span class="icon is-small">
              <i class="fas fa-heart" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #3 -->

  <!-- Begin: Section #4 -->
  <section class="section" id="anchorlink2">
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
  <!-- End: Section #4 -->


  <!-- Begin: Section #5 -->
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-4">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>One</th>
          <th>Two</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Three</td>
          <td>Four</td>
        </tr>
        <tr>
          <td>Five</td>
          <td>Six</td>
        </tr>
        <tr>
          <td>Seven</td>
          <td>Eight</td>
        </tr>
        <tr>
          <td>Nine</td>
          <td>Ten</td>
        </tr>
        <tr>
          <td>Eleven</td>
          <td>Twelve</td>
        </tr>
      </tbody>
    </table>
        </div>
        <div class="column is-4">
        <div class="box">
  <article class="media">
    <div class="media-left">
      <figure class="image is-64x64">
        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <p>
          <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
          <br>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
        </p>
      </div>
      <nav class="level is-mobile">
        <div class="level-left">
          <a class="level-item" aria-label="reply">
            <span class="icon is-small">
              <i class="fas fa-reply" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="retweet">
            <span class="icon is-small">
              <i class="fas fa-retweet" aria-hidden="true"></i>
            </span>
          </a>
          <a class="level-item" aria-label="like">
            <span class="icon is-small">
              <i class="fas fa-heart" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      </nav>
    </div>
  </article>
</div>
        </div>
        <div class="column is-4">
        <div class="card">
  <header class="card-header">
    <p class="card-header-title">
      Component
    </p>
    <a href="#" class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
    </a>
  </header>
  <div class="card-content">
    <div class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
      <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
      <br>
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
  <footer class="card-footer">
    <a href="#" class="card-footer-item">Save</a>
    <a href="#" class="card-footer-item">Edit</a>
    <a href="#" class="card-footer-item">Delete</a>
  </footer>
</div>
        </div>
      </div>
    </div>
  </section>
  <!-- End: Section #5 -->



</main><!-- #main -->

<?php
get_footer();