<?php 
/**
*The template for displaying 'aboutpage'
*Template Name: About 
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
    <link rel="stylesheet" href="/wp-content/themes/MyDuyen/assets/css/about.css">
</head>

<body>
    <main>
        <!-- Banner Section -->
        <div class="page-banner">
            <div>
                <h1>VỀ CHÚNG TÔI</h1>
                <div class="breadcrumb">
                    <a href="/wp-content/themes/MyDuyen/templates/page-home.php">TRANG CHỦ</a>
                    <span>/</span>
                    <a href="/wp-content/themes/MyDuyen/templates/page-about.php">VỀ CHÚNG TÔI</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container">
            <!-- About Section -->
            <section class="about-section">
                <h2 class="section-title">Đôi nét về Mỹ Duyên</h2>
                <div class="content-wrapper">
                    <div class="left-column">
                        <div class="image-container-about">
                            <img src="/wp-content/themes/MyDuyen/assets/img/tin-tuc1.png" alt="My Duyen Bus" class="img-container1">
                        </div>
                        <div class="image-container-about">
                            <img src="/wp-content/themes/MyDuyen/assets/img/about1.png" alt="My Duyen Staff" class="img-container2">
                        </div>
                    </div>
                    <div class="center-column">
                        <div class="image-container-about">
                            <img src="/wp-content/themes/MyDuyen/assets/img/about2.png" alt="My Duyen Team" class="img-container3">
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="text-content">
                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>

                            <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum.</p>

                            <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="features-section">
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <h3>TẦM NHÌN</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old Richard.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-crosshairs"></i>
                        </div>
                        <h3>SỨ MỆNH</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old Richard.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-user-group"></i>
                        </div>
                        <h3>VĂN HÓA</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old Richard.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>CHIẾN LƯỢC</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years old Richard.</p>
                    </div>
                </div>
            </section>

            <!-- Team Section -->
            <section class="team-section">
                <div class="team-image">
                    <img src="/wp-content/themes/MyDuyen/assets/img/banner1.png" alt="Đội ngũ Mỹ Duyên">
                </div>
                <div class="team-description">
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC, making it over 2000 years old Richard. McClintock, a
                        Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin
                        words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
                        classical literature, discovered the undoubtable source.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                        fugit.</p>
                </div>
            </section>
        </div>
    </main>
</body>

</html>

<?php
// footer
get_footer( 'page' );
