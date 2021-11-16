<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Halı ve Koltuk Yıkama</title>
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
                                <h2 class="text-center">Halı ve Koltuk Yıkama</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/hali-ve-koltuk-yikama.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>
                                <p>MNE Temizlik hizmetlerinin, standardın ötesinde ve üzerinde olduğunu söylemiştik. Bu yüzden hizmetlerini farklı mekanların dış ve iç yapılarıyla sınırlı tutmayan MNE Temizlik, ev ve iş yerlerinizdeki halı ve koltuklarınızın yıkanmasıyla da ilgilenmektedir.<br>
                                    <br>
                                    Koltuk, kanepe takımlarının ve halıların temizliğini herhangi bir taşımaya gerek kalmadan yerinde yapan firmamız, yapacağı yıkamayı koltuğun veya halının türüne ve kumaşına göre belirler. Söz konusu ürünün yapısına, kumaşına, cinsine ve rengine göre en uygun temizlik malzemesi ve aracını seçerek hiçbir zarar vermeden, aksine ilk günkü gibi yenilenmiş ve sağlıkla hijyenikleştirilmiş bir hale getirir.<br>
                                    <br>
                                    MNE Temizlik, hizmetten memnun kalınmadığı takdirde ücret iadesini garanti etmek suretiyle İstanbul`un tüm ilçelerinde koltuk ve halı temizliği hizmetini mükemmel şekilde vermektedir.</p>
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