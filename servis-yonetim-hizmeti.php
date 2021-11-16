<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Servis Yönetim Hizmetleri</title>
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
                        <div class="services-details__sidebar">
                            <div class="services-details__services-list-box wow fadeInUp animated" data-wow-delay="0.0s" data-wow-duration="1200ms">
                                <ul class="services-details__services-list list-unstyled">
                                     <li><a href="servis-yonetim-hizmeti.php">Tüm Hizmetlerimiz <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Servis Yönetim Hizmetleri</h2>
                                <img src="assets/doc/hizmet/tesis-yonetimi.jpg" alt="" style="width: 100%;">
                                <p>Rutin olmayan ve yılın belirli dönemlerinde yapılması gereken bir takım işler, firmaların ve çalışanların verimliliğini azalttığından, destek hizmet ihtiyacı oluşmaktadır. Bu bağlamda Grubumuz bünyesinde bulunan MNE Şirketi, tüm ihtiyaç sahiplerine; ofis boy, kurye, servis ve ikram personeli, danışma, host, hostes personeli, şoför, kurum içi lojistik hizmetleri, santral operatörü, yardımcı bayan vb. hizmetleri sunmaktadır.<br>
                                    <br>
                                    Kurum ve kuruluşlara destek hizmeti sağlamak, ofis, sekretarya ve idari personel için dönemsel/uzun vadeli kaynak tahsisi veya destek hizmetlerini veren MNE, faaliyetlere başlamadan önce mevcut-ihtiyaç hiyerarşisini analiz etmekte, Grubumuz bünyesinde bulunan akademisyenler tarafından yapılan değerlendirmeler, optimum personel, malzeme, zaman ve finansal kaynak olarak sahaya sunmaktadır.</p>
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