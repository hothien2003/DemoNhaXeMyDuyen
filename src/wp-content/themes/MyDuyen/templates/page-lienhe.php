<?php 
/**
*The template for displaying 'contactpage'
*Template Name: contact 
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/style.css">
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/lienhe.css">
</head> 
<body>
    <main>
        <div class="page-banner">
            <div>
                <h1>LIÊN HỆ</h1>
                <div class="breadcrumb">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">LIÊN HỆ</a>
                </div>
            </div>
        </div>
        
        <div class="contact-container">
            <div class="contact-text">
                <h2>Need any kind of<br>fixhero help? <span>Send us a message</span></h2>
                <p>Proactively envisioned multimedia based expertise cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration.</p>
            </div>
            
            <div class="contact-form">
                <form action="" method="POST">
                    <div class="form-row">
                        <div class="input-group">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Họ và tên" required>
                        </div>
                        <div class="input-group">
                            <i class="fa-solid fa-mobile"></i>
                            <input type="tel" placeholder="Số điện thoại" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input-group1">
                        <i class="fa-regular fa-pen-to-square"></i>
                        <textarea placeholder="Ghi chú nội dung..." required ></textarea>
                    </div>
                    <button type="submit" class="submit-btn">
                        <i class="fa-regular fa-paper-plane"></i>
                        GỬI TIN NHẮN
                    </button>
                </form>
            </div>
        </div>
        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9190123228!2d106.61621932326341!3d10.74072515985486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752dd07f25309f%3A0x626e2974cf8a49be!2zQuG6v24geGUgTWnhu4FuIFTDonk!5e0!3m2!1svi!2s!4v1735613663985!5m2!1svi!2s" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </main>
</body>
</html>

<?php
// footer
get_footer( 'page' );
