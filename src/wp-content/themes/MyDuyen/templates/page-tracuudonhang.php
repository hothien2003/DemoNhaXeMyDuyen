<?php 
/**
*The template for displaying 'orderscheckpage'
*Template Name: orderscheck 
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
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mỹ Duyên - Dịch vụ vận chuyển</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/style.css">
</head>
<body>
<main>
        <div class="page-banner">
            <div>
                <h1>TRA CỨU ĐƠN HÀNG</h1>
                <div class="breadcrumb">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">TRA CỨU ĐƠN HÀNG</a>
                </div>
            </div>
        </div>
    
        <!-- Phần content hiện tại -->
        <div class="ticket-check-container">
            <div class="ticket-check-content">
                <h1 class="title">Kiểm tra thông tin đơn hàng</h1>
                <p class="subtitle">Mỹ Duyên có văn phòng thuận tiện trên các khu vực xe chạy qua, có thể nhận vé và nhận hàng chuyển phát giữa Sóc Trăng – Sài Gòn</p>
    
                <form class="ticket-form" method="POST" action="">
                   
                        <div class="form-group">
                            <label for="ticket_id" style="font-weight: bold;">Mã đơn hàng</label>
                            <input type="text" id="ticket_id" name="ticket_id" placeholder="Nhập mã vé" required>
                        </div>
    
                        <div class="form-group">
                            <label for="phone" style="font-weight: bold;">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                        </div>
                    
                    <button type="submit" class="check-button">Kiểm tra đơn hàng</button>
                </form>
    
                <div class="instruction-steps">
                    <div class="step">
                        <h3>Bước 1. Nhập thông đơn hàng</h3>
                        <img src="/wp-content/themes/MyDuyen/assets/img/Group3.png" alt="Bước 1">
                    </div>
                    <div class="step">
                        <h3>Bước 2. Kiểm tra đơn hàng</h3>
                        <img src="/wp-content/themes/MyDuyen/assets/img/Group4.png" alt="Bước 2">
                    </div>
                </div>
            </div>
        </div>
    </main> 
</body>
</html>

<?php
// footer
get_footer( 'page' );
