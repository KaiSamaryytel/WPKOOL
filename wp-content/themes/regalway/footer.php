<div class="clear"></div>
<!--Start Footer-->
<div class="footer">
    <div class="eight columns alpha">
        &nbsp;
    </div>
    <div class="eight columns omega">
        <?php if (regalway_get_option('regalway_footertext') != '') { ?>
            <p class="copyright"><?php echo regalway_get_option('regalway_footertext'); ?></p>
        <?php } else { ?>
            <p class="copyright"><a href="<?php echo esc_url('https://www.inkthemes.com/market/frame-wordpress-theme/'); ?>" rel="nofollow">Regalway Theme</a> Powered by <a href="<?php echo esc_url('http://www.wordpress.org'); ?>">WordPress</a></p>
        <?php } ?>
    </div>
</div>
<!--End Footer-->
</div>
</div>
<!-- container -->
<?php wp_footer(); ?>
</body></html>