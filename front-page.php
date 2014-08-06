<?php get_header(); ?>

<div class="container">
    <div class="page-header">
        <!-- <h1>Sticky footer with fixed navbar</h1> -->
        <h1>You have arrived</h1>
        <div class="text-right" style="float: right;padding-top: 20px;"><img src="<?php echo get_template_directory_uri(); ?>/dist/snoop.gif"></div>
    </div>
    <p class="lead">Looks like everything is working as it should.</p>
    <p>You are currently viewing the default <code>front-page.php</code> made by using Bootstrap's <code>Sticky footer with fixed navbar</code> template.</p>
    <p>You should probably run <code>420.phar</code> if you haven't already and set this theme up completely.</p>
    <p class="text-left" style="padding-top: 30px;font-weight: 700;">Good luck and have fun.</p>
    <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->
</div>

<?php get_footer(); ?>