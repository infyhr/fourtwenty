<?php
/**
 * The default Wordpress search form is ugly. This file takes care of it and bootstrapifies it.
 *
 * @package fourtwenty
 * @link http://codex.wordpress.org/Function_Reference/get_search_form#Theme_Form
 */
?>

<form action="<?php echo home_url('/'); ?>" method="get" class="form-inline">
    <div class="form-group">
        <input type="text" name="s" id="search" class="form-control" placeholder="<?php _e('Search here...', 'fourtwenty'); ?>" value="<?php the_search_query(); ?>">
        <input type="submit" class="btn btn-default" value="<?php _e('Submit', 'fourtwenty'); ?>">
    </div>
</form>