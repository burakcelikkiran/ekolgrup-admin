<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Okul Temizliği</title>
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
                                <h2 class="text-center">Okul Temizliği</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/okul-temizligi.jpg" style="width: 100%;">
                                <p>&nbsp;</p>

                                <p>MNE Temizlik ilkokuldan üniversiteye kadar, okudukları eğitim-öğretim kurumları içerisinde çocuklarımızın ve gençlerimizin sağlığının ne kadar önemli olduğunun farkındadır. İlk bakışta yalnızca sınıf ve koridor temizliği gibi basit görünse de en küçük alanlardan en büyüğüne kadar, çocukların ve gençlerin sağlığını tehdit eden, onların huzur ve düzen içinde okumalarına engel olan pek çok değişken mevcuttur.<br>
                                    <br>
                                    MNE Temizlik sınıflar, koridorlar, tuvaletler, merdivenlerden yüksek pencere ve camlara, bahçelere, çıplak ya da halıfleks zeminlere kadar her türlü alanın temizlik ve hijyenini sağlamakla beraber öğrenci, öğretmen ve çalışanların okul hayatlarını etkileyecek çöp, atık malzeme, sakız ve benzeri materyalleri de ortadan kaldırmaktadır.<br>
                                    <br>
                                    Yalnızca ders ve çalışma alanlarının değil yatılı okulların, öğrenci yurtlarının, yatakhane ve kantinlerin temizliğini kapsayan kat hizmetlerinde de MNE Temizlik, yıllanmış tecrübesi sayesinde kusursuz hizmet vermektedir.</p>

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