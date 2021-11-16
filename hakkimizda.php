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
                                <h2 class="text-center">Hakkımızda</h2>
                                <p>1999 yılında kurulan Ekol Grup, başarılı geçmişiyle Türkiye`nin önde gelen güvenlik firmaları arasında yer almakta ve hizmet sektöründe lider olma vizyonuyla hareket etmektedir.</p>

                                <p>Ekol Grup; Güvenlik, Eğitim, Elektronik Güvenlik Sistemleri, Poligon, İş Sağlığı ve İş Güvenliği, Temizlik hizmetleri, Yurt Dışında Savunma Sanayi Alanında Danışmanlık ve Spor olmak üzere birçok alanda faaliyet göstermektedir.</p>

                                <p>Ekol Grup`un ulaştığı başarının arkasında, müşteri odaklı ve verimliliği merkez alan bir yönetim yaklaşımı vardır. Bu yaklaşım, sadece maddi kazanımlarla değil, bütün toplumun yararlandığı ve yararlanacağı kurumsal yurttaşlık bilinciyle iç içe gelişmektedir. Grup, yine bu bilinç çerçevesinde özellikle, eğitim, çevre, kültür-sanat ve spor alanlarına odaklanan çeşitli kurumsal sosyal sorumluluk ve sponsorluk projelerini hayata geçirmektedir.</p>

                                <p>Ekol Grup, şirketleri ve çalışanları ile hizmet verdiği müşterilerine; üstün teknoloji, yüksek marka kalitesi ve dinamik bir insan kaynağı sunmaktadır. Ekol Grup, markalarının değerini sadece Türkiye sınırları içinde değil, bölgesel ve küresel ölçekte de yükseltmeyi hedeflemektedir. Grup, özellikle hizmet sektöründe bölgesel bir lider olma vizyonunu ortaya koymaktadır.</p>

                                <p>Ekol Grup, hizmetlerini her zaman için müşteri memnuniyeti ve güven ilkelerini temel alarak sunmaktadır. Bunun sonucunda da dünya ölçeğinde saygın markalar yaratarak, Türkiye`yi bütün dünyada temsil etmektedir.</p>

                                <p>Ekol Grup, tüm bu birikim ve iş birliklerinin bir ürünü olarak, dünya çapındaki gelişmelere hızla uyum sağlayarak Türkiye`deki değişimin öncüleri arasında yer almaktadır.&nbsp;</p>

                                <p><a href="assets/doc/ekol-tanitim-web-sitesi-icin.pptx">Ekol Grup Tanıtım Sunumunu İndirebilirsiniz</a></p>
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