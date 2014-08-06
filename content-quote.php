<?php
/**
 * This style gets included when post type is set to "quote". It's the exact same thing like content.php.
 * The code gets embedded in a page with a default or a specific template.
 *
 * @package fourtwenty
 * @link
 */
?>

<div class="container">
    <article id="post-<?php echo the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
            <?php the_title('<h1><a href="' . esc_url(get_permalink()) . '" class="entry-title">', '</a></h1>'); ?>
        </div>
        <div class="entry-content">
            <blockquote>
                <?php the_content(); // You can change this to the_excerpt() if you want to. ?>
                <footer>Someone famous in <cite="title">Source Title</cite></footer>
            </blockquote>
        </div>
        <div class="entry-meta">
            <?php fourtwenty_post_timestamp(); // Time, date and author. ?>
        </div>
        <!-- If you'd like to, you can include the category, tags and similar here. Up to you. -->
    <hr>
    </article>
</div>