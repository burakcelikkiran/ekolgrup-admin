<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Stratejik Tesislerin Güvenliği Risk Analizi</title>
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
                                <h2 class="text-center">Stratejik Tesislerin Güvenliği Risk Analizi</h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <ul>
                                            <li>Havaalanları</li>
                                            <li>Limanlar</li>
                                            <li>Enerji Santralleri</li>
                                            <li>Spor tesisleri ve Stadyumlar</li>
                                            <li>AVM</li>
                                            <li>Halkın Yoğun Olduğu Miting ve Toplantılar</li>
                                            <li>Konserler ve Festivaller</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p><img alt="" class="img-responsive" height="140" src="assets/doc/hizmet/sinir/stratejik-tesisler-2_w262_h175.jpg" width="262">
                                            <img alt="" class="img-responsive" height="140" src="assets/doc/hizmet/sinir/stratejik-tesisler-3_w262_h175.jpg" width="262"></p>

                                    </div>
                                </div>
                                <p>&nbsp;</p>
                                <img alt="" class="img-responsive" src="assets/doc/hizmet/sinir/stratejik-tesisler-1.jpg" style="width: 100%" >

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