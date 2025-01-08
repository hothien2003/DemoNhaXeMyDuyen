<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?> <!-- Chèn các tài nguyên được nạp, bao gồm CSS -->
</head>
<body>
<header>
        <div class="header-top">
            <div class="container">
                <a href="/index.html" class="logo">
                    <img src="/html/assets/img/logo.png" alt="Mỹ Duyên Logo">
                </a>
                <div class="header-right">
                    <div class="number-contact-info">
                        <i class="fas fa-phone"></i>
                        <span>02862 77 55 44</span>
                    </div>
                    <div class="header-buttons">
                        <a href="thongtinve.html" class="btn btn-primary">TRA CỨU VÉ</a>
                        <a href="tracuudonhang.html" class="btn btn-primary">TRA CỨU ĐƠN HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-nav">
            <div class="container">
                <ul class="nav-links">
                    <li><a href="index.html">TRANG CHỦ</a></li>
                    <li><a href="about.html">GIỚI THIỆU <i class="fa-solid fa-chevron-right" ></i></a>
                        <ul class="sub-menu">
                            <li><a href="about.html">VỀ CHÚNG TÔI</a></li>
                            <li><a href="hethong.html">HỆ THỐNG VĂN PHÒNG</a></li>
                        </ul>
                    </li>
                    <li><a href="dichvu1.html">DỊCH VỤ <i class="fa-solid fa-chevron-right"></i></a>
                        <ul class="sub-menu">
                            <li><a href="dichvu1.html">DỊCH VỤ VẬN TẢI HÀNH KHÁCH</a></li>
                            <li><a href="dichvu2.html">DỊCH VỤ VẬN TẢI HÀNG HÓA</a></li>
                        </ul>
                    </li>
                    <li><a href="thongtinve.html">TRA CỨU <i class="fa-solid fa-chevron-right"></i></a>
                        <ul class="sub-menu">
                            <li><a href="thongtinve.html">TRA CỨU VÉ</a></li>
                            <li><a href="tracuudonhang.html">TRA CỨU ĐƠN HÀNG</a></li>
                        </ul>
                    </li>
                    <li><a href="tintuc.html">TIN TỨC</a></li>
                    <li><a href="lienhe.html">LIÊN HỆ</a></li>
                    <li><a href="/src/wp-content/themes/myduyentheme/tuyendung.php">TUYỂN DỤNG</a></li>
                </ul>
                <button class="search-toggle">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </nav>
    </header>
</body>
</html>