<?php 
    //Login White Label
    function login(){ ?>
        <style>
            .login {
                background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/image/bg);   
                background-size:  100% 100%;
                }
            #login h1 a, .login h1 a {
                display : none;
                } 
        </style>
<?php }
    add_action('login_enqueue_scripts','login');


    //Load Script (CSS)
    function load_file(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'load_file');


    //Dashboard
    function remove(){
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  //Recent Drafts
        remove_meta_box('dashboard_primary', 'dashboard', 'side');   //WordPress blog 
        remove_meta_box('dashboard_site_health', 'dashboard', 'normal'); //Site Health 
    }

    add_action('wp_dashboard_setup', 'remove');


    //Menu
    function menu(){
        register_nav_menu(
            'main_menu', __('Menu Utama', 'theme-slug')
        );

        //Add featured image
        add_theme_support('post-thumbnails');
        add_image_size('small-thumb', 170, 170, true);
        add_image_size('vid-thumb', 500);

         //Add Post Format
         add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'));
    }

    add_action('after_setup_theme', 'menu' );



    //Excerpt Content

    function get_excerpt_length(){
        return 5;
    }
    function return_excerpt_text(){
        return '';
    }

    add_filter('excerpt_more', 'return_excerpt_text');
    add_filter('excerpt_length', 'get_excerpt_length');
?>

<?php 
    //Custom Post
    add_action('init','custom_post');

    function custom_post(){
        register_post_type('dunia',
            array(
                'labels'      => array(
                    'name'          => __('Dunia', 'Dunia'),
                    'singular_name' => __('Dunia', 'Dunia'),
                    'add_new_item'  => __('Add New Dunia'),
                    'edit_item'     => __('Edit Dunia'),
                    'all_items'      => __('All Dunia')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'dunia/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'dunia', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('indonesia',
            array(
                'labels'      => array(
                    'name'          => __('Indonesia', 'Indonesia'),
                    'singular_name' => __('Indonesia', 'Indonesia'),
                    'add_new_item'  => __('Add New Indonesia'),
                    'edit_item'     => __('Edit Indonesia'),
                    'all_items'      => __('All Indonesia')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'indonesia/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'indonesia', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('piala-dunia',
            array(
                'labels'      => array(
                    'name'          => __('Piala Dunia', 'Piala Dunia'),
                    'singular_name' => __('Piala Dunia', 'Piala Dunia'),
                    'add_new_item'  => __('Add New Piala Dunia'),
                    'edit_item'     => __('Edit Piala Dunia'),
                    'all_items'      => __('All Piala Dunia')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'piala-dunia/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'piala-dunia', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('inggris',
            array(
                'labels'      => array(
                    'name'          => __('Inggris', 'Inggris'),
                    'singular_name' => __('Inggris', 'Inggris'),
                    'add_new_item'  => __('Add New Inggris'),
                    'edit_item'     => __('Edit Inggris'),
                    'all_items'      => __('All Inggris')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'inggris/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'inggris', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('spanyol',
            array(
                'labels'      => array(
                    'name'          => __('Spanyol', 'Spanyol'),
                    'singular_name' => __('Spanyol', 'Spanyol'),
                    'add_new_item'  => __('Add New Spanyol'),
                    'edit_item'     => __('Edit Spanyol'),
                    'all_items'      => __('All Spanyol')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'spanyol/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'spanyol', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('video',
            array(
                'labels'      => array(
                    'name'          => __('Video', 'Video'),
                    'singular_name' => __('Video', 'Video'),
                    'add_new_item'  => __('Add New Video'),
                    'edit_item'     => __('Edit Video'),
                    'all_items'      => __('All Video')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'video/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'video', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );


        register_post_type('foto',
            array(
                'labels'      => array(
                    'name'          => __('Foto', 'Foto'),
                    'singular_name' => __('Foto', 'Foto'),
                    'add_new_item'  => __('Add New Foto'),
                    'edit_item'     => __('Edit Foto'),
                    'all_items'      => __('All Foto')
                ),
                    'public'      => true,
                    'has_archive' => true,
                    'rewrite'     => array( 'slug' => 'foto/read' ),
                    'show_in_admin_bar' => true,
            )
        );
        add_post_type_support( 'foto', array(
            'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields','post-formats',
        ) );

    }
?>
        

<?php
    //Social Links
    function social_link( \WP_Customize_Manager $wp_customize ){
        $social_icons = ['facebook','instagram','twitter','youtube'];

        $wp_customize->add_section(
            'social_link',
                [
                    'title'  => esc_html__('Social Links','sosmed'),
                    'description'  => esc_html__('Social Links','sosmed'),
                ]
            );

        foreach ($social_icons as $social_icon) {
            $setting_id = sprintf('sos_%s_link', $social_icon);

            $wp_customize->add_setting(
                $setting_id,[
                    'default' => '',
                    'capability' => 'edit_theme_options',
                    'sanitize_callback' => 'esc_url',
                ]
            );

            $wp_customize->add_control(
                $setting_id,
                [
                    'label' =>  esc_html($social_icon),
                    'section' => 'social_link',
                    'settings' => $setting_id,
                    'type' => 'text',
                ]
            );
        }
    }
    add_action('customize_register', 'social_link');
?>