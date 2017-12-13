<?php
 /*
 Template Name: Home_Page
 Template Post Type: post, page, product
 Class
 */
?>

<?php get_header(); ?>
<!-- END HEADER -->

  <div class="content">

  <section id="homeSection">
      <canvas id="nokey" width="window.innerWidth" height="window.innerHeight">
      </canvas>
  </section>
        <!-- <div class="is-hidden-desktop">
          <img class="images-mobile" src="{{asset('storage/logo.png')}}" alt="">
        </div> -->


       <!-- <canvas id="view-surface">
         Your browser does not support webgl!
       </canvas> -->
<div class="container">
  <div class="timer" id="timer"></div>
  <section id="schduleSection">
    <div class="container">
    <section id="app" class="animated " name="section">
        <div id="root" class="container">
            <tabs>
              <tab name="31January" :selected="true">
                <h1 class="title is-2">31JANUARY schdule</h1>
                  <?php if(have_posts()):while(have_posts()): the_post(); ?>
                    <?php if (get_the_category() == "31January"):
                      # code...
                      ?>
                  <div class="card">
                    <header class="card-header">
                      <p class="card-header-title">
                        <?php the_title() ?>
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                          </span>
                        </a>
                    </header>
                    <div class="card-content">
                      <div class="content">
                        <?php the_content() ?>
                        <br>
                        <time datetime="2017-2-2">11:09 PM - 31 Jan 2017</time>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Save</a>
                      <a href="#" class="card-footer-item">Edit</a>
                      <a href="#" class="card-footer-item">Delete</a>
                    </footer>
                    </div>
                      <?php      endif;  ?>
                          <?php endwhile;
                        endif;
                         ?>
              </tab>
              <tab name="1Febuary" :selected="true">
                <h1 class="title is-2">1Febuary schdule</h1>
                  <?php if(have_posts()):while(have_posts()): the_post(); ?>
                  <div class="card">
                    <header class="card-header">
                      <p class="card-header-title">
                        <?php the_title() ?>
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                          </span>
                        </a>
                    </header>
                    <div class="card-content">
                      <div class="content">
                        <?php the_content() ?>
                        <br>
                        <time datetime="2017-2-2">11:09 PM - 31 Jan 2017</time>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Save</a>
                      <a href="#" class="card-footer-item">Edit</a>
                      <a href="#" class="card-footer-item">Delete</a>
                    </footer>
                  </div>
                          <?php endwhile;
                        endif;
                         ?>
              </tab>
              <tab name="2Febuary" :selected="true">
                <h1 class="title is-2">2Febuary schdule</h1>
                  <?php if(have_posts()):while(have_posts()): the_post(); ?>
                  <div class="card">
                    <header class="card-header">
                      <p class="card-header-title">
                        <?php the_title() ?>
                        </p>
                        <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="icon">
                            <i class="fa fa-book" aria-hidden="true"></i>
                          </span>
                        </a>
                    </header>
                    <div class="card-content">
                      <div class="content">
                        <?php the_content() ?>
                        <br>
                        <time datetime="2017-2-2">11:09 PM - 31 Jan 2017</time>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <a href="#" class="card-footer-item">Save</a>
                      <a href="#" class="card-footer-item">Edit</a>
                      <a href="#" class="card-footer-item">Delete</a>
                    </footer>
                  </div>
                          <?php endwhile;
                        endif;
                         ?>
              </tab>
            </tabs>

      </div>

      </section>
      </div>
    </section>
        <section id="aboutSection">
          <div class="card article">
                    <div class="card-content">
                      <div class="media">
                        <div class="media-center">
                            <img src="http://www.radfaces.com/images/avatars/daria-morgendorffer.jpg" class="author-image" alt="Placeholder image">
                        </div>
                        <div class="media-content has-text-centered">
                          <p class="title article-title">Huge Leap Week</p>
                          <p class="subtitle is-6 article-subtitle">
                            <a href="#">@d</a> on date, 2017
                          </p>
                        </div>
                      </div>

                    <div class="content article-body">
                        <p>Non arcu risus quis varius quam quisque. Dictum varius duis at consectetur lorem. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. </p>
                        <p>Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. In hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Accumsan lacus vel facilisis volutpat. Non sodales neque sodales ut etiam. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus.</p>
                        <h3 class="has-text-centered">Feugiat sed lectus vestibulum mattis.</h3>
                        <p> Molestie ac feugiat sed lectus vestibulum. Feugiat sed lectus vestibulum mattis. Volutpat diam ut venenatis tellus in metus vulputate. Feugiat in fermentum posuere urna nec. Pharetra convallis posuere morbi leo urna molestie at. Accumsan lacus vel facilisis volutpat est velit egestas. Fermentum leo vel orci porta. Faucibus interdum posuere lorem ipsum.
                        </p>
                      </div>
                    </div>
                  </div>
        </section>


    <section id="contactSection"  name="section">
      <div class="container">
        <div class="card">
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
                <i class="fa fa-user"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
              </span>
            </div>
            <p class="help is-success">This username is available</p>
          </div>

          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
              <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
              <span class="icon is-small is-right">
                <i class="fa fa-warning"></i>
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
              <button class="button is-link">Send</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- BEGIN CONTAINER -->
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
 <?php get_footer(); ?>
