<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Patlayıcı Madde Tespit Ekipmanları</title>
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
                                <h2 class="text-center">Patlayıcı Madde Tespit Ekipmanları</h2>
                                <ul>
                                    <li>X-Ray Cihazları</li>
                                    <li>Kapı Dedektörleri</li>
                                    <li>El Dedektörleri</li>
                                    <li>Koklama Dedektörleri</li>
                                    <li>Patlayıcı Madde Tespit Kit ve Cihazları</li>
                                </ul>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-4 col-sm-12">
                                        <img alt="" src="assets/doc/hizmet/sinir/ethhe_w500_h500.jpg" style="width: 100%">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img alt="" src="assets/doc/hizmet/sinir/efgwqf_w262_h175.jpg" style="width: 100%">

                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <img alt="" src="assets/doc/hizmet/sinir/6uj464j_w262_h175.jpg" style="width: 100%">
                                    </div>
                                </div>
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