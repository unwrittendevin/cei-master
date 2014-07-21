<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'thecei'); ?>
    </div>
  <![endif]-->

<?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>
<div class="wrap container" role="document">
  <div class="content clearfix">
    <? if(is_front_page()){
		echo '<div class="clearfix">';
		get_template_part('templates/section', 'slide');
		echo '</div>';
	} ?>
    <div id="content-wrap">
      <div class="row clearfix">
        <main class="main <?php echo thecei_main_class(); ?>" role="main">
          <?php include thecei_template_path(); ?>
        </main>
        <!-- /.main -->
        <?php if (thecei_display_sidebar()) : ?>
        <aside class="sidebar <?php echo thecei_sidebar_class(); ?>" role="complementary">
          <?php include thecei_sidebar_path(); ?>
        </aside>
        <!-- /.sidebar -->
        <?php endif; ?>
      </div>
      <? if (is_front_page()): ?>
      <div class="row-clearfix">
        <section class="sidebar-footer" role="complementary">
          <?php get_template_part('templates/sidebar', 'footer'); ?>
        </section>
      </div>
	  <?php endif; ?>
    </div>
  </div>
  <!-- /.content --> 
</div>
<!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>
</body>
</html>