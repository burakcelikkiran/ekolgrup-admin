<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Sivil Hava Limanı Güvenliği</title>
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
                                <h2 class="text-center">Sivil Hava Limanı Güvenliği</h2>
                                <p>Güvenlik, sadece içinde bulunduğumuz zaman diliminde değil, üzerinde yaşadığımız dünyamızda, insanlık tarihinden itibaren yaşamış olan insan topluluklarının en önemli vazgeçilmez ihtiyacı olarak görüle gelmiştir.

                                    Günümüzde, her alan ve sektördeki bina ve tesislerin kendisine has güvenlik ihtiyaçları vardır ve bu ihtiyacın etkili bir şekilde karşılanmasıyla üretim ve hizmet grafiğinin yükselmesine katkıda bulunulduğu tecrübelerle görülmüştür.

                                    Sivil hava limanı güvenliği alanında uzman kişiler ile sizlere en iyi hizmeti sağlıyoruz.</p>
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