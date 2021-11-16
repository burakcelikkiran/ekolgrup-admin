<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Ofis Temizliği</title>
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
                                <h2 class="text-center">Ofis Temizliği</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/ekol-ofis-temizligi.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>
                                <p>MNE Temizlik, pek çok mekanın benzer çalışma şartlarına sahip olmasına rağmen, özel şartlara da dikkatle eğilerek çalışır.<br>
                                    <br>
                                    Büro ve ofis temizliği, ev temizliğiyle benzer şartlara sahiptir. Fakat büro ve ofislerin evlerden daha kalabalık olması, evlerdeki oda sayısından daha çok odaya, depoya ve boş alana sahip olması nedeniyle daha ayrıntılı ve hassas bir temizlik gerektirir.<br>
                                    <br>
                                    Diğer yandan ofis ve büroların birer çalışma alanı olması, buradaki insanların çalışma motivasyonuna da itina gösterilmesi mecburiyetini doğurmaktadır.&nbsp;<br>
                                    <br>
                                    İşte MNE Temizlik, tüm bu noktalara fazlasıyla hakim olan ve geçmiş deneyimleriyle bunu kanıtlayan bir şirket olarak son derece hassas, özenli ve sessiz bir şekilde hizmetini gerçekleştirmektedir.<br>
                                    <br>
                                    Ayrıca çalıştığı iş yeri veya şirket gibi mecraların bilgileri de iş prensipleri gereği MNE Temizlik`in gizliliği altındadır.</p>
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