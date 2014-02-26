<?php get_header() ?>

<?php the_post() ?>

<div class="container content">
    <div class="col-xs-12 content-slider"><?php echo do_shortcode('[smartslider2 slider="1"]') ?></div>
    <div class="col-xs-6 content-text"><?php the_content() ?></div>
    <div class="col-xs-3 content-picture">      
        <?php 
            if (has_post_thumbnail()) {
                echo get_the_post_thumbnail(null, array(340, 370));
            }
        ?>
    </div>
    <div class="col-xs-3 content-socblock">
        <script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>

        <!-- VK Widget -->
        <div id="vk_groups"></div>
        <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "370", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 20003922);
        </script>
    </div>
</div>

<?php get_footer() ?>