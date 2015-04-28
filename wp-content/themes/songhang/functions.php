<?php 

add_action('admin_enqueue_scripts', 'iz_admin_css');
function iz_admin_css(){
    wp_register_style('iz_admin_css', get_template_directory_uri().'/css/iz_admin.css');
    wp_enqueue_style('iz_admin_css');
}

function iz_add_support(){
   add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    if(!is_admin()){
        show_admin_bar(false);
    }
}

add_action('after_setup_theme', 'iz_add_support');


function iz_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'footer-1', 					// Make an ID
		'name' => 'Footer 1',	
	));
        register_sidebar(array(
            'id' => 'footer-2',
            'name' => 'Footer 2',
        ));
        
        register_sidebar(array(
            'id' => 'footer-3',
            'name' => 'Footer 3',
        ));
        
        register_sidebar(array(
            'id' => 'footer-4',
            'name' => 'Footer 4',
        ));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'iz_register_sidebars' );

//

/* function cwd_wp_bootstrap_scripts_styles() {

	wp_enqueue_script('jquery', get_stylesheet_directory_uri().'/js/jquery-1.11.2.min.js', array(),'1.11.2', true );
	wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri().'/js/bootstrap.min.js', array(),'3.3.4', true );
	wp_enqueue_style('bootstrapwp', get_stylesheet_directory_uri().'/css/bootstrap.min.css', false ,'3.3.4');
	
}
add_action('wp_enqueue_scripts', 'cwd_wp_bootstrap_scripts_styles'); */

//
if (!function_exists('cwd_wp_bootstrapwp_theme_setup')) :
	function cwd_wp_bootstrapwp_theme_setup() {
		// Adds the main menu
		register_nav_menus(array(
			'main-menu' => __('Main Menu', 'cwd_wp_bootstrapwp'),
		));
	}
endif;
add_action('after_setup_theme', 'cwd_wp_bootstrapwp_theme_setup');

//
if (!function_exists('wp_navbar_ticket')) :
	function wp_navbar_ticket() {
		// Adds the main menu
		register_nav_menus(array(
			'ticket-menu' => 'Ticket Menu',
		));
	}
endif;
add_action('after_setup_theme', 'wp_navbar_ticket');

//
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "<ul class='dropdown-menu' role='menu'>";
	}
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "</ul>";
	}
}

function clean_custom_menus_ticket() {
	$menu_name = 'ticket-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div class="row sh-row ticket-cat">';
		foreach ((array) $menu_items as $key => $menu_item) {
			$id = $menu_item->ID;
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_item_parent = $menu_item->menu_item_parent;
			if($menu_item_parent == 0){
				$menu_list .= '<div class="col-sm-6 col-md-3 sh-col">
											<div class="container-fluid">
												<div class="row">
													<div class="col-md-12 sh-title-content">
														<a href='.$url.'>'.$title.'</a>
													</div>
												</div>
											</div>
											<div class="sh-book-ticket-encircled">';
				foreach ((array) $menu_items as $menu_sub_item) {
					$sub_title = $menu_sub_item->title;
					$sub_url = $menu_sub_item->url;
					$sub_menu_item_parent = $menu_sub_item->menu_item_parent;
					if($sub_menu_item_parent == $id){
						$menu_list .= '<div class="row sh-list-ticket">
											<div class="col-md-12">
												<div class="">
													<a href='.$sub_url.'>'.$sub_title.'</a>
												</div>
											</div>
										</div>';
					}
				}
				$menu_list .= '</div></div>'; 
			}
		}

		$menu_list .= '</div>';
	} else {
		//$menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

//
if (!function_exists(wp_navbar_footer)) :
	function wp_navbar_footer() {
		// Adds the main menu
		register_nav_menus(array(
			'footer-menu' => 'Footer Menu',
		));
	}
endif;
add_action('after_setup_theme', 'wp_navbar_footer');


 
/**
@ Hàm hiển thị tiêu đề của post trong .entry-header
@ Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
@ Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
@ sh_entry_header()
**/
if ( ! function_exists('sh_entry_header')) {
	function sh_entry_header() {
		if (is_single()) : ?>
 
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>
	  
		<?php else : ?>
	
			<h2 class="entry-title">
				<?php the_title(); ?>
			</h2>
		<?php
		endif;
	}
}
 
/**
@ Hàm hiển thị thông tin của post (Post Meta)
@ sh_entry_meta()
**/
if( ! function_exists( 'sh_entry_meta' ) ) {
	function sh_entry_meta() {
		if ( is_single() ) :
			echo '<div class="entry-meta">';
                        
			printf( __('<span class="date-published">Ngày đăng: %1$s</span>', 'sh'),
			get_the_date() );
 
			printf( __('<span class="category"> trong %1$s</span>', 'sh'),
			get_the_category_list( ', ' ) );
 
			echo '</div>';
		endif;
	}
}
 
/**
@ Hàm hiển thị nội dung của post type
@ Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
@ Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
@ sh_entry_content()
**/
if ( ! function_exists( 'sh_entry_content' ) ) {
	function sh_entry_content() {
 
		if ( ! is_single() ) :
			the_excerpt();
		else:
			the_content();
			/*
			* Code hiển thị phân trang trong post type
			*/
			$link_pages = array(
				'before' => __('<p>Page:', 'sh'),
				'after' => '</p>',
				'nextpagelink'     => __( 'Next page', 'sh' ),
				'previouspagelink' => __( 'Previous page', 'sh' )
				);
			wp_link_pages( $link_pages );
		endif;
	}
}
 
/**
@ Hàm hiển thị tag của post
@ sh_entry_tag()
**/
if ( ! function_exists( 'sh_entry_tag' ) ) {
	function sh_entry_tag() {
		if ( has_tag() ) :
			echo '<div class="entry-tag">';
			printf( __('Tagged in %1$s', 'sh'), get_the_tag_list( '', ', ' ) );
			echo '</div>';
		endif;
	}
}

// Register Custom Post Type
function create_post_type_tour() {
	$labels = array(
		'name'                => __( 'Các Tour', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => __( 'Tour', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Tour', 'text_domain' ),
		'name_admin_bar'      => __( 'Tour', 'text_domain' ),
		'parent_item_colon'   => __( 'Tour', 'text_domain' ),
		'all_items'           => __( 'Tất cả các Tour', 'text_domain' ),
		'add_new_item'        => __( 'Thêm Tour mới', 'text_domain' ),
		'add_new'             => __( 'Thêm Tour mới', 'text_domain' ),
		'new_item'            => __( 'Tour mới', 'text_domain' ),
		'edit_item'           => __( 'Sửa Tour', 'text_domain' ),
		'update_item'         => __( 'Cập nhật Tour', 'text_domain' ),
		'view_item'           => __( 'Xem Tour', 'text_domain' ),
		'search_items'        => __( 'Tìm kiến', 'text_domain' ),
		'not_found'           => __( 'Không có Tour', 'text_domain' ),
		'not_found_in_trash'  => __( 'Không có Tour', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'tour', 'text_domain' ),
		'description'         => __( 'Tour Du Lịch', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-location-alt',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'tour', $args );
        
        register_post_type('reg_tour', array(
        'labels' => array(
            'name' => 'Tour Đăng ký',
            'add_new' => false,
            'singular_name' => 'Tour Đăng ký',
            'edit_item' => 'Chỉnh sửa',
            'all_items' => 'Tất cả Tour Đăng ký',
            'view_item' => 'Xem Tour Đăng ký',
            'menu_name' => 'Tour Đăng ký'
        ),
        'description' => 'Các Tour được khách hàng đăng ký',
        'supports' => array(
            'title'
        ),
        'hierarchical' => true,
        'has_archive' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-visibility',
    ));
        
        
        register_post_type('ticket', array(
        'labels' => array(
            'name' => 'Vé',
            'add_new' => 'Thêm Vé',
            'singular_name' => 'Vé',
            'edit_item' => 'Sửa Vé',
            'all_items' => 'Tất cả Vé',
            'view_item' => 'Xem Vé',
            'menu_name' => 'Vé'
        ),
        'description' => 'Vé trong nước, ngoài nước, vé theo loại...',
        'supports' => array(
            'title', 'editor', 'excerpt', 'thumbnails'
        ),
        'hierarchical' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-tickets-alt',
    ));
    register_taxonomy('ticket_cat', 'ticket', array(
        'labels' => array(
            'name' => 'Danh mục Vé',
            'singular_name' => 'Danh mục vé',
            'add_new' => 'Thêm danh mục mới',
            'new_item_name' => 'Danh mục vé mới',
            'add_new_item' => 'Thêm danh mục mới'
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewirte' => array('slug' => 'loai-ve'),
        'query_var' => true
    ));
}

// Hook into the 'init' action
add_action( 'init', 'create_post_type_tour', 0 );

// Register Custom Taxonomy
function custom_taxonomy_category_tour() {
	$labels = array(
		'name'                       => _x( 'Các Loại Tour', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Loại Tour', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Loại Tour', 'text_domain' ),
		'all_items'                  => __( 'Tất cả các Loại Tour', 'text_domain' ),
		'parent_item'                => __( 'Loại Tour', 'text_domain' ),
		'parent_item_colon'          => __( 'Loại Tour', 'text_domain' ),
		'new_item_name'              => __( 'Loại Tour mới', 'text_domain' ),
		'add_new_item'               => __( 'Thêm Loại Tour', 'text_domain' ),
		'edit_item'                  => __( 'Sửa Loại Tour', 'text_domain' ),
		'update_item'                => __( 'Cập Nhật Loại Tour', 'text_domain' ),
		'view_item'                  => __( 'Xem Loại Tour', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'tour-category', array( 'tour' ), $args );

}
// Hook into the 'init' action
add_action( 'init', 'custom_taxonomy_category_tour', 0 );

//
add_action("admin_init", "admin_init");

function admin_init(){
	add_meta_box("dat-time-meta", "Thời Gian", "datetime_meta", "tour", "side", "low");
	add_meta_box("seat-meta", "Số Chỗ Còn Lại", "seat_meta", "tour", "side", "low");
	
	add_meta_box("price-meta", "Giá", "price_meta", "tour", "side", "low");
	add_meta_box("price-sale-meta", "Giá Khuyến Mại", "price_sale_meta", "tour", "side", "low");
}
 
function datetime_meta(){
	global $post;
	$custom = get_post_custom($post->ID);
	$datetime = $custom["datetime"][0];
	?>
	<label>Thời Gian:</label>
	<input name="datetime" type="text" value="<?php echo $datetime; ?>" />
	<?php
}
 
function seat_meta() {
	global $post;
	$custom = get_post_custom($post->ID);
	$seat = $custom["seat"][0];
	?>
	<label>Số Chỗ Còn Lại:</label>
	<input name="seat" type="number" min="0" value="<?php echo $seat; ?>" />
	<?php
}

function price_meta() {
	global $post;
	$custom = get_post_custom($post->ID);
	$price = $custom["price"][0];
	?>
	<label>Giá:</label>
	<input name="price" type="text" min="0" value="<?php echo $price; ?>" />
	<?php
}

function price_sale_meta() {
	global $post;
	$custom = get_post_custom($post->ID);
	$price_sale = $custom["price_sale"][0];
	?>
	<label>Giá Khuyến Mại:</label>
	<input name="price_sale" type="text" min="0" value="<?php echo $price_sale; ?>" />
	<?php
}

add_action('save_post', 'save_details');

function save_details($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'tour' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }
    // Make sure that it is set.
    
    update_post_meta($post_id, "datetime", $_POST["datetime"]);
    update_post_meta($post_id, "seat", $_POST["seat"]);
    update_post_meta($post_id, "price", $_POST["price"]);
    update_post_meta($post_id, "price_sale", $_POST["price_sale"]);
}

//custom title for reg tour
//add_filter('wp_insert_post_data', 'iz_custom_title_insert');
//function iz_custom_title_insert($data, $postattr){
//    $data['post_title'] = 'Đăng ký tour - '.$data['post_title'];
//    return $data;
//}

function save_details_old(){
	global $post;
 
	update_post_meta($post->ID, "datetime", $_POST["datetime"]);
	update_post_meta($post->ID, "seat", $_POST["seat"]);
	update_post_meta($post->ID, "day_left", $_POST["day_left"]);
	update_post_meta($post->ID, "price", $_POST["price"]);
	update_post_meta($post->ID, "price_sale", $_POST["price_sale"]);
}

add_action("manage_posts_custom_column",  "tour_custom_columns");
add_filter("manage_edit-tour_columns", "tour_edit_columns");
 
function tour_edit_columns($columns){
	$columns = array(
		"cb" => "<input type='checkbox' />",
		"title" => "Tour Title",
		"category" => "Loại Tour",
		"datetime" => "Thời Gian",
		"seat" => "Chỗ Còn Lại",
		"price" => "Giá",
		"price_sale" => "Giá Khuyến Mại",
	);
 
	return $columns;
}
function tour_custom_columns($column){
	global $post;
 
	switch ($column) {
		case "category":
			echo get_the_term_list($post->ID, 'tour-category', '', ', ','');
			break;
		case "datetime":
			$custom = get_post_custom();
			echo $custom["datetime"][0];
			break;
		case "seat":
			$custom = get_post_custom();
			echo $custom["seat"][0];
			break;
		case "price":
			$custom = get_post_custom();
			echo $custom["price"][0];
			break;
		case "price_sale":
			$custom = get_post_custom();
			echo $custom["price_sale"][0];
			break;
	}
}

//show pending number
function show_pending_number($menu) {    
    $types = array('reg_tour');
    $status = "pending";
    foreach($types as $type) {
        $num_posts = wp_count_posts($type, 'readable');
        $pending_count = 0;
        if (!empty($num_posts->$status)) $pending_count = $num_posts->$status;

        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type=' . $type;
        }

        foreach( $menu as $menu_key => $menu_data ) {
            if( $menu_str != $menu_data[2] )
                continue;
            $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'><span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
            }
        }
    return $menu;
}
add_filter('add_menu_classes', 'show_pending_number');



