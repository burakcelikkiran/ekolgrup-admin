<!DOCTYPE html>
<html lang="tr">

<?php $page = 'haberler'; ?>

<head>
    <title>Ekol Grup - 1000 Şehit 1000 Su Kuyusu</title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Haberler</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-4 col-lg-8">
                        <div class="services-details__sidebar">
                            <div class="services-details__services-list-box wow fadeInUp animated" data-wow-delay="0.0s" data-wow-duration="1200ms">
                                <?php include ('menu-haber.php')?>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">1000 Şehit 1000 Su Kuyusu</h2>
                                <p>1000 şehit adına 1000 su kuyusu tanıtım ve imza töreni İçişleri Bakanımız Sn. Süleyman Soylunun katılımları ile gerçekleştirilmiştir.</p>

                                        <img src="assets/doc/haber/whatsapp-image-2020-07-10-at-192235.jpeg" style="width: 80%; padding-top: 50px;">



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