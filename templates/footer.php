<section class="footer-widgets">
  <div class="container">
    <div class="row">
      <?php dynamic_sidebar('footer-left'); ?>
      <?php dynamic_sidebar('footer-center'); ?>
      <?php dynamic_sidebar('footer-right'); ?>        
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
