<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Entegre Tesis Yönetim Hizmetleri</title>
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
                                     <li><a href="entegre-tesis-yonetimi.php">Tüm Hizmetlerimiz <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Entegre Tesis Yönetim Hizmetleri</h2>

                                <img alt="" src="assets/doc/hizmet/entegre-tesis-yonetimi.jpg" style="width: 100%">

                                <p>Tesis Yönetim Şirketimizle; İş Merkezlerinde, Markalı Konut ve Residence Projelerinde, tüm yönetimsel işlevleri entegre bir şekilde yerine getirmekteyiz. Bu kapsamda ;
                                    <br>
                                    634 nolu Kat Mülkiyeti Kanununa uygun olarak bir işletme projesi oluşturmak,<br>
                                    <strong>Tesiste verilecek olan;</strong></p>

                                <ol>
                                    <li>Yönetim,&nbsp;</li>
                                    <li>Muhasebe,&nbsp;</li>
                                    <li>Güvenlik,&nbsp;</li>
                                    <li>Temizlik,&nbsp;</li>
                                    <li>Teknik Yönetim,</li>
                                    <li>Peyzaj ve bahçe Bakımı,</li>
                                    <li>Resepsiyon,&nbsp;</li>
                                    <li>Hukuksal Destek&nbsp;</li>
                                    <li>Hizmetlerini Ekol &amp;MNE Grup Şirketleri ile belirlemek, bütçelendirmesini yapmak,&nbsp;</li>
                                    <li>Tüm gelir-gider kalemlerine bağlı olarak yıllık bütçe ve aidat planları hazırlamak,&nbsp;</li>
                                    <li>Aidat toplama süreç ve sistemlerini belirlemek ve takip etmek,&nbsp;</li>
                                    <li>Görevlerini yerine getirmekteyiz.</li>
                                </ol>
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