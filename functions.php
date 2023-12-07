<?php
function custom_login() { 
?>
    <style type="text/css">
        body.login{
            background: #EDEAE4;
            display: flex;
            align-items: center;
        }

        body.login div#login{
            padding: 0;
        }

        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-bemy.png);
            height:48px;
            width:140px;
            background-size: 140px 48px;
            background-repeat: no-repeat;
        }

        body.login div#login form#loginform p.submit input#wp-submit {
            background: #F54F4F;
            border: 0;
        }
    </style>
<?php 
}

add_action( 'login_enqueue_scripts', 'custom_login' );


// Desactivate gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Desactivate gutenberg for custom post type
add_filter('use_block_editor_for_post_type', '__return_false', 10);