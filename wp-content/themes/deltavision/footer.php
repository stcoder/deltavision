    <div id="footer">
        <div class="container">
            <div class="col-xs-4">
                <a href="<?php echo home_url() ?>" class="logo pull-left"><div id="logo-black"></div></a>
            </div>
            <div class="col-xs-6">
                <div class="box-callback pull-left">
                    <div class="phone"><span class="glyphicon glyphicon-earphone"></span>+7(912)28-59-133</div>
                    <a href="#">Контакты</a>
                </div>
            </div>
            <div class="col-xs-2">
                <p>© Delta Vision, 2014</p>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
    <script type="text/javascript">
        window.onresize = function() {
            app._navItemCorrect();
        };
    </script>
</body>
</html>