<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Ülke Sınır Güvenlik</title>
    <?php include ('head.php')?>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="">
    </div>
    <div class="page-wrapper">
        <div class="ic-sayfa">
        <?php include ('header.php')?>
        </div>
        <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Hizmetlerimiz</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-4 col-lg-8">
                        <?php include ('menu-sinir-guvenligi.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Misyon Vizyon</h2>
                                <p>Stratejik öneme sahip tesislerin&nbsp;(Enerji Santralleri, Havaalanları, Limanlar, Alışveriş merkezleri, Spor tesisleri) bomba ve diğer terör tehditlerine karşı risk analizlerinin yapılması, ihtiyaçlarının belirlenmesi, gerekli cihaz ve ekipmanların temin edilmesi, personelin ihtiyaç duyulan eğitimlerinden geçirilmesi ve danışmanlık hizmeti vermektir.</p>

                                <p>Yurt dışında, Türkiye Cumhuriyeti Devleti’nin stratejik ortağı olan devletlere talepleri doğrultusunda, uzmanlık alanlarımızla ilgili konularda danışmanlık hizmeti vermektir.</p>

                            </div>

                        </div>
                    </div>
                    <!--End Services Details Content-->
                </div>
            </div>
        </section>

        <?php include ('footer.php')?>
        <?php include ('mobile-nav.php')?>
        <?php include ('script.php')?>
    </div><!-- /.page-wrapper -->
</body>

</html>