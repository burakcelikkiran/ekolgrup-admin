<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Fabrika Temizliği</title>
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
                                <h2 class="text-center">Fabrika Temizliği</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/fabrika-temizligi.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>

                                <p>Çalışacağı mekanın türüne göre temizlik yöntem ve malzemelerini seçme konusunda duyarlı davranan MNE Temizlik büyük fabrika ve meskenler için de bu tavrını korumaktadır.&nbsp;<br>
                                    <br>
                                    MNE Temizlik, gıda üretimi yapan fabrikalarda temizlik malzemelerini zararsız ve kimyasal olmayanlardan seçer ve temizlik stratejisini de ona göre belirler.&nbsp;<br>
                                    <br>
                                    Öncelikli olarak zemin ve duvar temizliği, cam ve pencerelerin yıkanıp silinmesi, eşya ve mobilyaların tozunun alınması, çöplerin atılması, tuvalet ve lavabolar ile koridor, merdiven ve asansör gibi alanların temizliğiyle ilgilen MNE Temizlik, hizmetlerini sizin istediğiniz periyotlara göre sunmaktadır. Bu açıdan ister günlük, haftalık veya aylık periyotlarda, ister tek defaya mahsus olmak üzere MNE Temizlik`in hizmetlerinden faydalanabilirsiniz.&nbsp;<br>
                                    <br>
                                    Ayrıca bir fabrikanın sık ihtiyaç duyacağı inşaat ve tadilat sonrası temizlik ve dezenfeksiyonu istekleriniz doğrultusunda yerine getiren MNE Temizlik, bordrolama hizmeti de sağlamaktadır.</p>
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