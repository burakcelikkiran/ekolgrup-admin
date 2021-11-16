<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Villa Ev Temizliği</title>
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
                                <h2 class="text-center">Villa Ev Temizliği</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/ev-temizligi.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>
                                <p>Özellikle şehir ve iş hayatının gürültüsü söz konusu olduğunda her insanın öncelikli huzur kaynağı, evidir. MNE Temizlik, bunun bilincinde olarak huzurunuzun ilk şartı olan temizlik ve hijyeni temin etmek için profesyonel kadrosu ve ekipmanıyla hizmetinizde.<br>
                                    <br>
                                    Her evin temizliğinde gereken standart özenin çok ötesine geçerek, evin en küçük veya en değerli eşyalarına varan bir itina ile çalışan MNE Temizlik, kırılmaya müsait veya antika değeri taşıyan eşyalarınıza dikkat ederek hizmetini sergilemektedir.<br>
                                    <br>
                                    Ev ve villalarınızın her oda ve bölümüne ayrı ayrı eğilerek çalışan MNE Temizlik, lokal olarak gereken malzeme, kimyasal ve donanımı kullanır.<br>
                                    <br>
                                    İlk günden beri çalıştığı kişi ve kurumlar ile sağladığı güven sayesinde ev ve villa temizliğinizi güven ve huzur içinde MNE Temizlik`e teslim edebilirsiniz.</p>
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