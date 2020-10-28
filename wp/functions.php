<?php 

function load_scripts(){
    wp_enqueue_script('script', get_template_directory_uri() . '/dist/all.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.5.3', true );
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', array(), '4.5.3', 'all' );
    
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), 1.0, 'all');}
    

add_action('wp_enqueue_scripts', 'load_scripts');

function portfolio_config(){ 
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu'
        )
    );
    add_theme_support('post-thumbnails' ); 
    add_theme_support('align-wide' ); 
} 
add_action('after_setup_theme', 'portfolio_config', 0);

function portfolio_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'About Me' ),
			'id'            => 'about-1',
			'description'   => __( 'Add widgets here to appear in my footer.'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'portfolio_widgets_init' );
