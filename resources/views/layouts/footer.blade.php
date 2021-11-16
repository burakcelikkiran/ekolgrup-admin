<footer class="footer-one footer-one--footer-two">
    <div class="footer-two__bg" style="background-image: url(/assets/images/backgrounds/footer-v2-bg.png);">
    </div>
    <div class="container">
        <div class="footer-one__top">
            <div class="row">
                <!--Start Footer Widget Column-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="footer-widget__column footer-widget__newsletter mar-top footer-yazi">
                        <h3 class="footer-widget__title">Hakkımızda</h3>
                        {{\Illuminate\Mail\Markdown::parse(nova_get_setting('footer_text'))}}
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="footer-widget__column footer-widget__company mar-top">
                        <h3 class="footer-widget__title">Faydalı Linkler</h3>
                        <ul class="footer-widget__company-list list-unstyled">
                            @for($i=1; $i<8; $i++)
                                    <li><a href="{{nova_get_setting('link_link'.$i)}}" @if(nova_get_setting('link_target'.$i)==true) target="_blank" @endif><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{nova_get_setting('link_name'.$i)}}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <!--End Footer Widget Column-->


                <!--Start Footer Widget Column-->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="footer-contact-info">
                        <h3 class="footer-widget__title">İletişim Bilgileri</h3>
                        <p class="footer-widget__newsletter-text" style="margin: 0;">EKOL GRUP GÜVENLİK LTD.ŞTİ.</p>
                        <ul class="list-unstyled">
                            <li>
                                <div class="icon">
                                    <i class="icon-pin map" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <p style="padding-bottom:0; ">{{nova_get_setting('address')}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-letter" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <a href="mailto:{{nova_get_setting('email')}}">{{nova_get_setting('email')}}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-phone-call" aria-hidden="true"></i>
                                </div>
                                <div class="text">
                                    <a href="tel:{{nova_get_setting('number')}}">{{PhoneFormat1('number')}}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Footer Widget Column-->


        </div>
    </div>
    <!--Start Footer One Bottom-->
    <div class="footer-one__bottom">
        <div class="row">
            <div class="col-xl-12">
                <div class="footer-one__bottom-inner">
                    <div class="footer-one__bottom-text text-center">
                        <p>&copy;2021 <a href="#"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer One Bottom-->
    </div>
</footer>
