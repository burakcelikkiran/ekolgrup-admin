<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Yakın Koruma</title>
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
                    <div class="col-xl-3 col-lg-8">
                        <?php include ('menu-korumaguvenlik.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content metin-hizala" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Yakın Koruma</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <img src="assets/doc/hizmet/koruma/zel-koruma.jpg" alt="" style="width: 100%">
                                    </div>
                                    <div class="col-md-6 col-sm-12">

                                        <p>Korunacak kişi için :</p>

                                        <ul>
                                            <li>Şoförün seçilmesi ve özel eğitime tabi tutulması</li>
                                            <li>Yakın koruma elemanlarının seçilmesi ve özel eğitime tabi tutulması</li>
                                            <li>Koruyucu olabilecek kişinin (bodyguard) seçimi ve özel eğitimden geçirilmesi</li>
                                            <li>Alarm merkezimizce elektronik takiplerin sağlanması</li>
                                        </ul>
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