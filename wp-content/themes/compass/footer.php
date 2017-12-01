<div class="clear"></div>
<div class="footer">
    <?php
    /* A sidebar in the footer? Yep. You can can customize
     * your footer with four columns of widgets.
     */
    get_sidebar('footer');
    ?>
</div>
<div class="clear"></div>
<div class="bottom_footer_content">
    <div class="grid_16 alpha">         
        <div class="copyrightinfo">
            <p class="copyright"><a href="<?php echo esc_url('http://wordpress.org/'); ?>" rel="generator"><?php _e('Powered by WordPress', 'compass');
    ?></a>
                <span class="sep">&nbsp;|&nbsp;</span>
                <?php
                printf(__('%1$s by %2$s.', 'compass'), 'Compass', '<a href="'.esc_url( "http://inkthemes.com" ).'" rel="designer">InkThemes</a>');
                
                ?></p>
        </div>
    </div>
    <div class="grid_8 omega">
        <ul class="social_logos">			
            <?php if (compass_get_option('compass_rss') != '') { ?>
                <li class="rss"><a href="<?php echo compass_get_option('compass_rss'); ?>" alt="RSS" title="RSS" target="_blank"></a></li>
            <?php } 
            if (compass_get_option('compass_pinterest') != '') { ?>
                <li class="pn"><a href="<?php echo compass_get_option('compass_pinterest'); ?>" alt="Pinterest" target="_blank" title="Pinterest"></a></li>
            <?php }
            if (compass_get_option('compass_linkedin') != '') { ?>
                <li class="ln"><a href="<?php echo compass_get_option('compass_linkedin'); ?>" alt="Linked In" target="_blank" title="Linked In"></a></li> 
            <?php } ?>  

        </ul>  
    </div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<?php wp_footer(); ?>
</body>
</html>
