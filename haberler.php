<!DOCTYPE html>
<html lang="tr">

<?php $page = 'haberler'; ?>

<head>
    <title>Ekol Grup - Liderlik Akademisi</title>
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
                            <h2 class="text-center">Liderlik Akademisi</h2>
                            <p>Silifke Ticaret ve Sanayi Odası tarafından bu yıl üçüncüsü düzenlenen 'Liderlik Akademisi' etkinliğine Ekol Grup Şirketleri Yönetim Kurulu Başkanımız Sayın Doç. Dr. Mehmet Naci EFE Bey, Kurucu Ortağı ve Sosyal Bilimler Dekanı olduğu Uluslararası Gorazde Üniversitesi’ni temsilen katılmıştır.
                                <br><br>450 katılımcının bulunduğu bu organizasyon KKTC’de gerçekleştirilmiştir.
                                Organizasyon da Kuzey Kıbrıs Türk Cumhuriyeti Cumhurbaşkanı Sayın Ersin TATAR, Türkiye Odalar ve Borsalar Birliği Başkanı Sayın M. Rifat HİSARCIKLIOĞLU, Mersin Üniversitesi Rektörü Sayın Prof. Dr. Ahmet ÇAMSARI, Toros Üniversitesi Rektörü Sayın Prof. Dr. Ömer ARIÖZ, TOBB Ekonomi ve Teknoloji Üniversitesi Rektörü Sayın Prof. Dr. Yusuf SARINAY, Türkiye Ticaret ve Sanayi Odası Temsilcileri ve çeşitli üniversitelerden akademisyenler katılmıştır.
                                <br><br> Katılımcıların akademik ve sosyal etkinliklere katılarak mesleki ve kişisel bilgi-birikimlerini artırmaları, beşerî ve sosyal sermayelerine yatırım yapmaları hedeflenen bu organizasyonda Yönetim Kurulu Başkanımız Sayın Doç. Dr. Mehmet Naci EFE Bey de ‘Girişimcilik Ekosistemi’ üzerine konuşmalarını gerçekleştirmiş, CEOTEKMER Girişim Evi Teknoloji Geliştirme Merkezi’mizin faaliyet alanlarından bahsetmiştir.</p>
                            <div class="row pt-4">
                                <div class="col-md-12 col-sm-12">
                                    <img src="assets/doc/haber/liderlik4.jpg" style="width: 100%;">
                                </div>
                                <div class="col-md-4 col-sm-6 mt-3 text-center">
                                    <img src="assets/doc/haber/liderlik1.jpeg" style="width: 100%;">
                                </div>
                                <div class="col-md-4 col-sm-6 mt-3 text-center">
                                    <img src="assets/doc/haber/liderlik2.jpeg" style="width: 100%;">
                                </div>
                                <div class="col-md-4 col-sm-6 mt-3 text-center">
                                    <img src="assets/doc/haber/liderlik3.jpeg" style="width: 100%;">
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