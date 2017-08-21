<div class="footer-container">
    <footer class="wrapper">
        <a href="<?php bloginfo('rss2_url'); ?>" target="_blank" class="footer-menu">
        <i class="fa fa-rss fa-2x" aria-hidden="true"> </i>Sociale media</a>
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
        <a href="<?php echo get_page_link(83); ?>" id= "footertext">Disclaimer</a>
        <a href="<?php echo get_page_link(76); ?>" id= "footertext">Privacy Policy</a>
        <a href="<?php echo get_page_link(127); ?>" id= "footertext">Productiedossier</a>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
