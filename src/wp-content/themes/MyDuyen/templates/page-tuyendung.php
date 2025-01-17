<?php 
/**
*The template for displaying 'recruitmentpage'
*Template Name: recruitment 
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
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/tuyendung.css">
</head> 
<body>
    <main>
        <div class="page-banner">
            <div>
                <h1>TUYỂN DỤNG</h1>
                <div class="breadcrumb">
                    <a href="/">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="#">TUYỂN DỤNG</a>
                </div>
            </div>
        </div>
        <div class="tuyendung-content">
            <div class="tuyendung-content-img">
                <img src="/wp-content/themes/MyDuyen/assets/img/tuyendung.png" alt="Tuyển dụng">
                <img src="/wp-content/themes/MyDuyen/assets/img/tuyendung1.png" alt="Tuyển dụng">
            </div>
        </div>
        
        <div class="job-description">
            <h2>MÔ TẢ CÔNG VIỆC</h2>
            <ul>
                <li>Lập kế hoạch, tổ chức triển khai thi công, giám sát đảm bảo tiến độ và chất lượng thi công.</li>
                <li>Quản lý tiến độ, quản lý chất lượng công trình.</li>
                <li>Bóc tách, chuẩn bị vật tư và kiểm soát vật tư thi công.</li>
                <li>Tính toán chi tiết để dự toán, lập đặt, ước tính chi phí lao động, vật liệu, thiết bị...</li>
                <li>Kiểm soát, giải quyết các vấn đề phát sinh trong quá trình thi công.</li>
                <li>Lập hồ sơ hoàn công cho công trình để quyết toán, nghiệm thu với bên A.</li>
                <li>Xác nhận chất lượng, khối lượng công việc của nhà thầu phụ.</li>
                <li>Tham gia hỗ trợ các phòng Ban lập hồ sơ dự thầu, hồ sơ hoàn công, quyết toán các công trình.</li>
                <li>Các việc phát sinh khác tại hiện trường.</li>
                <li>Chi tiết công việc sẽ được trao đổi làm rõ khi phỏng vấn.</li>
            </ul>
            <h2>YÊU CẦU</h2>
            <ul>
                <li>Tốt nghiệp các trường đại học chuyên ngành Điện, xây dựng hoặc các ngành có liên quan.</li>
                <li>Thành thạo nghiệp vụ thi công, đọc hiểu thiết kế bản vẽ thi công các công trình xây dựng, điện, M&E và các lĩnh vực khác liên quan.</li>
                <li>Thành thạo tin học văn phòng và các phần mềm Autocad, Project, phần mềm lập dự toán/quyết toán...</li>
                <li>Có kinh nghiệm 3 năm trở lên trong lĩnh vực trên và ưu tiên đã tham gia ít nhất 01 dự án.</li>
                <li>Làm việc độc lập, tinh thần trách nhiệm cao, đối ngoại tốt.</li>
                <li>Sẵn sàng đi công tác các tỉnh thành.</li>
                <li>Ưu tiên có chứng chỉ "Chỉ huy trưởng".</li>
                <li>Độ tuổi: Từ 25-34 tuổi.</li>
            </ul>
        
            <h2>SỐ LƯỢNG VÀ NƠI LÀM VIỆC</h2>
            <ul>
                <li>2 người (1 Hà Nội, 1 HCM)</li>
            </ul>
        
            <h2>QUYỀN LỢI</h2>
            <ul>
                <li>Mức lương từ 14.000.000 đồng - 18.000.000 đồng + thưởng % công trình cuối năm thưởng Lễ, Tết.</li>
                <li>Được đào tạo các kiến thức căn bản và huấn luyện chuyên sâu.</li>
                <li>Lương, thưởng cạnh tranh, tùy theo năng lực và kinh nghiệm.</li>
                <li>Hưởng đầy đủ các chế độ BHXH - BHYT - BHTN theo Luật lao động và quy chế công ty.</li>
                <li>Hưởng các chế độ ưu đãi khác của Công ty: team building, sinh nhật ...</li>
            </ul>
        
            <h2>CÔNG TY CỔ PHẦN CETECCONS</h2>
            <ul class="company-info1">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Trụ sở chính: <span>số 37 - đường số 11 – phường 2 – quận phú nhuận – TP HCM</span>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    Điện thoại: <span>028 3848 0005</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    E-mail: <span>ceteccons.ce@gmail.com</span>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>

<?php
// footer
get_footer( 'page' );
