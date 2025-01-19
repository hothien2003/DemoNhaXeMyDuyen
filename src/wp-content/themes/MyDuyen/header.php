<?php
/**
 * The template for displaying the header
 * This is the template that displays all the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package nhaxemyduyen
 */

\defined( 'ABSPATH' ) || die;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php

	/**
     * Head
     *
	 * @see __wp_head - 1
     * @see __external_fonts - 10
	 */
        wp_head(); ?> <!-- Chèn các tài nguyên được nạp, bao gồm CSS -->
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <a href="page-home.php" class="logo">
                    <img src="/wp-content/themes/MyDuyen/assets/img/logo.png" alt="Mỹ Duyên Logo">
                </a>
                <div class="header-right">
                    <div class="number-contact-info">
                        <i class="fas fa-phone"></i>
                        <span>02862 77 55 44</span>
                    </div>
                    <div class="header-buttons">
                        <a href="page-thongtinve.php" class="btn btn-primary">TRA CỨU VÉ</a>
                        <a href="page-tracuudonhang.php" class="btn btn-primary">TRA CỨU ĐƠN HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-nav">
            <div class="container">
                <ul class="nav-links">
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-home.php">TRANG CHỦ</a></li>
                    <li><meta http-equiv="refresh" content="0;url=page-about.php">GIỚI THIỆU <i class="fa-solid fa-chevron-right" ></i></meta>
                        <ul class="sub-menu">
                            <li><meta http-equiv="refresh" content="0;url=page-about.php">VỀ CHÚNG TÔI</meta></li>
                            <li><a href="/wp-content/themes/MyDuyen/templates/page-hethong.php">HỆ THỐNG VĂN PHÒNG</a></li>
                        </ul>
                    </li>
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-Dichvu1.php">DỊCH VỤ <i class="fa-solid fa-chevron-right"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/wp-content/themes/MyDuyen/templates/page-Dichvu1.php">DỊCH VỤ VẬN TẢI HÀNH KHÁCH</a></li>
                            <li><a href="/wp-content/themes/MyDuyen/templates/page-Dichvu2.php">DỊCH VỤ VẬN TẢI HÀNG HÓA</a></li>
                        </ul>
                    </li>
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-thongtinve.php">TRA CỨU <i class="fa-solid fa-chevron-right"></i></a>
                        <ul class="sub-menu">
                            <li><a href="/wp-content/themes/MyDuyen/templates/page-thongtinve.php">TRA CỨU VÉ</a></li>
                            <li><a href="/wp-content/themes/MyDuyen/templates/page-tracuudonhang.php">TRA CỨU ĐƠN HÀNG</a></li>
                        </ul>
                    </li>
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-tintuc.php">TIN TỨC</a></li>
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-lienhe.php">LIÊN HỆ</a></li>
                    <li><a href="/wp-content/themes/MyDuyen/templates/page-tuyendung.php">TUYỂN DỤNG</a></li>
                </ul>
                <button class="search-toggle">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </nav>
    </header>
</body>
</html>

