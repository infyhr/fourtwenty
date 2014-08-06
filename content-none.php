<?php
/**
 * This file gets shown where no posts have been found or where there are no posts available... yet.
 * @package fourtwenty
 * @link http://codex.wordpress.org/Template_Hierarchy
 */
?>

<div class="container">
    <div class="page-header">
        <h1><?php _e('There has been nothing found!', 'fourtwenty'); ?></h1>
    </div>
        <?php
            if(is_search()) {
                _e('<p class="lead">Nothing has matched your search query. You can try again with some different keywords.</p>', 'fourtwenty');
                get_search_form();
            }else {
                _e('<p class="lead">We cannot seem to find what you have been looking for. Searching might help you.</p>', 'fourtwenty');
                get_search_form();
            }
        ?>
</div>