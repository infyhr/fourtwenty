<?php
/**
 * single.php displays all single posts which are directly accessed.
 *
 * @package fourtwenty
 * @link http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 */

get_header(); ?>

<div class="container">
    <?php while(have_posts()) { the_post(); ?>

    <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
            <?php the_title('<h1>', '</h1>'); ?>
        </div>
        <div class="entry-meta">
            <?php fourtwenty_post_timestamp(); // Time, date and author. ?>
            <div class="permalink">Permalink: <a href="<?php echo get_the_permalink(); ?>">#</a></div>
        </div>
        <div class="entry-content">
            <?php the_content(); // Post body. ?>
        </div>
        <?php
            wp_link_pages(array(
                'before'            =>  '<div class="entry-pages">' . __('Pages: ', 'fourtwenty'),
                'after'             =>  '</div>',
                'nextpagelink'      =>  __('Next page', 'fourtwenty'),
                'previouspagelink'  =>  __('Previous page', 'fourtwenty')
            ));

            // Get categories and tags and echo them out.
            $tags = (get_the_tag_list()) ? get_the_tag_list() : __('N/A', 'fourtwenty');
            $cats = get_the_category_list();

            echo '<div class="entry-tags">' . __('Tags: ' . $tags, 'fourtwenty') . '</div>';
            echo '<div class="entry-cats">' . __('Categories: ' . $cats, 'fourtwenty') . '</div>';
        ?>
    </article>

    <?php fourtwenty_post_navigation(); } ?>
    <!-- If you'd like to use comments, use disqus and not the WP ones. It's just better. -->
    <!-- You can paste disqus embed here. -->

    <?php echo edit_post_link(__('Edit this post', 'fourtwenty')); // Edit post link which shows if you have the needed perms. ?>
</div>

<?php #get_sidebar(); ?>
<?php get_footer(); ?>