<footer class="content-info" role="contentinfo">
  <div class="container" id="inner-footer">
   <div class="row">
   <div class="col-sm-6 col-xs-12">
   <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav footer-nav'));
        endif;
      ?>
   </div>
   <div class="col-sm-2 col-sm-offset-1 col-xs-8"><p class="colophon">28 West 44th Street, Suite 300,<br />
New York, NY 10036<br />
<strong>Phone:</strong> <a href="#">212.302.8800</a><br />
<strong>Email:</strong> <a href="#">info@the-cei.org</a></p></div>
   <div class="col-sm-3 col-xs-4"><img class="mar-one-b" src="<?php bloginfo( 'template_directory' ); ?>/assets/img/cei-logo.png" alt="<?php echo bloginfo( 'name' ); ?>" /><p class="colophon">&copy; <?php echo date('Y'); ?> <?php echo bloginfo(); ?> </p></div>
   </div>
  </div>
</footer>
</div>
<script type="text/javascript">
  var currentYear = (new Date).getFullYear();
  $(document).ready(function() {
  $("#year").text( (new Date).getFullYear() );
  });
</script>
<?php wp_footer(); ?>
