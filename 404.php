<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'thecei'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'thecei'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'thecei'); ?></li>
  <li><?php _e('an out-of-date link', 'thecei'); ?></li>
</ul>

<?php get_search_form(); ?>
