<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title('-', true, 'right'); bloginfo('name') ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <?php wp_head() ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">

    <script src="<?php echo get_template_directory_uri() ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/bower_components/jquery-transition/jquery.transition.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/common.js"></script>
</head>

<body>

    <div class="container">
        <div class="col-xs-12 header">
            <div class="container-fluid">
                <div class="col-xs-8">
                    <a href="<?php echo home_url() ?>" class="logo pull-left"><div id="logo"></div></a>
                    <div class="box-vk pull-right">
                        <div class="we-in-vk">Мы в контакте <span class="vk-icon"></span></div>
                        <div class="arrow-to-vk"></div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="box-callback pull-right">
                        <div class="phone"><span class="glyphicon glyphicon-earphone"></span>+7(912)28-59-133</div>
                        <button id="callback" class="btn btn-success btn-block">Обратный звонок</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 box-main-menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary', 
                'menu_class' => 'nav navbar-nav', 
                'container_class' => 'main-menu',
                'menu_id' => 'main_menu'
            )) ?>
            <script>app._navItemCorrect();</script>
        </div>
    </div>
    