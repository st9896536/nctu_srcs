<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/image/favicon.ico" type="image/x-icon">
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <style media="screen">
            body {margin: 0;}
            .custom-404 {
                text-align: center;
                height: 100vh;
                background-image: url(<?php bloginfo('template_url'); ?>/image/p4.png);
                background-size: auto;
                background-repeat: repeat;
                height: 100vh;
            }
            .custom-404 > div {margin-top: 30vmin; display: inline-block;}
            .custom-404 h1, .custom-404 h2 {border: none; box-shadow: none; margin: 0; padding: 0;}
            .custom-404 h1 {font-size: 8.0em; text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);}
            .custom-404 h2 {font-size: 2.0em; line-height: 2.0em;}
        </style>

    </head>
    <body>
        <div class="custom-404">
            <div>
                <h1 class="error-title title">404</h1>
                <h2 class="error-message">Page not found</h2>
                <div class="error-content">
                    <p>The page you requested cannot be found.</p>
                    <p><a href="<?php echo site_url(); ?>"><span>Return to the Homepage</span></a></p>
                </div>
            </div>
        </div>

</html>
