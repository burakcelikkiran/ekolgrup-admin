<x-app-layout>
    @section('icsayfa') <div class="ic-sayfa">@endsection
    @section('icsayfa-son') </div>@endsection
    <section class="page-header clearfix" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner clearfix">
                <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Şikayet Formu</h2>
            </div>
        </div>
    </section>

        <div class="container">
            @php error_reporting(E_ALL & ~E_NOTICE);
            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            parse_str(parse_url($url)['query'], $params);

            if ($params['q']=='basarili')
            {
            @endphp
            <div class="alert alert-success text-center" id="mydiv21" role="alert" style="margin-top: 20px;">
                Form Gönderme İşlemi Başarılı
            </div>
            @php
                }
                if ($params['q']=='basarisiz')
                {
            @endphp
            <div class="alert alert-danger text-center" id="mydiv22" role="alert" style="margin-top: 20px;">
                Form Gönderme İşlemi Başarısız
            </div>
            @php
                }
            @endphp
        </div>

        <section class="services-details">
            <div class="container">

                <div class="row">

                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8 offset-2">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Şikayet ve Bilgilendirme Formu</h2>

                                <p>Aşağıdaki formunu doldurarak bilgi alabilir, şikayetlerinizi bize iletebilirsiniz.
                                    <br> Şikayetleriniz 24 saat içerisinde değerlendirilip, tarafınıza 3 gün içerisinde geri dönüş sağlanacaktır.</p>

                                <form action="https://alfredform.ko.com.tr/handle/F8RAsLRz3R3leGa1xrrzZS7Ew1Z21xxLW91ic6LX" method="POST">
                                    <div class="row form-elem">
                                        <div class="col-sm-6 form-elem">
                                            <div class="default-inp form-elem mt-3">
                                                <input type="text" name="Ad" id="user-name" placeholder="Ad *" required>
                                            </div>
                                            <div class="default-inp form-elem mt-3">
                                                <input type="email" name="Email" id="user-email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-elem">
                                            <div class="default-inp form-elem mt-3">
                                                <input type="text" name="Soyad" id="user-lastname" placeholder="Soyad *" required>
                                            </div>
                                            <div class="default-inp form-elem mt-3">
                                                <input type="tel" name="Telefon" pattern="[0-9]{10}" id="user-phone" placeholder="Telefon *" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="default-inp form-elem mt-3">
                                        <input type="text" name="Konu" id="user-subject" placeholder="Konu *" required>
                                    </div>
                                    <div class="form-elem default-inp mt-3">
                                        <textarea id="Message" name="Mesaj" placeholder="Mesaj *" required></textarea>
                                    </div>
                                    <div class="form-elem mt-3">
                                        Gönder butonuna basarak
                                        <a href="insan-kaynaklari/kvkk" target="_blank" title="KVKK">KVKK Aydınlatma Metnini </a>okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.<br><br>
                                        <button type="submit" class="btn btn-success btn-default">Gönder</button>
                                    </div>
                                </form>



                            </div>

                        </div>
                    </div>
                    <!--End Services Details Content-->
                </div>
            </div>
        </section>

        <script type="text/javascript">
            setTimeout(function() {
                $('#mydiv21').fadeOut('slow');
            }, 6000); // <-- time in milliseconds
            setTimeout(function() {
                $('#mydiv22').fadeOut('slow');
            }, 6000); // <-- time in milliseconds
        </script>

        @section('title') {{ 'Şikayet Formu'}} @endsection

        @section('seo_title') {{ 'Şikayet Formu'}} @endsection

        @section('seo_description') {{nova_get_setting('description')}} Şikayet Formu @endsection

        @section('seo_keywords') {{nova_get_setting('keywords')}} Şikayet Formu @endsection
</x-app-layout>
