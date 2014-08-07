<?php
/**
 * Template Name: Archives
 * Template used for displaying archive pages.
 *
 * @package fourtwenty
 * @link http://codex.wordpress.org/Creating_an_Archive_Index#The_Template_.28archives.php.29
 */

get_header(); ?>

<div class="container">
    <?php if(have_posts()) { the_post(); ?>
    <div class="page-header">
        <?php the_title('<h4><a href="'. esc_url(get_permalink()) . '">', '</a></h4>'); // Posts title ?>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3><?php _e('Search', 'fourtwenty'); ?></h3>
            <?php get_search_form(); ?>
        </div>
        <div class="col-md-4">
            <h3><?php _e('Archives by month', 'fourtwenty'); ?></h3>
            <ul><?php wp_get_archives('type=monthly'); // Check the reference to change this. ?></ul>
        </div>
        <div class="col-md-4">
            <h3><?php _e('Archives by subject', 'fourtwenty'); ?></h3>
            <ul><?php wp_list_categories(); ?></ul>
        </div>
    </div>
    <?php }else { get_template_part( 'content', 'none' ); } ?>
</div>

<?php #get_sidebar(); ?>
<?php get_footer(); ?>