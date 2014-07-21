<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'thecei'); ?></label>
  <div class="search-input col-xs-12">
 
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control col-xs-12" placeholder="<?php _e('SEARCH', 'thecei'); ?>">
    <span class="fa fa-search fa-lg pull-right form-control-feedback"></span>
  </div>
</form>
