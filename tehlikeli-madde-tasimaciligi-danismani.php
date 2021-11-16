<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Tehlikeli Madde Taşımacılığı Danışmanlığı</title>
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
                                <h2 class="text-center">Tehlikeli Madde Taşımacılığı Danışmanlığı</h2>
                                <p>Doğal özellikleri veya taşıma esnasındaki durumları sebebiyle, insanların hayvanların ve diğer canlıların sağlık ve hayatlarını, genel düzeni, can ve mal güvenliğini tehlikeye sokan maddelerin taşınması ile ilgili prosedürler hakkında danışmanlık hizmeti vermek.</p>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col-md-6 col-sm-12">
                                        <img alt="" class="img-responsive"  src="assets/doc/hizmet/sinir/tehlikeli-madde-tamacl_w500_h500.jpg" style="width: 85%">
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <img alt="" class="img-responsive"  src="assets/doc/hizmet/sinir/tehlikeli-madde-tamacl-2_w500_h500.jpg" style="width: 85%" >
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