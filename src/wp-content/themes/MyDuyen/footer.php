<?php
/**
 * The template for displaying the footer.
 * Contains the body & html closing tags.
 *
 * @package nhaxemyduyen
 */

\defined( 'ABSPATH' ) || die;

?>

<footer>
        <div class="container">
            <div class="footer-content">
                <!-- Cột 1: Thông tin công ty -->
                <div class="footer-col company-info">
                    <img src="/wp-content/themes/MyDuyen/assets/img/logo.png" alt="Mỹ Duyên Logo" class="footer-logo">
                    <h3>CÔNG TY TNHH VẬN CHUYỂN<br>HÀNH KHÁCH MỸ DUYÊN</h3>
                    <p>Giấy chứng nhận đăng ký DN số 0300993856</p>
                    <p>Đại diện: Nguyễn Thị Mỹ Duyên</p>
                    
                    <div class="contact-info">
                        <ul>
                            <li><h4>Liên hệ</h4></li>
                            <li><p>Email: xekhachmyduyen0309@gmail.com</p></li>
                            <li><p>Tổng đài: 02862 77 55 44 - 0903 861 192</p></li>
                        </ul>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <!-- Cột 2: Menu khách hàng -->
                <div class="footer-col">
                    <h3>Khách hàng</h3>
                    <ul>
                        <li><a href="#">Đặt vé online</a></li>
                        <li><a href="#">Kiểm tra vé</a></li>
                        <li><a href="#">Tra cứu đơn hàng</a></li>
                        <li><a href="#">Chính sách vận chuyển</a></li>
                        <li><a href="#">Chính sách thanh toán</a></li>
                        <li><a href="#">Chính sách huỷ vé/đổi trả</a></li>
                        <li><a href="#">Chính sách bảo mật thông tin</a></li>
                        <li><a href="#">Chính sách bảo mật thanh toán</a></li>
                        <li><a href="#">Chính sách xử lý khiếu nại</a></li>
                    </ul>
                </div>

                <!-- Cột 3: Địa điểm -->
                <div class="footer-col locations">
                    <div class="location-group">
                        <h3><i class="fas fa-map-marker-alt"></i> TẠI SÓC TRĂNG</h3>
                        <ul>
                            <li>Trụ sở: Bến xe Trần Đề 1/5, Thị trấn Trần Đề, Trần Đề</li>
                            <li>VP Sóc Trăng: 38 Lê Duẩn, P. 3</li>
                            <li>VP Long Phú: Ấp 14, đường Đoàn Thế Trung, TT. Long Phú</li>
                            <li>VP Mỹ Tú: 170 ấp Ngoại Ô, TT. Huỳnh Hữu Nghĩa</li>
                            <li>VP Đại Ngãi: Ấp Phụng Tường 2, xã Long Phụng, Huyện Long Phú</li>
                        </ul>
                    </div>

                    <div class="location-group">
                        <h3><i class="fas fa-map-marker-alt"></i> TẠI HẬU GIANG</h3>
                        <ul>
                            <li>VP Ngã Bảy: Đường 3/2, Khu vực 5, Phường Ngã Bảy, TP. Ngã Bảy</li>
                        </ul>
                    </div>

                    <div class="location-group">
                        <h3><i class="fas fa-map-marker-alt"></i> TẠI CẦN THƠ</h3>
                        <ul>
                            <li>Bến xe Cần Thơ: 91B Nguyễn Văn Linh, Hưng Lợi, Ninh Kiều, Cần Thơ</li>
                        </ul>
                    </div>

                    <div class="location-group">
                        <h3><i class="fas fa-map-marker-alt"></i> TẠI SÀI GÒN</h3>
                        <ul>
                            <li>Bến xe Miền Tây: Phòng vé 16<br>395 Kinh Dương Vương, P. An Lạc, Q. Bình Tân</li>
                        </ul>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2024 Mỹ Duyên. Powered By HD Agency</p>
            <div class="footer-links">
                <a href="#">Website Terms of Use</a>
                <span>|</span>
                <a href="#">Privacy policy</a>
            </div>
        </div>
    </footer>
<?php wp_footer() ?>
</body>
</html>