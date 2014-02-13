<section class="footer-widgets">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <?php dynamic_sidebar('footer-left'); ?>
      </div>
      <div class="col-md-4">
        <?php dynamic_sidebar('footer-center'); ?>
      </div>
      <div class="col-md-4">
        <div class="widget social-buttons">
        <h3>Connect with us</h3>
          <a href="https://www.facebook.com/mazeppaprod">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <a href="https://twitter.com/mazeppaprod">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>
<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-sm-6">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
    <div class="col-sm-6">
      <ul class="nav nav-pills">
        <li><a href="https://www.ticketturtle.com/index.php?ticketing=mazep">Buy Tickets</a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
