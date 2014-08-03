<?php
/**
 * page.php is the default template for all pages.
 * If a page has no specific template set it will use this file as its template.
 * If you want to use posts in pages, use the Posts in Page plugin and refer to shortcodes.
 * Make sure you create separate page templates for each different shortcode (tag/category) wise.
 *
 * @package fourtwenty
 * @link http://codex.wordpress.org/Page_Templates
 * @see http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <?php while(have_posts()) { the_post(); ?>

            <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
                <div class="page-header">
                    <?php the_title('<h1>', '</h1>'); ?>
                </div>
                <div class="entry-content">
                    <?php the_content(); // Page body. ?>
                </div>
                <?php
                    wp_link_pages(array(
                        'before'            =>  '<div class="entry-pages">' . __('Pages: ', 'fourtwenty'),
                        'after'             =>  '</div>',
                        'nextpagelink'      =>  __('Next page', 'fourtwenty'),
                        'previouspagelink'  =>  __('Previous page', 'fourtwenty')
                    ));
                ?>
            </article>

            <?php } ?>
            <!-- If you'd like to use comments, use disqus and not the WP ones. It's just better. -->
            <!-- You can paste disqus embed here. -->

            <?php echo edit_post_link(__('Edit this page', 'fourtwenty')); // Edit post link which shows if you have the needed perms. ?>
        </div>

    <?php get_sidebar(); ?>
    </div> <!-- .row -->
</div> <!-- .container -->
<?php get_footer(); ?>