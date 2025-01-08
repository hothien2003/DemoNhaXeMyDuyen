<?php
// Đăng ký menu chính
function myduyentheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'myduyentheme'),
        )
    );
}
add_action('after_setup_theme', 'myduyentheme_register_menus');

// Thêm hỗ trợ tính năng
function myduyentheme_setup() {
    add_theme_support('title-tag'); // Hỗ trợ tag tiêu đề
    add_theme_support('post-thumbnails'); // Hỗ trợ hình ảnh đại diện bài viết
}
add_action('after_setup_theme', 'myduyentheme_setup');

// Đăng ký sidebar (vùng chứa widget)
function myduyentheme_widgets_init() {
    register_sidebar(
        array(
            'name' => __('Sidebar', 'myduyentheme'),
            'id' => 'sidebar-1',
            'before_widget' => '<section>',
            'after_widget' => '</section>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'myduyentheme_widgets_init');
?>
<?php
// Nạp các tài nguyên cần thiết, bao gồm file CSS
function myduyentheme_enqueue_styles() {
    // Nạp style.css    
    wp_enqueue_style('myduyentheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'myduyentheme_enqueue_styles');


// Hàm để thêm hình ảnh từ thư mục 'assets/img'
function add_custom_image_path() {
    // Lấy đường dẫn đến thư mục img trong thư mục assets
    $img_path = get_template_directory_uri() . '/src/wp-content/themes/myduyentheme/assets/img';

    // Đảm bảo rằng URL của hình ảnh đã được chèn đúng
    wp_enqueue_style('custom-image-style', $img_path);
}

add_action('wp_enqueue_scripts', 'add_custom_image_path');

?>

