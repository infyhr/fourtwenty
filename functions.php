<?php
/**
 * This is the functions.php file. It's run every time a page is loaded.
 * This is used to register scripts, sidebars, widgets and so on.
 *
 * @reference http://codex.wordpress.org/Functions_File_Explained
 * @package fourtwenty
 */

/**
 * Require wp_bootstrap_navwalker.php. This is used to display the navigation
 * @link https://github.com/twittem/wp-bootstrap-navwalker
 */
require_once get_template_directory() . '/wp_bootstrap_navwalker.php';

/**
 * This is the "core hook".
 * It basically sets the basic theme options. You can extend this furthermore by reading the Codex.
 * @link http://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 * @see Make sure you expand this by adding your own options. You can always generate them using generatewp.com.
 */
add_action('after_setup_theme', function() {
    // Set up languages. You should always translate everything and keep it within .po files.
    load_theme_textdomain('underscores', get_template_directory() . '/languages');

    // Add theme support for Automatic Feed Links?
    add_theme_support('automatic_feed_links');
    // Add theme support for some post formats. You don't need these if you don't use them, of course.
    add_theme_support('post-formats', ['quote', 'image', 'video', 'link', 'aside']);
    // Add support for post thumbnails. This will be commented out if you don't need it.
    add_theme_support('post-thumbnails'); # testing...
    // Add support for "Semantic Markup". This will make the search utilize HTML5 elements.
    add_theme_support('html5', ['search-form']);

    // Register ONE navigation menu which will be primarily used for navigation.
    register_nav_menus(array(
        'navigation' => __('Primary navigation menu', 'fourtwenty'),
    ));

    // Debug
    add_filter('show_admin_bar', '__return_false');
});

/**
 * Register a simple sidebar. If your theme won't use widgets then you probably don't need this.
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
add_action('widgets_init', function() {
    register_sidebar(array(
        'name'          =>  __('Simple generic sidebar', 'fourtwenty'),
        'id'            =>  'simple-generic-sidebar',
        'description'   =>  __('Simple generic sidebar just to show some useless widgets.', 'fourtwenty'),
        'before_widget' =>  '<aside id="%1$s" class="widget %2$s">', // This is the markup that goes before a widget.
        'after_widget'  =>  '</aside>', // This is what goes after a widget.
        'before_title'  =>  '<h1 class="widget-title">', // The widget title will go between this tag
        'after_title'   =>  '</h1>' // And this tag.
    ));
});

/**
 * This loads javascript files. You should probably use this to load any other stylesheets (.css)
 * but you can also hardcode them in the head of the header.php which is what's done with 'style.css'
 * @link http://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 */
add_action('wp_enqueue_scripts', function() {
    // If a file jquery.min.js exists in dist/js/ it will be loaded instead the one from Google CDN.
    if(file_exists(get_template_directory() . '/dist/js/jquery.min.js')) {
        wp_enqueue_script('jquery-min', get_template_directory_uri() . '/dist/js/jquery.min.js', [], '2.1.1', true);
    }else {
        wp_enqueue_script('jquery-min', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', [], '1.11.0', true);
    }

    // Now load bootstrap.min.js
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/dist/js/bootstrap.min.js', [], 'v3.1.1', true);
});

/**
 * This function simplifies the post navigation mechanism.
 * Instead of copying and pasting usually similar HTML markup, you can simply call this function everywhere you need post navigation.
 * Of course, edit the HTML to make it suite your needs.
 */
function fourtwenty_post_navigation() {
    ?>
        <div class="post-navigation">
            <?php if(get_next_posts_link()): ?>
                <div class="post-previous"><?php next_posts_link(__('&laquo; Previous post', 'fourtwenty')); ?></div>
            <?php endif; ?>
            <?php if(get_previous_posts_link()): ?>
                <div class="post-next"><?php previous_posts_link(__('Next post &raquo;', 'fourtwenty')); ?></div>
            <?php endif; ?>
        </div>
    <?php
}

/**
 * You can use this function to get the time, date and the author.
 * It saves you from copying/pasting the same code again and again.
 * It also links directly to the post itself when clicked on (provides a simple permalink, hence the href).
 */
function fourtwenty_post_timestamp() {
    $date   = get_the_modified_date('j.n.Y'); # modified means to update the time when the post itself was updated.
    $time   = get_the_modified_date('H:i');

    $author = esc_url(get_author_posts_url(get_the_author_meta('ID')));

    echo '<span class="posted-on">' . sprintf(__('Posted on %s at %s by <a href="' . $author . '">%s</a>'), $date, $time, get_the_author()) . '</span>';
}


/**
 * Make the title a little bit prettier.
 * <Sitename> &bull; <action or description>
 */
add_filter('wp_title', function($title, $separator) { // $title = passed by reference.
    if(is_feed()) return $title;

    // Get page & pagination.
    global $page, $pagination;
    #$title = '';

    // Get the site title and the description.
    $site_title           = get_bloginfo('name', 'display');
    if(!$site_description = get_bloginfo('description', 'display')) { $description = ''; }

    // Are we at the frontpage? If so then use the site title and the description rather than the page indicator.
    if(is_home() || is_front_page()) {
        return $_title = $site_title . $separator . $site_description;
    }

    // Title of the website + page title.
    $_title = $site_title . $title;

    // if(($page >= 2 || $pagination >= 2) && !is_404()) {
    if($page >= 2 || $pagination >= 2) {
        $_title = $_title . $separator . __('Page: ' . $page, 'fourtwenty');
    }

    return $_title;
}, 10, 2);

?>