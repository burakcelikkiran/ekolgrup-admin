<!DOCTYPE html>
<html lang="tr">

<?php $page = 'kurumsal'; ?>

<head>
    <title>Ekol Grup - Hakkımızda</title>
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
                                <h2 class="text-center">Misyonumuz </h2>
                                <p>Uzmanlık alanımız olan özel güvenlik hizmetlerinde en iyisini ‘kalıcı’ ve ‘istikrarlı’ olarak vermek. Türk ahlakına, gelenek ve göreneklerine bağlı olarak karşılıklı anlayış ve sevgi saygı içerisinde modern dünya kalitesinde hizmet sunmak. Müşteri memnuniyetini esas alarak özel güvenliğe yönelik faydalı ve gelişime katkı sağlayıcı çözümler üretmek için bilimsel ve teknolojik faaliyetlerde bulunmak.</p>
                            </div>
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Vizyonumuz</h2>
                                <p>Bulunduğu ortamda güven, huzur ve barışı simgeleyen istikrarlı ve güvenilir müşteri ve çalışanları tarafından tercih edilen sektörün lideri ve sektöre yön veren uluslar arası arenada danışılan güvenlik firması olmaktır.</p>
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