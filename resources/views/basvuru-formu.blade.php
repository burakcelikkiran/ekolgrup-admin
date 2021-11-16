<x-app-layout>
    @section('icsayfa') <div class="ic-sayfa">@endsection
    @section('icsayfa-son') </div>@endsection
    <section class="page-header clearfix" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner clearfix">
                <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">{{$title}}</h2>
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
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-3 col-lg-8">
                        <div class="services-details__sidebar">
                            <div class="services-details__services-list-box wow fadeInUp animated" data-wow-delay="0.0s" data-wow-duration="1200ms">
                                <ul class="services-details__services-list list-unstyled">
                                    @foreach($iceriks as $cont)
                                        <li><a href="/insan-kaynaklari/{{$cont->slug}}">{{$cont->menu_name}} <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                    @endforeach
                                        <li><a href="/insan-kaynaklari/basvuru-formu">Başvuru Formu<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <script>
                        var ank = new Array("Altındağ", "Ayaş", " Bala", "Beypazarı", "Çamlıdere", "Çankaya", "Çubuk", "Etimesgut", "Haymana", "Kalecik", "Keçiören", "Kızılcahamam", "Mamak", "Nallıhan", "Polatlı", "Şereflikoçhisar", "Sincan", "Yenimahalle");
                        var ist = new Array("Adalar", "Bağcılar", "Bahçelievler", "Bakırköy", "Beşiktaş", "Beykoz", "Beyoğlu", "Büyükçekmece", "Çatalca", "Eminönü", "Esenler", "Eyüp", "Fatih", "Gaziosmanpaşa", "Güngören", "Kadıköy", "Kağıthane", "Kartal", "Küçükçekmece", "Maltepe", "Pendik", "Sarıyer", "Silivri", "Şile", "Şişli", "Sultanbeyli", "Tuzla", "Ümraniye", "Üsküdar", "Zeytinburnu");
                        var izmr = new Array("Aliağa", "Balçova", "Bayındır", "Bergama", "Beydağ", "Bornova", "Buca", "Çeşme", "Dikili", "Foça", "Güzelbahçe", "Karaburun", "Karşıyaka", "Kemalpaşa", "Kınık", "Kiraz", "Konak", "Menderes", "Menemen", "Narlıdere", "Ödemiş", "Seferihisar", "Selçuk", "Tire", "Torbalı", "Urla");
                        var adna = new Array("Aladağ", "Ceyhan", "Feke", "Karaisalı", "Kozan", "Pozantı", "Saimbeyli", "Seyhan", "Yumurtalı", "Yüreğir");
                        var adymn = new Array("Besni", "Gölbaşı", "Kahta", "Merkez");
                        var afyn = new Array("Başmakçı", "Bolvadin", "Çay", "Çobanlar", "Dinar", "Emirdağ", "İhsaniye", "Kızılören", "Merkez", "Sandıklı", "Sincanlı", "Suhut", "Sultandağı");
                        var agri = new Array("Diyadin", "Doğubeyazıt", "Merkez", "Patnos", "Tutak");
                        var aksry = new Array("Eskil", "Gülağaç", "Güzelyurt", "Merkez");
                        var amsya = new Array("Göynücek", "Gümüşhacıköy", "Merkez", "Merzifon", "Suluova", "Taşova");
                        var ant = new Array("Akseki", "Alanya", "Elmalı", "Finike", "Gazipaşa", "İbradi", "Kale", "Kaş", "Korkuteli", "Kumluca", "Manavgat", "Merkez", "Serik");
                        var ardhn = new Array("Çıldır", "Göle", "Merkez");
                        var artvn = new Array("Ardanuc", "Arhavi", "Hopa", "Merkez", "Murgül", "Savsat", "Yusufeli");
                        var aydn = new Array("Bozdoğan", "Buharkent", "Çine", "Germencik", "İncirliova", "Karacasu", "Karpuzlu", "Koçarlı", "Köşk", "Kuşadası", "Kuyucak", "Merkez", "Nazilli", "Söke", "Sultanhisar", "Yenihisar", "Yenipazar");
                        var baliksr = new Array("Ayvalık", "Balya", "Bandırma", "Bigadiç", "Burhaniye", "Dursunbey", "Edremit", "Erdek", "Gömeç", "Gönen", "Havran", "İvrindi", "Kepsut", "Manyas", "Merkez", "Savaştepe", "Sındırgı", "Susurluk");
                        var brtn = new Array("Amasra", "Merkez", "Ulus");
                        var btmn = new Array("Hasankeyf", "Merkez");
                        var bybrt = new Array("Aydıntepe", "Demirözü", "Merkez");
                        var bilck = new Array("Bozhüyük", "Gölpazarı", "Merkez", "Osmaneli", "Pazaryeri", "Söğüt");
                        var bngl = new Array("Adaklı", "Genç", "Karlıova", "Kiğı", "Merkez", "Solhan", "Yayladere", "Yedisu");
                        var btls = new Array("Adilcevaz", "Ahlat", "Güloymak", "Merkez", "Mutki", "Tatvan");
                        var blu = new Array("Dörtdivan", "Gerede", "Göynük", "Mengen", "Merkez", "Mudurnu", "Yeniçağa");
                        var brdr = new Array("Ağlasun", "Bucak", "Çavdır", "Gölhisar", "Karamanlı", "Merkez", "Tefenni", "Yeşilova");
                        var brsa = new Array("Gemlik", "Gürsu", "İnegöl", "İznik", "Karacabey", "Keleş", "Kestel", "Mudanya", "Mustafa Kemal Paşa", "Nilüfer", "Orhaneli", "Orhangazi", "Osmangazi", "Yenişehir", "Yıldırım");
                        var cnk = new Array("Ayvacık", "Bayramiç", "Biga", "Bozcaada", "Çan", "Eceabat", "Ezine", "Gölbaşı", "Gökçeada", "Lapseki", "Merkez", "Yenice");
                        var cnkri = new Array("Atkaracalar", "Bayramören", "Çerkeş", "Eldivan", "Ilgaz", "Kurşunlu", "Merkez", "Orta", "Şabanözü", "Yapraklı");
                        var crm = new Array("Alaca", "Boğazkale", "Iskılıp", "Kargı", "Mecitözü", "Merkez", "Oğuzlar", "Osmancık", "Sungurlu", "Uğurludağ");
                        var dnzli = new Array("Acıpayam", "Babadağ", "Buldan", "Çal", "Çardak", "Çivril", "Güney", "Holaz", "Kale", "Merkez", "Sarayköy", "Tavaş");
                        var dyrbkr = new Array("Çermik", "Eğil", "Ergani", "Hani", "Hazro", "Kocaköy", "Lice", "Merkez", "Silvan");
                        var dzce = new Array("Akçakoca", "Çilimli", "Merkez", "Yığılca");
                        var edrne = new Array("Enes", "Havsa", "İpsala", "Keşan", "Lalapaşa", "Meriç", "Merkez", "Uzunköprü");
                        var elzg = new Array("Ağin", "Arıcak", "Baskıl", "Karakoçan", "Keban", "Kovancılar", "Maden", "Merkez", "Palu", "Sivrice");
                        var erzncn = new Array("Çayırlı", "Ilıç", "Kemah", "Kemaliye", "Merkez", "Refahiye", "Tercan", "Üzümlü");
                        var erzrm = new Array("Aşkale", "Hınıs", "Horasan", "Ilıca", "İspir", "Narman", "Oltu", "Olur", "Pasinler", "Tortum");
                        var eskishr = new Array("Alpu", "Beylikova", "Çifteler", "Günyüzü", "Han", "İnönü", "Mahmudiye", "Merkez", "Mihalıçcık", "Seyitgazi", "Sivrihisar");
                        var gantep = new Array("Araban", "Islahiye", "Nizip", "Nurdağı", "Oğuzeli", "Şahinbey", "Şehitkamil", "Yavuzeli");
                        var grsn = new Array("Alucra", "Bulancak", "Dereli", "Espiye", "Eynesil", "Görele", "Keşap", "Merkez", "Şebinkarahisar", "Tirebolu");
                        var ghane = new Array("Kelkit", "Kurtun", "Merkez", "Şiran");
                        var hkkri = new Array("Çukurca", "Merkez", "Şemdilli", "Yüksekova");
                        var hty = new Array("Altınözü", "Belen", "Dörtyol", "Yüksekova", "Erzin", "İskenderun", "Kırıkhan", "Kumlu", "Merkez", "Reyhanlı", "Samandağı", "Yayladağı");
                        var igdr = new Array("Aralık", "Karakoyunlu", "Merkez", "Tuzluca");
                        var isprta = new Array("Aksu", "Atabey", "Eğirdir", "Gelendost", "Gönen", "Keçiborlu", "Merkez", "Sarkıkaraağaç", "Senirkent", "Sütçüler", "Uluborlu", "Yalvaç");
                        var kmaras = new Array("Afşın", "Andırın", "Çağlayancerit", "Elbistan", "Göksun", "Merkez", "Pazarcık");
                        var krbk = new Array("Eskipazar", "Merkez", "Safranbolu");
                        var krmn = new Array("Ayrancı", "Başyayla", "Ermenek", "Merkez");
                        var krs = new Array("Kağızman", "Merkez", "Sarıkamış");
                        var kstmn = new Array("Abana", "Arac", "Bozkurt", "Çatalzeytin", "Cide", "Daday", "Devrenkanı", "Hanönü", "İhsangazi", "İnebolu", "Küre", "Merkez", "Taşköprü", "Tosya");
                        var kysr = new Array("Akkışla", "Bünyan", "Develi", "Felahiye", "Hacılar", "İncesu", "Kocasinan", "Melekgazi", "Özvatan", "Pınarbaşı", "Talas", "Tomarza", "Yahyalı", "Yeşilhisar");
                        var kls = new Array("Elbeyli", "Merkez", "Musabeyli", "Polateli");
                        var krkkale = new Array("Karakeçili", "Keskin", "Merkez", "Sulakyurt");
                        var krklreli = new Array("Babaski", "Lüleburgaz", "Merkez", "Pehlivanköy", "Pınarhisar", "Vize");
                        var krshr = new Array("Akpınar", "Çiçekdağı", "Kaman", "Merkez", "Mucur");
                        var kceli = new Array("Derince", "Gebze", "Gölcük", "Kandıra", "Karamürsel", "Merkez");
                        var knya = new Array("Akören", "Akşehir", "Altınekin", "Beyşehir", "Bozkır", "Çeltik", "Cihanbeyli", "Çumra", "Derbent", "Doğanhisar", "Emirgazi", "Ereğli", "Hadım", "Hüyük", "Ilgın", "Kadınhanı", "Karapınar", "Karatay", "Meram", "Sarayönü", "Selçuklu", "Seydişehir", "Taşkent", "Yunak");
                        var kthya = new Array("Altıntaş", "Domaniç", "Dumlupınar", "Emet", "Gediz", "Merkez", "Pazarlar", "Simav", "Tavşanlı");
                        var mltya = new Array("Akçadağ", "Arapkır", "Arguvan", "Battalgazi", "Darende", "Doğanşehir", "Hekimhan", "Merkez", "Pötürge", "Yazıhan", "Yeşilhan");
                        var mnsa = new Array("Ahmetli", "Akhisar", "Alaşehir", "Demirci", "Gölmarmara", "Gördes", "Kırkağaç", "Kula", "Merkez", "Salihli", "Sarıhanlı", "Soma", "Turgutlu");
                        var mrdn = new Array("Derik", "Kızıltepe", "Mazıdağı", "Merkez", "Midyat", "Nusaybin", "Ömerli", "Savur");
                        var mrsn = new Array("Anamur", "Bozyazı", "Çamlıyayla", "Erdemli", "Gülnar", "Merkez", "Mut", "Silifke", "Tarsus");
                        var mgla = new Array("Bodrum", "Datça", "Fathiye", "Kavaklıdere", "Köyceğiz", "Marmaris", "Merkez", "Milas", "Ortaca", "Ula", "Yatağan");
                        var ms = new Array("Bulanık", "Korkut", "Malazgirt", "Merkez");
                        var nvshr = new Array("Avanos", "Derinkuyu", "Gülşehir", "Hacıbektaş", "Kozaklı", "Merkez", "Ürgüp");
                        var ngde = new Array("Altunhisar", "Bor", "Çamardı", "Çiftlik", "Ulukışla");
                        var ord = new Array("Akkuş", "Fatsa", "Görköy", "Kabadüz", "Merkez", "Mesudiye", "Perşembe", "Ulubey", "Ünye");
                        var osmnye = new Array("Bahçe", "Kadirli", "Merkez");
                        var rze = new Array("Ardeşen", "Çayeli", "Fındıklı", "Merkez", "Pazar", "Çamlıhemşin");
                        var skrya = new Array("Akyazı", "Geyve", "Hendek", "Karasu", "Kaynarca", "Merkez", "Sapanca", "Taraklı");
                        var smsn = new Array("Alaçam", "Bafra", "Çarşamba", "Havza", "Kavak", "Ladik", "Merkez", "Salıpazarı", "Tekkeköy", "Terme", "Vezirköprü");
                        var snlrf = new Array("Akçakale", "Birecik", "Bozova", "Halfeti", "Harran", "Hilvan", "Merkez", "Siverek", "Suruç", "Viranşehir");
                        var srt = new Array("Aydınlar", "Baykan", "Eruh", "Kurtalan", "Merkez");
                        var snp = new Array("Ayancık", "Boyabat", "Durağan", "Elfelek", "Gerze", "Merkez");
                        var srnk = new Array("Cizre", "İdil", "Merkez", "Silopi");
                        var svs = new Array("Altınyayla", "Divriği", "Doğansar", "Gemerek", "Hafik", "Kangal", "Merkez", "Şarkışla", "Suşehri", "Yılızeli", "Zara");
                        var tkrdg = new Array("Çerkezköy", "Çorlu", "Hayrabolu", "Malkara", "Marmara Ereğlisi", "Merkez", "Muratlı", "Saray", "Şarköy");
                        var tkt = new Array("Almuz", "Erbaa", "Merkez", "Niksar", "Pazar", "Reşadiye", "Sulusaray", "Turhal", "Zile");
                        var trbzn = new Array("Akçabat", "Araklı", "Arşin", "Beşikdüzü", "Çarşıbaşı", "Çaykara", "Dernekpazarı", "Maçka", "Merkez", "Of", "Sürmene", "Tonya", "Vakfıkebir", "Yomra");
                        var tncli = new Array("Çemişgezek", "Hozat", "Mazgirt", "Merkez", "Nazimiye", "Pertek");
                        var usk = new Array("Banaz", "Eşme", "Merkez", "Sivaslı", "Ulubey");
                        var vn = new Array("Başkale", "Çaldıran", "Çatak", "Erciş", "Gevaş", "Gürpınar", "Merkez", "Muradiye", "Özalp");
                        var ylva = new Array("Altınova", "Armutlu", "Merkez");
                        var yzgt = new Array("Boğazlıyan", "Çandır", "Çayıralan", "Merkez", "Sarıkaya", "Sefaatli", "Sorgun", "Yenifakili", "Yerköy");
                        var zngldk = new Array("Araplı", "Çaycuma", "Devrek", "Ereğli", "Merkez");

                        function set_player() {

                            var dropdown = document.getElementById("ilce");
                            var selected_il = document.getElementById("Sehir").value;
                            var select_ilce =  document.getElementById("ilce").selectedIndex ;

                            var select = document.getElementById("ilce");
                            var length = select.options.length;
                            for (i = 0; i < length; ) {
                                select.options[i] = null;
                                length = select.options.length;
                            }

                            if (selected_il == "Ankara"){
                                for(var i=0; i < ank.length; i++)
                                    dropdown[dropdown.length] = new Option(ank[i], ank[i])
                            }
                            if (selected_il == "İstanbul"){
                                for(var i=0; i<ist.length; i++)
                                    dropdown[dropdown.length] = new Option(ist[i], ist[i])
                            }
                            if (selected_il == "İzmir"){
                                for(var i=0; i<izmr.length; i++)
                                    dropdown[dropdown.length] = new Option(izmr[i], izmr[i])
                            }
                            if (selected_il == "Adana"){
                                for(var i=0; i<adna.length; i++)
                                    dropdown[dropdown.length] = new Option(adna[i], adna[i])
                            }
                            if (selected_il == "Adıyaman"){
                                for(var i=0; i<adymn.length; i++)
                                    dropdown[dropdown.length] = new Option(adymn[i], adymn[i])
                            }
                            if (selected_il == "Afyon"){
                                for(var i=0; i<afyn.length; i++)
                                    dropdown[dropdown.length] = new Option(afyn[i], afyn[i])
                            }
                            if (selected_il == "Ağrı"){
                                for(var i=0; i<agri.length; i++)
                                    dropdown[dropdown.length] = new Option(agri[i], agri[i])
                            }
                            if (selected_il == "Aksaray"){
                                for(var i=0; i<aksry.length; i++)
                                    dropdown[dropdown.length] = new Option(aksry[i], aksry[i])
                            }
                            if (selected_il == "Amasya"){
                                for(var i=0; i<amsya.length; i++)
                                    dropdown[dropdown.length] = new Option(amsya[i], amsya[i])
                            }
                            if (selected_il == "Antalya"){
                                for(var i=0; i<ant.length; i++)
                                    dropdown[dropdown.length] = new Option(ant[i], ant[i])
                            }
                            if (selected_il == "Ardahan"){
                                for(var i=0; i<ardhn.length; i++)
                                    dropdown[dropdown.length] = new Option(ardhn[i], ardhn[i])
                            }
                            if (selected_il == "Artvin"){
                                for(var i=0; i<artvn.length; i++)
                                    dropdown[dropdown.length] = new Option(artvn[i], artvn[i])
                            }
                            if (selected_il == "Aydın"){
                                for(var i=0; i<aydn.length; i++)
                                    dropdown[dropdown.length] = new Option(aydn[i], aydn[i])
                            }
                            if (selected_il == "Balıkesir"){
                                for(var i=0; i<baliksr.length; i++)
                                    dropdown[dropdown.length] = new Option(baliksr[i], baliksr[i])
                            }
                            if (selected_il == "Bartın"){
                                for(var i=0; i<brtn.length; i++)
                                    dropdown[dropdown.length] = new Option(brtn[i], brtn[i])
                            }
                            if (selected_il == "Batman"){
                                for(var i=0; i<btmn.length; i++)
                                    dropdown[dropdown.length] = new Option(btmn[i], btmn[i])
                            }
                            if (selected_il == "Bayburt"){
                                for(var i=0; i<bybrt.length; i++)
                                    dropdown[dropdown.length] = new Option(bybrt[i], bybrt[i])
                            }
                            if (selected_il == "Bilecik"){
                                for(var i=0; i<bilck.length; i++)
                                    dropdown[dropdown.length] = new Option(bilck[i], bilck[i])
                            }
                            if (selected_il == "Bingöl"){
                                for(var i=0; i<bngl.length; i++)
                                    dropdown[dropdown.length] = new Option(bngl[i], bngl[i])
                            }
                            if (selected_il == "Bitlis"){
                                for(var i=0; i<btls.length; i++)
                                    dropdown[dropdown.length] = new Option(btls[i], btls[i])
                            }
                            if (selected_il == "Bolu"){
                                for(var i=0; i<blu.length; i++)
                                    dropdown[dropdown.length] = new Option(blu[i], blu[i])
                            }
                            if (selected_il == "Burdur"){
                                for(var i=0; i<brdr.length; i++)
                                    dropdown[dropdown.length] = new Option(brdr[i], brdr[i])
                            }
                            if (selected_il == "Bursa"){
                                for(var i=0; i<brsa.length; i++)
                                    dropdown[dropdown.length] = new Option(brsa[i], brsa[i])
                            }
                            if (selected_il == "Çanakkale"){
                                for(var i=0; i<cnk.length; i++)
                                    dropdown[dropdown.length] = new Option(cnk[i], cnk[i])
                            }
                            if (selected_il == "Çankırı"){
                                for(var i=0; i<cnkri.length; i++)
                                    dropdown[dropdown.length] = new Option(cnkri[i], cnkri[i])
                            }
                            if (selected_il == "Çorum"){
                                for(var i=0; i<crm.length; i++)
                                    dropdown[dropdown.length] = new Option(crm[i], crm[i])
                            }
                            if (selected_il == "Denizli"){
                                for(var i=0; i<dnzli.length; i++)
                                    dropdown[dropdown.length] = new Option(dnzli[i], dnzli[i])
                            }
                            if (selected_il == "Diyarbakır"){
                                for(var i=0; i<dyrbkr.length; i++)
                                    dropdown[dropdown.length] = new Option(dyrbkr[i], dyrbkr[i])
                            }
                            if (selected_il == "Düzce"){
                                for(var i=0; i<dzce.length; i++)
                                    dropdown[dropdown.length] = new Option(dzce[i], dzce[i])
                            }
                            if (selected_il == "Edirne"){
                                for(var i=0; i<edrne.length; i++)
                                    dropdown[dropdown.length] = new Option(edrne[i], edrne[i])
                            }
                            if (selected_il == "Elazığ"){
                                for(var i=0; i<elzg.length; i++)
                                    dropdown[dropdown.length] = new Option(elzg[i], elzg[i])
                            }
                            if (selected_il == "Erzincan"){
                                for(var i=0; i<erzncn.length; i++)
                                    dropdown[dropdown.length] = new Option(erzncn[i], erzncn[i])
                            }
                            if (selected_il == "Erzurum"){
                                for(var i=0; i<erzrm.length; i++)
                                    dropdown[dropdown.length] = new Option(erzrm[i], erzrm[i])
                            }
                            if (selected_il == "Eskişehir"){
                                for(var i=0; i<eskishr.length; i++)
                                    dropdown[dropdown.length] = new Option(eskishr[i], eskishr[i])
                            }
                            if (selected_il == "Gaziantep"){
                                for(var i=0; i<gantep.length; i++)
                                    dropdown[dropdown.length] = new Option(gantep[i], gantep[i])
                            }
                            if (selected_il == "Giresun"){
                                for(var i=0; i<grsn.length; i++)
                                    dropdown[dropdown.length] = new Option(grsn[i], grsn[i])
                            }
                            if (selected_il == "Gümüşhane"){
                                for(var i=0; i<ghane.length; i++)
                                    dropdown[dropdown.length] = new Option(ghane[i], ghane[i])
                            }
                            if (selected_il == "Hakkari"){
                                for(var i=0; i<hkkri.length; i++)
                                    dropdown[dropdown.length] = new Option(hkkri[i], hkkri[i])
                            }
                            if (selected_il == "Hatay"){
                                for(var i=0; i<hty.length; i++)
                                    dropdown[dropdown.length] = new Option(hty[i], hty[i])
                            }
                            if (selected_il == "Iğdır"){
                                for(var i=0; i<igdr.length; i++)
                                    dropdown[dropdown.length] = new Option(igdr[i], igdr[i])
                            }
                            if (selected_il == "Isparta"){
                                for(var i=0; i<isprta.length; i++)
                                    dropdown[dropdown.length] = new Option(isprta[i], isprta[i])
                            }
                            if (selected_il == "Kahramanmaraş"){
                                for(var i=0; i<kmaras.length; i++)
                                    dropdown[dropdown.length] = new Option(kmaras[i], kmaras[i])
                            }
                            if (selected_il == "Karabük"){
                                for(var i=0; i<krbk.length; i++)
                                    dropdown[dropdown.length] = new Option(krbk[i], krbk[i])
                            }
                            if (selected_il == "Karaman"){
                                for(var i=0; i<krmn.length; i++)
                                    dropdown[dropdown.length] = new Option(krmn[i], krmn[i])
                            }
                            if (selected_il == "Kars"){
                                for(var i=0; i<krs.length; i++)
                                    dropdown[dropdown.length] = new Option(krs[i], krs[i])
                            }
                            if (selected_il == "Kastamonu"){
                                for(var i=0; i<kstmn.length; i++)
                                    dropdown[dropdown.length] = new Option(kstmn[i], kstmn[i])
                            }
                            if (selected_il == "Kayseri"){
                                for(var i=0; i<kysr.length; i++)
                                    dropdown[dropdown.length] = new Option(kysr[i], kysr[i])
                            }
                            if (selected_il == "Kilis"){
                                for(var i=0; i<kls.length; i++)
                                    dropdown[dropdown.length] = new Option(kls[i], kls[i])
                            }
                            if (selected_il == "Kırıkkale"){
                                for(var i=0; i<krkkale.length; i++)
                                    dropdown[dropdown.length] = new Option(krkkale[i], krkkale[i])
                            }
                            if (selected_il == "Kırklareli"){
                                for(var i=0; i<krklreli.length; i++)
                                    dropdown[dropdown.length] = new Option(krklreli[i], krklreli[i])
                            }
                            if (selected_il == "Kırşehir"){
                                for(var i=0; i<krshr.length; i++)
                                    dropdown[dropdown.length] = new Option(krshr[i], krshr[i])
                            }
                            if (selected_il == "Kocaeli"){
                                for(var i=0; i<kceli.length; i++)
                                    dropdown[dropdown.length] = new Option(kceli[i], kceli[i])
                            }
                            if (selected_il == "Konya"){
                                for(var i=0; i<knya.length; i++)
                                    dropdown[dropdown.length] = new Option(knya[i], knya[i])
                            }
                            if (selected_il == "Kütahya"){
                                for(var i=0; i<kthya.length; i++)
                                    dropdown[dropdown.length] = new Option(kthya[i], kthya[i])
                            }
                            if (selected_il == "Malatya"){
                                for(var i=0; i<mltya.length; i++)
                                    dropdown[dropdown.length] = new Option(mltya[i], mltya[i])
                            }
                            if (selected_il == "Manisa"){
                                for(var i=0; i<mnsa.length; i++)
                                    dropdown[dropdown.length] = new Option(mnsa[i], mnsa[i])
                            }
                            if (selected_il == "Mardin"){
                                for(var i=0; i<mrdn.length; i++)
                                    dropdown[dropdown.length] = new Option(mrdn[i], mrdn[i])
                            }
                            if (selected_il == "Mersin"){
                                for(var i=0; i<mrsn.length; i++)
                                    dropdown[dropdown.length] = new Option(mrsn[i], mrsn[i])
                            }
                            if (selected_il == "Muğla"){
                                for(var i=0; i<mgla.length; i++)
                                    dropdown[dropdown.length] = new Option(mgla[i], mgla[i])
                            }
                            if (selected_il == "Muş"){
                                for(var i=0; i<ms.length; i++)
                                    dropdown[dropdown.length] = new Option(ms[i], ms[i])
                            }
                            if (selected_il == "Nevşehir"){
                                for(var i=0; i<nvshr.length; i++)
                                    dropdown[dropdown.length] = new Option(nvshr[i], nvshr[i])
                            }
                            if (selected_il == "Niğde"){
                                for(var i=0; i<ngde.length; i++)
                                    dropdown[dropdown.length] = new Option(ngde[i], ngde[i])
                            }
                            if (selected_il == "Ordu"){
                                for(var i=0; i<ord.length; i++)
                                    dropdown[dropdown.length] = new Option(ord[i], ord[i])
                            }
                            if (selected_il == "Osmaniye"){
                                for(var i=0; i<osmnye.length; i++)
                                    dropdown[dropdown.length] = new Option(osmnye[i], osmnye[i])
                            }
                            if (selected_il == "Rize"){
                                for(var i=0; i<rze.length; i++)
                                    dropdown[dropdown.length] = new Option(rze[i], rze[i])
                            }
                            if (selected_il == "Sakarya"){
                                for(var i=0; i<skrya.length; i++)
                                    dropdown[dropdown.length] = new Option(skrya[i], skrya[i])
                            }
                            if (selected_il == "Samsun"){
                                for(var i=0; i<smsn.length; i++)
                                    dropdown[dropdown.length] = new Option(smsn[i], smsn[i])
                            }
                            if (selected_il == "Şanlıurfa"){
                                for(var i=0; i<snlrf.length; i++)
                                    dropdown[dropdown.length] = new Option(snlrf[i], snlrf[i])
                            }
                            if (selected_il == "Siirt"){
                                for(var i=0; i<srt.length; i++)
                                    dropdown[dropdown.length] = new Option(srt[i], srt[i])
                            }
                            if (selected_il == "Sinop"){
                                for(var i=0; i<snp.length; i++)
                                    dropdown[dropdown.length] = new Option(snp[i], snp[i])
                            }
                            if (selected_il == "Şırnak"){
                                for(var i=0; i<srnk.length; i++)
                                    dropdown[dropdown.length] = new Option(srnk[i], srnk[i])
                            }
                            if (selected_il == "Sivas"){
                                for(var i=0; i<svs.length; i++)
                                    dropdown[dropdown.length] = new Option(svs[i], svs[i])
                            }
                            if (selected_il == "Tekirdağ"){
                                for(var i=0; i<tkrdg.length; i++)
                                    dropdown[dropdown.length] = new Option(tkrdg[i], tkrdg[i])
                            }
                            if (selected_il == "Tokat"){
                                for(var i=0; i<tkt.length; i++)
                                    dropdown[dropdown.length] = new Option(tkt[i], tkt[i])
                            }
                            if (selected_il == "Trabzon"){
                                for(var i=0; i<trbzn.length; i++)
                                    dropdown[dropdown.length] = new Option(trbzn[i], trbzn[i])
                            }
                            if (selected_il == "Tunceli"){
                                for(var i=0; i<tncli.length; i++)
                                    dropdown[dropdown.length] = new Option(tncli[i], tncli[i])
                            }
                            if (selected_il == "Uşak"){
                                for(var i=0; i<usk.length; i++)
                                    dropdown[dropdown.length] = new Option(usk[i], usk[i])
                            }
                            if (selected_il == "Van"){
                                for(var i=0; i<vn.length; i++)
                                    dropdown[dropdown.length] = new Option(vn[i], vn[i])
                            }
                            if (selected_il == "Yalova"){
                                for(var i=0; i<ylva.length; i++)
                                    dropdown[dropdown.length] = new Option(ylva[i], ylva[i])
                            }
                            if (selected_il == "Yozgat"){
                                for(var i=0; i<yzgt.length; i++)
                                    dropdown[dropdown.length] = new Option(yzgt[i], yzgt[i])
                            }
                            if (selected_il == "Zonguldak"){
                                for(var i=0; i<zngldk.length; i++)
                                    dropdown[dropdown.length] = new Option(zngldk[i], zngldk[i])
                            }
                        }
                    </script>

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1"
                                 x-data="{
                                yabanciDil: 'Yok',
                                deneyim: false,
                             }">
                                <h2 class="text-center">Başvuru Formu</h2>
                                <p>* alanların eksiksiz doldurulması gerekmektedir. <br>Bayan kullanıcıların askerlik
                                    durumunda&nbsp;herhangi bir değişiklik yapmalarına gerek yoktur.</p>

                                <form action="https://alfredform.ko.com.tr/handle/gcM69GFOMyLfXA6oU0eyzDgSQt32dX7Wyao33Ozz" method="POST">
                                    <div class="row form-elem">
                                        <div class="col-sm-6 form-elem">
                                            <label for="Ad_Soyad">Ad Soyad *</label>
                                            <div class="default-inp form-elem">
                                                <input class="form-control" data-val="true"
                                                       data-val-required="The field Ad Soyad * is required" id="Ad_Soyad"
                                                       name="Ad Soyad" placeholder="" type="text" required>
                                            </div>
                                            <br>
                                            <label for="Doğum_Tarihi">Doğum Tarihi *</label>
                                            <div class="default-inp form-elem">
                                                <input type="date" class="form-control" id="Doğum_Tarihi" name="Doğum Tarihi" required>
                                            </div>
                                            <br>
                                            <label for="Cinsiyet">Cinsiyet</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true"
                                                        data-val-required="The field Cinsiyet is required" id="Cinsiyet"
                                                        name="Cinsiyet">
                                                    <option selected="selected" value="Bayan">Bayan</option>
                                                    <option value="Bay">Bay</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="Medeni_Durumu">Medeni Durumu </label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true"
                                                        data-val-required="The field Medeni Durumu  is required"
                                                        id="Medeni_Durumu" name="Medeni Durumu">
                                                    <option selected="selected" value="Seçilmedi">Seçiniz</option>
                                                    <option value="Bekar">Bekar</option>
                                                    <option value="Evli">Evli</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="Askerlik_Durumu">Askerlik Durumu</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true"
                                                        data-val-required="The field Askerlik Durumu is required"
                                                        id="Askerlik_Durumu" name="Askerlik Durumu">
                                                    <option selected="selected" value="Yapmadı">Yapmadı</option>
                                                    <option value="Yaptı">Yaptı</option>
                                                    <option value="Tecilli">Tecilli</option>
                                                    <option value="Muaf">Muaf</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="ogkk">Özel Güvenlik Kimlik Kartı</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true" id="ogkk"
                                                        data-val-required="The field Özel Güvenlik Kimlik Kartı is required"
                                                        name="Özel Güvenlik Kimlik Kartı">
                                                    <option value="Var">Var</option>
                                                    <option selected="selected" value="Yok">Yok</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="Sehir">İl</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" name="Sehir" id="Sehir"
                                                        onchange="set_player()">
                                                    <option selected="selected">İl Seçiniz</option>
                                                    <option value="Ankara">Ankara</option>
                                                    <option value="İstanbul">İstanbul</option>
                                                    <option value="İzmir">İzmir</option>
                                                    <option value="Adana">Adana</option>
                                                    <option value="Adıyaman">Adıyaman</option>
                                                    <option value="Afyon">Afyon</option>
                                                    <option value="Ağrı">Ağrı</option>
                                                    <option value="Aksaray">Aksaray</option>
                                                    <option value="Amasya">Amasya</option>
                                                    <option value="Antalya">Antalya</option>
                                                    <option value="Ardahan">Ardahan</option>
                                                    <option value="Artvin">Artvin</option>
                                                    <option value="Aydın">Aydın</option>
                                                    <option value="Balıkesir">Balıkesir</option>
                                                    <option value="Bartın">Bartın</option>
                                                    <option value="Batman">Batman</option>
                                                    <option value="Bayburt">Bayburt</option>
                                                    <option value="Bilecik">Bilecik</option>
                                                    <option value="Bingöl">Bingöl</option>
                                                    <option value="Bitlis">Bitlis</option>
                                                    <option value="Bolu">Bolu</option>
                                                    <option value="Burdur">Burdur</option>
                                                    <option value="Bursa">Bursa</option>
                                                    <option value="Çanakkale">Çanakkale</option>
                                                    <option value="Çankırı">Çankırı</option>
                                                    <option value="Çorum">Çorum</option>
                                                    <option value="Denizli">Denizli</option>
                                                    <option value="Diyarbakır">Diyarbakır</option>
                                                    <option value="Düzce">Düzce</option>
                                                    <option value="Edirne">Edirne</option>
                                                    <option value="Elazığ">Elazığ</option>
                                                    <option value="Erzincan">Erzincan</option>
                                                    <option value="Erzurum">Erzurum</option>
                                                    <option value="Eskişehir">Eskişehir</option>
                                                    <option value="Gaziantep">Gaziantep</option>
                                                    <option value="Giresun">Giresun</option>
                                                    <option value="Gümüşhane">Gümüşhane</option>
                                                    <option value="Hakkari">Hakkari</option>
                                                    <option value="Hatay">Hatay</option>
                                                    <option value="Iğdır">Iğdır</option>
                                                    <option value="Isparta">Isparta</option>
                                                    <option value="Kahramanmaraş">Kahramanmaraş</option>
                                                    <option value="Karabük">Karabük</option>
                                                    <option value="Karaman">Karaman</option>
                                                    <option value="Kars">Kars</option>
                                                    <option value="Kastamonu">Kastamonu</option>
                                                    <option value="Kayseri">Kayseri</option>
                                                    <option value="Kırıkkale">Kırıkkale</option>
                                                    <option value="Kırklareli">Kırklareli</option>
                                                    <option value="Kırşehir">Kırşehir</option>
                                                    <option value="Kilis">Kilis</option>
                                                    <option value="Kocaeli">Kocaeli</option>
                                                    <option value="Konya">Konya</option>
                                                    <option value="Kütahya">Kütahya</option>
                                                    <option value="Malatya">Malatya</option>
                                                    <option value="Manisa">Manisa</option>
                                                    <option value="Mardin">Mardin</option>
                                                    <option value="Mersin">Mersin</option>
                                                    <option value="Muğla">Muğla</option>
                                                    <option value="Muş">Muş</option>
                                                    <option value="Nevşehir">Nevşehir</option>
                                                    <option value="Niğde">Niğde</option>
                                                    <option value="Ordu">Ordu</option>
                                                    <option value="Osmaniye">Osmaniye</option>
                                                    <option value="Rize">Rize</option>
                                                    <option value="Sakarya">Sakarya</option>
                                                    <option value="Samsun">Samsun</option>
                                                    <option value="Siirt">Siirt</option>
                                                    <option value="Sinop">Sinop</option>
                                                    <option value="Sivas">Sivas</option>
                                                    <option value="Şanlıurfa">Şanlıurfa</option>
                                                    <option value="Şırnak">Şırnak</option>
                                                    <option value="Tekirdağ">Tekirdağ</option>
                                                    <option value="Tokat">Tokat</option>
                                                    <option value="Trabzon">Trabzon</option>
                                                    <option value="Tunceli">Tunceli</option>
                                                    <option value="Uşak">Uşak</option>
                                                    <option value="Van">Van</option>
                                                    <option value="Yalova">Yalova</option>
                                                    <option value="Yozgat">Yozgat</option>
                                                    <option value="Zonguldak">Zonguldak</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="ilce">İlçe</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true"
                                                        data-val-required="The field İlçe is required" id="ilce"
                                                        name="ilce"></select>
                                            </div>
                                            <br>
                                            <label for="Adres">Adres *</label>
                                            <div class="default-inp form-elem">
                                                <input class="form-control" data-val="true"
                                                       data-val-required="The field Adres * is required" id="Adres"
                                                       name="Adres" placeholder="Mahalle / Cadde / Sokak / Numara"
                                                       type="text" required>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="col-sm-6 form-elem">
                                            <label for="Telefon">Telefon *</label>
                                            <div class="default-inp form-elem">
                                                <input type="tel" pattern="[0-9]{10}" id="Telefon" name="Telefon" title="Ör:5555551234"
                                                       placeholder="555 444 12 34" required>
                                            </div>
                                            <br>
                                            <label for="Email">Email *</label>
                                            <div class="default-inp form-elem">
                                                <input type="email" id="Email" name="Email" placeholder="mail@mail.com" required>
                                            </div>
                                            <br>
                                            <label for="Egitim_Durumu">Eğitim Durumu</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" data-val="true"
                                                        data-val-required="The field Eğitim Durumu is required"
                                                        id="Egitim_Durumu" name="Egitim Durumu">
                                                    <option selected="selected" value="İlköğretim">İlköğretim</option>
                                                    <option value="Lise">Lise</option>
                                                    <option value="Üniversite">Üniversite</option>
                                                    <option value="Yüksek Okul">Yüksek Okul</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="En_Son_Mezun_Oldu_unuz_Okul_Ad_">En Son Mezun Olduğunuz Okul Adı
                                                *</label>
                                            <div class="default-inp form-elem">
                                                <input class="form-control" data-val="true"
                                                       data-val-required="The field En Son Mezun Olduğunuz Okul Adı * is required"
                                                       id="En_Son_Mezun_Oldu_unuz_Okul_Ad_"
                                                       name="En Son Mezun Olduğunuz Okul Adı" placeholder="" type="text"
                                                       required>
                                            </div>
                                            <br>
                                            <label for="Yabanc__Dil">Yabancı Dil</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" id="Yabanc__Dil" name="Yabancı Dil" x-model="yabanciDil">
                                                    <option selected="selected" value="Yok">Yok</option>
                                                    <option value="İngilizce">İngilizce</option>
                                                    <option value="Arapça">Arapça</option>
                                                    <option value="Fransızca">Fransızca</option>
                                                    <option value="Rusça">Rusça</option>
                                                    <option value="Çince">Çince</option>
                                                    <option value="İtalyanca">İtalyanca</option>
                                                    <option value="Portekizce">Portekizce</option>
                                                </select>
                                            </div>
                                            <br>
                                            <label for="Yabanc__Dil_Seviyesi">Yabancı Dil Seviyesi</label>
                                            <div class="d-flex pb-5">
                                                <div class="checkbox">
                                                    <label for="Yabanc__Dil_Seviyesi-Okuma">
                                                        <input
                                                            class="" id="Yabanc__Dil_Seviyesi-Okuma"
                                                            name="Yabancı Dil Seviyesi Okuma" type="checkbox" value="Evet"
                                                            x-bind:disabled="yabanciDil == 'Yok'">Okuma</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="Yabanc__Dil_Seviyesi-Yazma">
                                                        <input class="" id="Yabanc__Dil_Seviyesi-Yazma"
                                                               name="Yabancı Dil Seviyesi Yazma" type="checkbox" value="Evet"
                                                               x-bind:disabled="yabanciDil == 'Yok'">Yazma</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="Yabanc__Dil_Seviyesi-Konu_ma"><input
                                                            class="" id="Yabanc__Dil_Seviyesi-Konu_ma"
                                                            name="Yabancı Dil Seviyesi Konusma" type="checkbox" value="Evet"
                                                            x-bind:disabled="yabanciDil == 'Yok'">Konuşma</label>
                                                </div>
                                            </div>

                                            <label for="isDeneyimi">İş Deneyimi</label>
                                            <div class="default-inp form-elem">
                                                <select class="form-control" id="isDeneyimi" name="İş Deneyimi" x-model="deneyim">
                                                    <option selected="selected" value="Yok">Yok</option>
                                                    <option value="Var">Var</option>
                                                </select>
                                            </div>
                                            <template x-if="deneyim == 'Var'">

                                                <div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli">
                                                        <input class="form-control" name="Şirket Adı" placeholder="Şirket Adı"
                                                               type="text" value="">
                                                    </div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli4">
                                                        <input class="form-control" id="Pozisyon" name="Pozisyon"
                                                               placeholder="Görevi / Ünvanı" type="text" value="">
                                                    </div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli2">
                                                        <input class="form-control" name="Çalışma Süresi"
                                                               placeholder="Çalışma Süresi Ay / Yıl" type="text" value="">
                                                    </div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli5">
                                                        <input class="form-control" name="Şirket Adı 2" placeholder="Şirket Adı"
                                                               type="text" value="">
                                                    </div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli3">
                                                        <input class="form-control" id="Pozisyon_2" name="Pozisyon 2"
                                                               placeholder="Görevi / Ünvana " type="text" value="">
                                                    </div>
                                                    <div class="default-inp form-elem mb-3 mt-3" id="gizli6">
                                                        <input class="form-control" name="Çalışma Süresi 2"
                                                               placeholder="Çalışma Süresi  Ay / Yıl" type="text" value="">
                                                    </div>
                                                </div>
                                            </template>
                                            <br>
                                            <label for="Bilgisayar_Bilgisi">Program Bilgisi</label>
                                            <div class="default-inp form-elem">
                                            <textarea class="form-control" id="Bilgisayar-Bilgisi"
                                                      name="Bilgisayar Bilgisi"
                                                      placeholder="Word, Excel, PowerPoint, Photoshop vb."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-elem">
                                        Gönder butonuna basarak
                                        <a href="/insan-kaynaklari/kvkk" target="_blank" title="KVKK">KVKK Aydınlatma Metnini </a>
                                        <a href="/insan-kaynaklari/is-basvurusu-kvkk-metni" target="_blank" title="KVKK">Çalışan Adayları Aydınlatma Metnini </a>
                                        okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.<br><br>
                                        <button type="submit" class="btn btn-success btn-default" style="padding: 10px 40px;">Gönder</button>
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
        <script>
            document.getElementById("insan-kaynaklari").classList.add('current');
        </script>
        @section('title') {{ 'Başvuru Formu'}} @endsection

        @section('seo_title') {{ 'Başvuru Formu'}} @endsection

        @section('seo_description') {{nova_get_setting('description')}} Başvuru Formu @endsection

        @section('seo_keywords') {{nova_get_setting('keywords')}} Başvuru Formu @endsection
</x-app-layout>
