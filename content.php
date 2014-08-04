<?php
/**
 * content.php is used to display POSTS ONLY in a page. This code basically gets embedded in page.php.
 * You can change what page it gets embedded to by changing the template of the "posts page" itself.
 * You can set this up by going to:
 * admin panel -> Settings -> Reading -> Front Page displays -> A static page -> Posts page (select page)
 *
 * @package fourtwenty
 */
?>
<!-- content.php -->
<div class="container">
    <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
        <?php the_title('<h3><a href="' . esc_url(get_permalink()) . '" class="entry-title">', '</a></h3>'); ?>
        <div class="entry-content">
            <?php the_excerpt(); // Just show an excerpt. Users can click to go the whole thing. ?>
        </div>
        <div class="entry-meta">
            <?php fourtwenty_post_timestamp(); // Time, date and author. ?>
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
    <hr>
</div>