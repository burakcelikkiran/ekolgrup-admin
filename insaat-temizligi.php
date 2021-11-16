<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - İnşaat Sonrası Temizlik</title>
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
                                <h2 class="text-center">İnşaat Sonrası Temizlik</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/insaat-sonrasi-temizlik-hizmeti.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>
                                <p>Genel itibariyle fabrikalar gibi büyük üretim ve çalışma alanlarında ihtiyaç duyulsa da küçük ölçekli iş yerlerinde ve evlerde yapılan tadilat ya da inşaatların temizliği de son derece zahmetli olabiliyor.<br>
                                    <br>
                                    MNE Temizlik, ister yıkım ister üretim olsun, bütün tadilat ve inşaatların enkaz ve materyal temizliğini yapar.<br>
                                    <br>
                                    İnşaat sonrası temizliğini yalnız bu alanda sınırlamayan MNE Temizlik, yeni bitirilmiş inşaatların hemen her alanında cam, duvar ve zemin temizleme hizmetini de sunmaktadır.&nbsp;<br>
                                    <br>
                                    Özellikle yeni taşındığınız ev ve ofisinizin temizliğe ihtiyaç duyduğu durumlarda, alçı, kiremit ve taşların toparlanması, alanların dezenfekte edilmesi, zeminlerde kalan boya ve artıkların sökülmesi gibi konularda tüm Marmara Bölgesi`ne çalışmakta ve siz değerli müşterilerimizin layık olduğu ilgiyi göstermektedir.</p>
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