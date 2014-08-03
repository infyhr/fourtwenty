<?php
/**
 * This file gets shown where no posts have been found or where there are no posts available... yet.
 * @package fourtwenty
 * @link http://codex.wordpress.org/Template_Hierarchy
 */
?>

<?php get_header(); ?>

<div class="container">
    <div class="page-header">
        <h1><?php _e('There has been nothing found!', 'fourtwenty'); ?></h1>
    </div>
    <p class="lead">
        <?php
            if(is_search()) {
                _e('Nothing has matched your search query. You can try again with some different keywords.');
                get_search_form();
            }else {
                _e('We cannot seem to find what you have been looking for. Searching might help you.');
                get_search_form();
            }
        ?>
    </p>
</div>

<?php get_footer(); ?>