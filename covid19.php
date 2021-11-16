<!DOCTYPE html>
<html lang="tr">

<?php $page = 'haberler'; ?>

<head>
    <title>Ekol Grup - Etkisini Sürdüren COVİD-19 Pandemisi</title>
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
                                <h2 class="text-center">Etkisini Sürdüren COVİD-19 Pandemisi</h2>
                               <div class="row pt-4">
                                    <div class="col-md-6 col-sm-12">
                                        <p>Küresel etkisini sürdüren COVİD-19 pandemisinde yaşanan kritik süreçte çalışanlarımızın, müşterilerimizin ve tüm toplumun sağlığını korumak en büyük önceliğimizdir.</p>
                                        <p>Bu bağlamda, EKOL Grup Şirketleri olarak İş Sürekliliği ve Acil Durum Eylem Planımız Bulaşıcı Hastalıklar (salgın) kapsamında revize edilerek güncellenmiştir.</p>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <img src="assets/doc/haber/indir.jpg" style="width: 100%;">
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