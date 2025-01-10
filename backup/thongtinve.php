<?php get_header();  ?>

<main>
        <div class="page-banner">
            <div>
                <h1>TRA CỨU VÉ</h1>
                <div class="breadcrumb">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">TRA CỨU VÉ</a>
                </div>
            </div>
        </div>
    
        <!-- Phần content hiện tại -->
        <div class="ticket-check-container">
            <div class="ticket-check-content">
                <h1 class="title">Kiểm tra thông tin vé</h1>
                <p class="subtitle">Mỹ Duyên có văn phòng thuận tiện trên các khu vực xe chạy qua, có thể nhận vé và nhận hàng chuyển phát giữa Sóc Trăng – Sài Gòn</p>
    
                <form class="ticket-form" method="POST" action="">
                   
                        <div class="form-group">
                            <label for="ticket_id" style="font-weight: bold;">Mã vé</label>
                            <input type="text" id="ticket_id" name="ticket_id" placeholder="Nhập mã vé" required>
                        </div>
    
                        <div class="form-group">
                            <label for="phone" style="font-weight: bold;">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                        </div>
                    
                    <button type="submit" class="check-button">Kiểm tra vé</button>
                </form>
    
                <div class="instruction-steps">
                    <div class="step">
                        <h3>Bước 1. Nhập thông tin vé</h3>
                        <img src="/html/assets/img/Group 8313.png" alt="Bước 1">
                    </div>
                    <div class="step">
                        <h3>Bước 2. Kiểm tra vé</h3>
                        <img src="/html/assets/img/Group.png" alt="Bước 2">
                    </div>
                </div>
            </div>
        </div>
    </main>    
    
    <?php get_footer();  ?>
