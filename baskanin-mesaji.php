<!DOCTYPE html>
<html lang="tr">

<?php $page = 'kurumsal'; ?>

<head>
    <title>Ekol Grup - Başkanın Mesajı</title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Kurumsal</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-3 col-lg-8">
                        <?php include ('menu-hakkimizda.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content metin-hizala" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Başkanın Mesajı</h2>
                                <p>Ekol Şirketler Grubunun farklılığı ve en önemli avantajı, her geçen gün daha da güçlenerek ilerleyen eğitimli, azimli, ahlaklı ve nitelikli bireylerden oluşan kurumsal yapısıdır. Ekip olarak uzmanlığa odaklanır ve inanırız. Kurumsallığın sorumluluk, adil davranış ve hakkaniyetten ayrılmamak olduğuna inanır; stratejik amaçlar doğrultusunda hareket planları oluştururuz.</p>

                                <p>Ekol Grup Şirketleri Yönetimi olarak bir kurumunun temelinin, sürdürülebilirliğin ve kalitenin anahtarının o kurumu oluşturan çalışanlar olduğuna inanırız.</p>

                                <p>Kurumsal yapının şahıslara bağlı olmayıp, kendi kendini idare ettirebilecek seviyeye ulaşmış, kendi kendini yöneten şirket anlayışımızın bize her zaman sürdürülebilirliğin bir avantajı olacağının bilincindeyiz.</p>

                                <p>Ekol Grup Şirketleri olarak; emek ve katkılarıyla kurulduğu günden bugüne kadar bizi ileriye taşıyan çalışanlarımıza; uzun soluklu çözüm ortaklığı kurduğumuz müşterilerimize; iş ortaklarımıza; yöneticilerimize ve bize destek veren tüm kurum, kuruluş ve idarelere teşekkür ederim.</p>


                            </div>
                            <div class="services-details-img1">
                                <img style="width: 30%;" src="assets/doc/mnaci.jpg" alt="">
                                <p style=" margin-top: 10px;"><strong>Doç.Dr. Mehmet Naci EFE<br>
                                        Ekol Grup Şirketleri Yönetim Kurulu Başkanı</strong></p>
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