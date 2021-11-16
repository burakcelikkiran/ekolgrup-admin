<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Dış Cephe ve Cam Temizliği</title>
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
                        <?php include ('menu-temizlik.php')?> 
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Dış Cephe ve Cam Temizliği</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/dis-cephe-ve-cam-temizligi.jpg" style="width: 100%;" title="">
                                <p></p>
                                <p>MNE Temizlik modern mimarinin getirdiği ve özellikle büyük şirketlerde ya da iş hanlarında kullanılan, dış yüzeyi tamamen camlı, çok katlı giydirme binaların temizlik işlerini de profesyonel ekibi ve ekipmanı ile yapabilmektedir.<br>
                                    <br>
                                    Bu tür binaların gerek yüksekliği gerekse temizliğinin zorluğu nedeniyle platform, vinç, sepet ve asansör gibi ek donanımlara ihtiyaç duyulmaktadır. Bina sahiplerinin hem bir temizlik ekibi hem de donanım sağlaması aynı anda zor, zahmetli ve riskli olabilir.&nbsp;<br>
                                    <br>
                                    Bu tür ihtiyaçlarda, bina sahiplerinin özel talepleri de göz önüne alınarak MNE Temizlik tarafından gereken ekip ve donanım eksiksiz sağlanabilmekte, arzulanan kalitede temizlik ve hijyen hizmeti sunulabilmektedir.</p>
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