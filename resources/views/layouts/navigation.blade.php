@yield('icsayfa')
<header class="main-header main-header--one  clearfix">
    <div class="main-header-one__bottom">
        <div class="auto-container">
            <div class="main-header-one__bottom-inner clearfix">
                <nav class="main-menu main-menu--1">
                    <div class="main-menu__inner">
                        <div class="left">
                            <div class="logo-box1">
                                <div class="logo-box1_bg">
                                </div>
                                <a href="/anasayfa">
                                    <img src="/storage/{{nova_get_setting('default_logo')}}" alt="" class="logo-boyut">
                                </a>
                            </div>
                        </div>
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <div class="middle">
                            <ul class="main-menu__list">
                                {!! \App\Http\Menus\Menu::getTopMenuHtml('Üst Menü') !!}
                            </ul>

                        </div>
                        <div class="right">
                            <div class="main-menu__inner" style=" margin-right: 20px;">
                                <div class="language-switcher-2">
                                    <div id="polyglotLanguageSwitcher">
                                        <form action="#">
                                            <select id="polyglot-language-options">
                                                <option id="tr" value="tr" selected>TR</option>
                                                <option id="en" value="en">EN</option>
                                                <option id="ar" value="ar">AR</option>

                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right" style=" margin-right: 20px;">

                                <div class="phone_number">
                                    <div class="icon">
                                        <span class="icon-agenda"></span>
                                    </div>
                                    <div class="number">
                                        <p style="padding: 0px;">Bize Ulaşın</p>
                                        <a href="tel:{{nova_get_setting('number')}}">{{PhoneFormat1('number')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('icsayfa-son')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content">
    </div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
