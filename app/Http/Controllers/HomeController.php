<?php

namespace App\Http\Controllers;

use App\Models\Anasayfa;
use App\Models\Egitim;
use App\Models\Elektronik;
use App\Models\Entegre;
use App\Models\Haber;
use App\Models\Hizmetler;
use App\Models\InsanKaynaklari;
use App\Models\ISG;
use App\Models\Kalite;
use App\Models\Koruma;
use App\Models\Kurumsal;
use App\Models\Page;
use App\Models\Park;
use App\Models\Servis;
use App\Models\Sinir;
use App\Models\Slider;
use App\Models\Sube;
use App\Models\Temizlik;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard')->with([
            'slides' => Slider::where('isactive', 1)->orderBy('order')->get(),
            'anasayfa'=> Anasayfa::where('isactive',1)->orderBy('order')->get(),
            'habers'=>Haber::where('isactive',1)->orderBy('order')->get(),
            'title'=>'Anasayfa'
        ]);
    }

    public function kurumsal($pageSlug)
    {
        if ($pageSlug){
        return view('kurumsal')->with([
            'icerik' => Kurumsal::where('isactive', 1)->where('slug', $pageSlug)->first(),
            'iceriks' => Kurumsal::where('isactive', 1)->orderBy('order')->get(),
            'title'=>'Kurumsal'
        ]);
        }
    }

    public function insanKaynaklari($pageSlug)
    {
        if ($pageSlug=='basvuru-formu'){
            return view('basvuru-formu')->with([

                'iceriks' => InsanKaynaklari::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'İnsan Kaynakları'
            ]);
        }
        else if ($pageSlug){
            return view('insan-kaynaklari')->with([
                'icerik' => InsanKaynaklari::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => InsanKaynaklari::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'İnsan Kaynakları'
            ]);
        }
    }

    public function haber($pageSlug)
    {
        if ($pageSlug){
            return view('haberler')->with([
                'title' => 'Haberler',
                'icerik' => Haber::orderBy('order')->where('isactive',1)->where('slug', $pageSlug)->first(),
                'iceriks' => Haber::orderBy('order')->where('isactive',1)->get(),
            ]);
        }
    }

    public function tumHizmet()
    {
        return view('hizmetler')->with([
            'title' => 'Tüm Hizmetlerimiz',
            'iceriks' => Hizmetler::orderBy('order')->where('isactive',1)->get(),
        ]);
    }

    public function icHizmet($slug1,$slug2)
    {
        if ($slug1){
            return view('ichizmet')->with([
                'icerik' => Koruma::where('isactive', 1)->where('slug', $slug1)->first(),
                'iceriks' => Hizmetler::orderBy('order')->where('isactive',1)->get(),
                'title'=>'Tüm Hizmetlerimiz',
                'prefix'=>$slug1,
                'post'=>'Koruma ve Güvenlik',
            ]);
        }
    }

    public function egitim($pageSlug)
    {
        if ($pageSlug=='egitim-talep-formu'){
            return view('egitim-formu')->with([
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>'egitim',
                'post'=>'Eğitim',
            ]);
        }
    }

    public function hizmet($pageSlug)
    {
        if ($pageSlug=='koruma-ve-guvenlik'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Koruma ve Güvenlik',
            ]);
        }

        if ($pageSlug=='ulke-sinir-guvenligi'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first('slug'),
            ]);
        }

        if ($pageSlug=='egitim'){
            return view('egitim')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Eğitim',
            ]);
        }

        if ($pageSlug=='is-sagligi-ve-guvenligi'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'İş Sağlığı ve Güvenliği',
            ]);
        }

        if ($pageSlug=='servis-yonetim-hizmetleri'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Servis Yönetim Hizmetleri',
            ]);
        }

        if ($pageSlug=='entegre-tesis-yonetimi'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Entegre Tesis Yönetimi',
            ]);
        }

        if ($pageSlug=='park-bahce-ve-peyzaj'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Park Bahçe ve Peyzaj',
            ]);
        }

        if ($pageSlug=='elektronik-guvenlik'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Elektronik Güvenlik',
            ]);
        }

        if ($pageSlug=='temizlik'){
            return view('ichizmet')->with([
                'icerik' => Hizmetler::where('isactive', 1)->where('slug', $pageSlug)->first(),
                'iceriks' => Hizmetler::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Hizmetlerimiz',
                'prefix'=>$pageSlug,
                'post'=>'Temizlik',
            ]);
        }
    }

    public function slug($slug)
    {
        $page = Page::where('slug', $slug)->first();

        if( $page ){
            return view('pages')->with([
                'page' => $page,
            ]);
        }

        if( $slug == 'kurumsal'){
            return view('kurumsal')->with([
                'icerik' => Kurumsal::where('isactive', 1)->first(),
                'iceriks' => Kurumsal::where('isactive', 1)->orderBy('order')->get(),
                'title'=>'Kurumsal'
            ]);
        }

        if( $slug == 'insan-kaynaklari'){
            return view('insan-kaynaklari')->with([
                'title' => 'İnsan Kaynakları',
                'iceriks' => InsanKaynaklari::orderBy('order')->where('isactive',1)->get(),
                'icerik' => InsanKaynaklari::orderBy('order')->where('isactive',1)->first(),
            ]);
        }

        if( $slug == 'kalite-belgelerimiz'){
            return view('kalite')->with([
                'title' => 'Kalite Belgelerimiz',
                'icerik' => Kalite::orderBy('order')->where('isactive',1)->first(),
            ]);
        }

        if( $slug == 'haberler'){
            return view('haberler')->with([
                'title' => 'Haberler',
                'icerik' => Haber::orderBy('order')->where('isactive',1)->first(),
                'iceriks' => Haber::orderBy('order')->where('isactive',1)->get(),
            ]);
        }

        if( $slug == 'iletisim'){
            return view('iletisim')->with([
                'title' => 'İletişim',
                'iceriks' => Sube::orderBy('order')->get(),
            ]);
        }
        if( $slug == 'hizmetler'){
            return view('hizmetler')->with([
                'title' => 'Tüm Hizmetlerimiz',
                'iceriks' => Hizmetler::orderBy('order')->where('isactive',1)->get(),
            ]);
        }
        return redirect()->action([HomeController::class, 'index']);
    }
}
