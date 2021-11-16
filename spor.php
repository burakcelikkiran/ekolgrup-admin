<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Spor</title>
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
                        <?php include ('menu-spor.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <div style="position:relative;padding-bottom:56.25%;padding-top:30px;height:0;overflow:hidden;"><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/NGSkXqL3AGI" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" width="640"></iframe></div>
                                <p>&nbsp;</p>

                                <p><strong>Spor</strong>

                                <p>Ümraniye`de 2008 Yılında faaliyete başlayan Ekol Spor Club en son teknoloji ile üretilmiş ve tasarlanmış spor aletleriyle profesyonel hizmet kalitesini ön planda tuttuğumuz,kurumsal yapı ile aile ortamını sizlere sunduğumuz tesisimiz ile hizmet vermekteyiz.<br>
                                    <br>
                                    Kardiovasküler egzersiz alanı, istasyon çalışma alanı, serbest ağırlık çalışma alanı, stüdyo dersleri, sauna, buhar banyosu, bioempedans testi gibi birçok hizmetimiz ile eğitimli tecrübeli personelimiz ile sağlıklı yaşamın kapılarını sizlere sunmaktayız.<br>
                                    <br>
                                </p>
                                <h5>Kulübümüz</h5>
                                <p>
                                    <br>
                                    - Inbody marka bilgisayarlı ölçüm cihazı( Yağ, kas, su, metabolizma)<br>
                                    - 10 adet koşu bandı&nbsp;<br>
                                    - 10 adet bisiklet<br>
                                    - 5 adet cross trainer<br>
                                    - 2 adet kürek<br>
                                    - 2 adet titreşimli masaj aleti<br>
                                    - 14 makineden oluşan kapalı devre istasyon alanı<br>
                                    - 15 adet spinning bisiklet<br>
                                    - Serbest ve ileri düzey ağırlık alanı<br>
                                    - Aerobic, pilates ve meditasyon stüdyosu<br>
                                    - Bay - Bayan Soyunma Odaları<br>
                                    - Sauna (Bay ve Bayan soyunma odalarında ayrı ayrı olmak üzere 2 adet)<br>
                                    - Buhar odası (Bay ve Bayan soyunma odalarında ayrı ayrı olmak üzere 2 adet)</p>

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