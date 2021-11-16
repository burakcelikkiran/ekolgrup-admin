<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Özel Hizmetler</title>
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
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Özel Hizmetler</h2>
                                <ul>
                                    <li>Tehdit değerlendirmesi</li>
                                    <li>Risk analizi</li>
                                    <li>Şirket hırsızlıkları ve yolsuzluklar</li>
                                    <li>Çevre kontrolü</li>
                                    <li>Sistem ve ekiplerin eğitimi ve kontrolu</li>
                                    <li>Güvenlik donanımları konusunda öneriler</li>
                                    <li>Kimyasal-biyolojik-radyolojik tehdit değerlendirmeleri</li>
                                    <li>Gözleme ve gözetlenmeye karşı önlemler</li>
                                    <li>Özel araştırma</li>
                                    <li>Güvenlik önlemleri hizmeti</li>
                                    <li>Uyuşturcu testleri</li>
                                    <li>Güvenlik yöntem ve sistemleri</li>
                                    <li>Afet ve acil durum hizmetleri olasılık planlamaları ve seminerler.&nbsp;</li>
                                </ul>
                                <p><br>
                                    <strong>Risk Analizi Değerlendirilmesi</strong><br>
                                    <br>
                                    Koruma altına alınmasına karar verilen kişi,kurum veya kuruluşa yönelebilecek muhtemel tehdit faktörleri incelenerek,alınacak karşı önlemlerin neler olduğunu öncelik sırası ile belirlemektir.<br>
                                    <br>
                                    &nbsp;</p>
                                <p>&nbsp;</p>

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