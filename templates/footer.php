<section class="footer-widgets">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      <?php dynamic_sidebar('footer-left'); ?>
      </div><div class="col-md-4">
      <?php dynamic_sidebar('footer-center'); ?>
      </div><div class="col-md-4">
      <?php dynamic_sidebar('footer-right'); ?>   
      </div>     
    </div>
  </div>
</section>
<footer class="sponsor-footer container" role="contentinfo">
  <?php dynamic_sidebar('sponsor-logos'); ?>
</footer>

<?php wp_footer(); ?>
