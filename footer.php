<?php
/**
 * Just a footer. Everything gets closed here and some information is display.
 * @package fourtwenty
 * @link http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 */
?>


<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4"><a href="http://wordpress.org"><?php _e('Proudly powered by WordPress *cough*', 'fourtwenty'); ?></a></div>
            <!-- You should probably remove this or note your theme... -->
            <div class="col-md-4 col-md-offset-4 text-right"><a href="https://github.com/infyhr/fourtwenty">Fourtwenty!</a></div>
        </div>
    </div>
</div>

<!-- All javascript gets called by wp_footer(); (Including Bootstrap) -->
<?php wp_footer(); ?>

</body>
</html>