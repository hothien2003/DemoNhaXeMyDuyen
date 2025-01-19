<?php 
/**
*The template for displaying 'newspage'
*Template Name: news 
* Template Post Type: page 
*
* @author nhaxemyduyen
*/

\defined( 'ABSPATH' ) || die;

// header
get_header( 'page' );

if ( have_posts() ) {
	the_post();
}

if ( post_password_required() ) :
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
endif;
?>
<?php
the_content(); 
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mỹ Duyên - Dịch vụ vận chuyển</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/style.css">
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/tintuc.css">
</head> 
<body>
    <main>
        <div class="page-banner">
            <div>
                <h1>TIN TỨC</h1>
                <div class="breadcrumb">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">TIN TỨC</a>
                </div>
            </div>
        </div>
        <!-- Tin nổi bật -->
        <section class="featured-news container">
            <div class="main-news">
                <div class="news-card large">
                    <img src="/wp-content/themes/MyDuyen/assets/img/bus.png" alt="Bến xe khách">
                    <div class="news-content">
                        <h1>TIN MỚI NHẤT</h1>
                        <h2>BẾN XE KHÁCH VĨNH NIỆM LÀ BẾN XE ĐẦU TIÊN CỦA HẢI PHÒNG...</h2>
                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry...</p>
                        <a href="#" class="read-more"><i class="fa-solid fa-circle-arrow-right"></i>XEM THÊM</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Grid tin tức -->
        <section class="news-grid container">
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="/wp-content/themes/MyDuyen/assets/img/bus1.png" alt="Bến xe">
                <div class="news-content">
                    <h3>VÌ SAO TP.HCM DI DỜI 3 TUYẾN XE KHÁCH TỪ BẾN XE MIỀN ĐÔNG CŨ SANG BẾN MỚI</h3>
                    <p>Theo đó là một nguồn thông báo trong trong...</p>
                </div>
            </div>  
        </section>
    </main>
</body>
</html>

<?php
// footer
get_footer( 'page' );
