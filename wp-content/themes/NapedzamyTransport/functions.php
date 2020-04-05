<?php
add_theme_support('menu');


function	register_my_menus()	{
		register_nav_menus(
				array(
						'header-menu'	=>	'Header	Menu',
						'extra-menu'	=>	'Extra	Menu'
				)
		);
}
add_action('init','register_my_menus');

//functions.php
function cl_scripts()
{
    //Add popper
  //  wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], null, true);
    //Add bootstrap
  //  wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['jquery', 'popper'], null, true);

    //Add botstrap styles
//    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');

    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/main.css', null, '1.0.0', 'all');

}
add_action('wp_enqueue_scripts', 'cl_scripts');
?>
