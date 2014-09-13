<?php
/**
 * Just an example sidebar that gets loaded on the default page template.
 * By default it includes some standard widgets such as the archive and the search form.
 * This is so if there are no widgets set up it shows something and doesn't break completely.
 *
 * @package fourtwenty
 * @link http://codex.wordpress.org/Function_Reference/get_sidebar
 */
?>

<div id="sidebar" class="col-xs-6 col-lg-4" role="complementary">
    <?php if(!dynamic_sidebar('simple-generic-sidebar')): ?>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php _e('Archives', 'fourtwenty'); ?></h3>
            </div>
            <div class="panel-body">
                <ul>
                    <?php wp_get_archives(['type' => 'monthly']); ?>
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php _e('Search', 'fourtwenty'); ?></h3>
            </div>
            <div class="panel-body">
                <?php get_search_form(); ?>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php _e('Meta', 'fourtwenty'); ?></h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li><?php wp_loginout(); ?></li>
                    <?php wp_meta(); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>