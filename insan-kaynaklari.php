<!DOCTYPE html>
<html lang="tr">

<?php $page = 'insan-kaynaklari'; ?>

<head>
    <title>Ekol Grup - İnsan Kaynakları Politikamız</title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">İnsan Kaynakları</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-3 col-lg-8">
                        <?php include ('menu-ik.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content metin-hizala" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <img src="assets/doc/hizmet/temizlik/insan-kaynaklar.jpg" style="width: 100%;">
                                <p>&nbsp;</p>
                                <p>Güvenlik, sadece içinde bulunduğumuz zaman diliminde değil, üzerinde yaşadığımız dünyamızda, insanlık tarihinden itibaren yaşamış olan insan topluluklarının en önemli vazgeçilmez ihtiyacı olarak görüle gelmiştir. Günümüzde, her alan ve sektördeki bina ve tesislerin kendisine has güvenlik ihtiyaçları vardır ve bu ihtiyacın etkili bir şekilde karşılanmasıyla üretim ve hizmet grafiğinin yükselmesine katkıda bulunulduğu tecrübelerle görülmüştür. Asıl önemli olan kısım ise, etkili bir güvenlik için şüphesiz konusunda uzman, deneyimli bir ekip ile çalışmaktır.&nbsp;</p>
                                <p><strong>SEÇME VE YERLEŞTİRME:</strong>&nbsp;Eleman ihtiyaçlarımız, pozisyonun özelliklerine göre şirket içi kaynaklar, gazete ilanları, danışmanlık firmaları ve ilgili kurumlar yolu ile aranan niteliklere uygun kişilerden karşılanmaktadır.&nbsp;</p>
                                <p><strong>SEÇİM TESTLERİ:&nbsp;</strong>Psikoteknik yöntemlerden ön eleme aracı olarak ve bazı pozisyonlarda, son karar aşamasında, mesleki kişilik özelliklerinin ölçümünde yararlanılmaktadır.</p>
                                <p><strong>MÜLAKAT:&nbsp;</strong>Pozisyonun özelliklerine göre farklı yöntemlerle yapılabilen mülakat süresince, ilk görüşme İnsan Kaynakları departmanı ile yapılmakta, ikinci görüşme bölüm yöneticisi tarafından gerçekleştirilmektedir.&nbsp;</p>
                                <p><strong>ORYANTASYON:</strong>&nbsp;İşe başlatılan adayların şirket kültürünü ve işi daha iyi tanımaları için, pozisyonlara göre farklı özelliklerde hazırlanmış, projeye yönelik oryantasyon programları uygulanmaktadır.&nbsp;</p>
                                <p><strong>YÜKSELME OLANAKLARI:</strong>&nbsp;Şirket politikamız olarak, geleceğin kadroları,görevinde başarı gösteren çalışanlarımız içinden yetiştirmektir. Özellikle yönetim kadrosuna yapılan atamaların şirketin çeşitli süreçlerinde yer alarak farklı sorumluluklar almış kişilerden olması hedeflenmektedir.</p>
                                <p>İş başvurusun da bulunmak için <a href="https://www.ekolgrup.com.tr/basvuru-formu.php">tıklayınız.</a></p>
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