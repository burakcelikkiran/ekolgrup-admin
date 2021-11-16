<div id="side-panel" class="dark" data-bg-img="/images/bg/bg8.jpg">
    <div class="side-panel-wrap">
        <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon_close font-30"></i></a></div>
        <a href="/"><img alt="logo" src="/storage/{{nova_get_setting('default_logo')}}"></a>
        <div class="side-panel-nav mt-30">
            <div class="widget no-border">
                <nav>
                    <ul class="nav nav-list">
                        <li><a href="/">Anasayfa</a></li>
                        <li><a href="hakkimizda">Hakkımızda</a></li>
                        <li><a href="universite">Marmara Üniversitesi</a></li>
                        <li><a class="tree-toggler nav-header">Bilimsel Faaliyetler <i class="fa fa-angle-down"></i></a>
                            <ul class="nav nav-list tree">
                                <li><a href="guncel-faaliyetler">Güncel Faaliyetler</a></li>
                                <li><a href="gecmis-faaliyetler">Geçmiş Faaliyetler</a></li>
                                <li><a href="oduller">Ödüller</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="uyelik">Üyelik</a>
                        </li>

                        <li>
                            <a href="iletisim">İletişim</a>
                        </li>


                    </ul>
                </nav>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="side-panel-widget mt-30">
            <div class="widget no-border">
                <ul>
                    <li class="font-14 mb-5"> <i class="fa fa-phone text-theme-colored"></i> <a href="tel:+90{{nova_get_setting('number')}}" class="text-gray">+90 {{PhoneFormat('number')}}</a> </li>
                    <li class="font-14 mb-5"> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="mailto:{{nova_get_setting('email')}}" class="text-gray">{{nova_get_setting('email')}}</a> </li>
                </ul>
            </div>
            <div class="widget">
                <ul class="social-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="{{nova_get_setting('facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{nova_get_setting('twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{nova_get_setting('instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <p><sup>&copy;</sup> {{ date('Y') }}, Tüm hakları saklıdır</p>
        </div>
    </div>
</div>
