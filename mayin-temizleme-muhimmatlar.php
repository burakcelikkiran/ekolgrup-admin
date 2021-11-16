<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Mayın Temizleme ve Fabrikasyon Mühimmatlar Eğitimi</title>
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
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Mayın Temizleme ve Fabrikasyon Mühimmatlar</h2>
                                <p>&nbsp;</p>
                                <h5>Mayın Tesbit Temizleme ve İmha Teknikleri Kursu</h5>
                                <img alt="" class="img-responsive" height="140" src="assets/doc/hizmet/sinir/t6jhh564_w262_h175.jpg" width="262">
                                <p>&nbsp;</p>
                                <h5>El Yapımı Patlayıcı Maddeler Tanımlama ve İmha Teknikleri Kursu</h5>
                                <img alt="" class="img-responsive" height="140" src="assets/doc/hizmet/sinir/el-yapm-patlayc-2_w262_h175.jpg" width="262">
                                <p>&nbsp;</p>
                                <h5>Fabrikasyon Mühimmat Tanımlama ve İmha Teknikleri Kursu</h5>
                                <img alt="" class="img-responsive" height="140" src="assets/doc/hizmet/sinir/fabrikasyon-mhimmatlar-1_w262_h175.jpg" width="262">


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