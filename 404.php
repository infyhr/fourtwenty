<?php
/**
 * 404.php gets loaded every time an HTTP 404 occurs.
 *
 * @package fourtwenty
 */

get_header();
?>

<div class="container">
    <main role="main">
        <h1>:(</h1><h3><?php _e('HTTP 404', 'fourtwenty'); ?></h3>
        <p><?php _e('The page you were looking for has not been found. Maybe you can try searching for it below', 'fourtwenty'); ?></p>
    </main>

    <?php get_search_form(); ?>
</div>

<?php
get_footer();
?>