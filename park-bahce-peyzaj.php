<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Park Bahçe ve Peyzaj</title>
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
                                     <li><a href="park-bahce-peyzaj.php">Tüm Hizmetlerimiz <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Park Bahçe ve Peyzaj</h2>
                                <img src="assets/doc/hizmet/park-bahce-peyzaj.jpg" alt="" style="width: 100%;">
                                <p>Ekol Grup Şirketleri bünyesinde bulunan uzman peyzaj mimarı ve personelleri ile kamu veya özel sektöre ait yeşil alanların bakım, proje ve danışmanlık hizmetleri sunulmaktadır.<br>
                                    <br>
                                    MNE, müşterilerimizin daha mutlu olabileceği, ileriye dönük ve sisteme katılımcı bir ortam oluşturmak için ön çalışmaları karşılıklı paylaşıma sunmaktadır.<br>
                                    <br>
                                    Bu çerçevede, hedef kitleye en iyi tanıtım ve hizmeti sunarak, memnuniyeti en üst düzeye çıkaracak ön planlama tedbirleri alınmaktadır.</p>
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