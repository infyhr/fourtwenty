<?php
/**
 * index.php is the main template file for your theme.
 * "WordPress Templates fit together like the pieces of a puzzle to generate the web pages on your WordPress site"
 * Basically, when a request is made, Wordpress looks for a number of suitable THEME files.
 * It goes from the top of the list, the most preferred ones to the ones that are least prefered.
 * index.php is a file that gets last loaded if absolutely everything else fails.
 * In theory, Wordpress should never hit index.php but rather some other one.
 * Please read the following document for more info:
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 * @see http://codex.wordpress.org/Template_Hierarchy#Examples for easy understanding.
 * @package fourtwenty
 */

get_header(); ?>

<!-- index.php -->
<div class="container">
    <main role="main">
        <?php
            if(have_posts()) {
                while(have_posts()) {
                    the_post(); # Display the post.
                    // Content specific post. This will include content-(something).php if it's suitable to use.
                    get_template_part('content', get_post_format());
                    // So you don't have to copy/paste post navigation around.
                    fourtwenty_post_navigation();
                }
            }else {
                // Include content-none.php to indicate that there are no posts yet.
                get_template_part('content', 'none');
            }
        ?>
    </main>
</div>

<?php
get_footer();
?>