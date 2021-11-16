<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Önemli Notlar</title>
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
                    <div class="col-xl-4 col-lg-8">
                        <?php include ('menu-egitim.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Önemli Notlar</h2>

                                <ul>
                                    <li>Arşiv araştırma formu bilgisayar ortamında veya daktilo ile doldurulacaktır.</li>
                                    <li>Biometrik fotoğraflar kılık kıyafet yönetmeliğine uygun kıyafetle ön cepheden çekilmiş olacaktır. (Erkekler için sakalsız ve kravatlı olması gerekmektedir.)</li>
                                    <li>Harçlar Vergi dairelerine 9103 nolu Özel Güvenlik Ruhsat Harcı hesabına yatırılacaktır. (2020&nbsp;yılı için 904,00 TL’ dır.)</li>
                                    <li>Müracaat evraklarının sıralaması listede belirtilen şekilde yapılarak, tek poşet dosya içerisinde teslim edilecektir.</li>
                                    <li>Teslim edilen evraklardan birer nüsha fotokopi alınarak daha sonra şubemizden kesinlikle evrak talep edilmeyecektir.(Sağlık Raporu, Harç Makbuzu,Sertifika vb.)</li>
                                </ul>

                                <h2 class="text-center">Dilekçe Örnekleri&nbsp;</h2>

                                <ol>
                                    <li>İstediğiniz belgenin üzerine tıklayıp (kaydet ) tuşuna bastıktan sonra kendi bilgisayarınızın masa üstüne evrakı indiriyoruz, sizden istenilen bilgileri bilgisayarda doldurup çıktısını alabilirsiniz. El yazısı ile yazılan evrakları Emniyet kabul etmemektedir. İstenilen evrakların bilgisayarda veya daktilo ile doldurulması zorunludur.</li>
                                    <li>Güvenlik kimlik kartlarınız PTT A.Ş vasıtasıyla MERNİS kayıtlarındaki adres bilgileri esas alınarak gönderileceğinden, Güvenlik kimlik kartlarınızın elinize geçmesinde sorun yaşanmaması için <strong>adres- telefon</strong> bilgilerinizin <strong>güncel </strong>olmasına dikkat ediniz.&nbsp;</li>
                                </ol>

                                <ul>
                                    <li><u><a href="assets/doc/hizmet/egitim/Temel Dilekçe Örneği (Silahlı).docx">Temel Dilekçe Örneği (Silahlı)</a></u></li>
                                    <li><a href="assets/doc/hizmet/egitim/Temel Dilekçe Örneği (Silahsız).docx"><u>Temel Dilekçe Örneği (Silahsız)</u></a></li>
                                    <li><a href="assets/doc/hizmet/egitim/Yenileme Dilekçe Örneği (Silahlı).docx"><u>Yenileme Dilekçe Örneği (Silahlı)</u></a></li>
                                    <li><a href="assets/doc/hizmet/egitim/Yenileme Dilekçe Örneği (Silahsız).docx"><u>Yenileme Dilekçe Örneği (Silahsız)</u></a></li>
                                    <li><a href="assets/doc/hizmet/egitim/Silahsızdan Silahlıya Geçenler İçin Dilekçe.docx"><u>Silahsızdan Silahlıya Geçenler İçin Dilekçe</u></a></li>
                                </ul>

                                <p>&nbsp;</p>
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