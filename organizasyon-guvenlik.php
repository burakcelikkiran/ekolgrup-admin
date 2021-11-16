<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Organizasyon Güvenliği</title>
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
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Organizasyon Güvenliği</h2>
                                <p>Organizasyonlar, ofis binaları, sanayi tesisleri, depolar, alışveriş merkezleri, bankalar v.b. alanların içeriden veya dışarıdan maruz kalabileceği tüm riskleri ve tehdit unsurlarınından arındırmak için hizmetinizdeyiz.
                                    Kısa süreli organizasyonlarınızda, konser, parti, seminer gibi etkinliklerde tecrübeli elemanlarımızla hizmetinizdeyiz.
                                    Güvenlik risk değerlendirmesi, koruma ve gözetim, devriye, arama, yönlendirme, yakın koruma, VIP koruma, silahlı koruma, düşük profil koruma faaliyetleri ile organizasyonlarınıza destek veriyoruz.<br>
                                    Hizmetlerin verilmesinde yabancı dil bilen, halkla ilişkiler konusunda iletişimi güçlü yurt içi ve yurt dışı know-how eğitimi almış personeller ile görev yapılmaktadır.</p>
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