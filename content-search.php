<?php
/**
 * Displays search results made by using searchform.php
 *
 * @package fourtwenty
 */
?>

<article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
    <div class="page-header">
        <?php the_title('<h1>', '</h1>'); ?>
    </div>
    <div class="entry-meta">
        <?php fourtwenty_post_timestamp(); // Time, date and author. ?>
        <div class="permalink">Permalink: <a href="<?php echo get_the_permalink(); ?>">#</a></div>
    </div>
    <div class="entry-content">
        <?php the_excerpt(); // Post body. ?>
    </div>
    <?php
    // Get categories and tags and echo them out.
    $tags = (get_the_tag_list()) ? get_the_tag_list() : __('N/A', 'fourtwenty');
    $cats = get_the_category_list();

    echo '<div class="entry-tags">' . __('Tags: ' . $tags, 'fourtwenty') . '</div>';
    echo '<div class="entry-cats">' . __('Categories: ' . $cats, 'fourtwenty') . '</div>';
    echo edit_post_link(__('Edit this post', 'fourtwenty')); // Edit post link which shows if you have the needed perms.
    ?>
</article>