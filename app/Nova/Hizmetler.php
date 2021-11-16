<?php

namespace App\Nova;

use App\Nova\Actions\PublishPage;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use OwenMelbz\RadioField\RadioButton;
use Whitecube\NovaFlexibleContent\Flexible;

class Hizmetler extends Resource
{
    public static function label() {
        return 'Tüm Hizmetler';}

    use HasSortableRows;

    public static $priority = 25;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Hizmetler::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name','text',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable()->hideFromIndex(),
            Text::make('Başlık','title')->help('Sayfanın Başlığı burada yazılır.'),
            Text::make('Sol Menu Adı','menu_name'),
            Boolean::make('Sayfa Yayınlansın mı?','is_active')->default(1),
            new Panel('Ana Hizmet Parametleri', $this->PublishFields()),
            new Panel('SEO Bilgileri', $this->SEOFields()),
        ];
    }

    public function PublishFields()
    {
        return [
            RadioButton::make('Ana Hizmet mi?','is_main')
                ->options([
                    0 => 'Hayır',
                    1 => 'Evet',
                ])
                ->default(0)
                ->marginBetween()
                ->toggle([0 => ['text','image_id','content_main_page'], 1 => ['content_sub_page']]),
            Markdown::make('Metin','text')->hideFromIndex(),
            MediaLibrary::make('Görsel','image_id')->hideFromIndex(),

            BelongsTo::make('Bağlı Olduğu Ana Hizmet', 'parentHizmet', 'App\Nova\Hizmetler')
                ->withoutTrashed(),

            Flexible::make('Ana Hizmet İçerik','content_main_page')
                ->addLayout('Tek Görsel Bölümü', 'image-library', [
                    MediaLibrary::make('Foto','image_id'),
                ])
                ->addLayout('İkili Görsel Bölümü', '2-photo', [
                    MediaLibrary::make('İlk Görsel','image_id1')->types('image'),
                    MediaLibrary::make('İkinci Görsel','image_id2')->types('image'),
                ])
                ->addLayout('Üçlü Görsel Bölümü', '3-photo', [
                    MediaLibrary::make('İlk Görsel','image_id1')->types('image'),
                    MediaLibrary::make('İkinci Görsel','image_id2')->types('image'),
                    MediaLibrary::make('Üçüncü Görsel','image_id3')->types('image'),
                ])
                ->addLayout('Yazı Bölümü', 'text', [
                    Trix::make('Yazı', 'text')->withFiles('public'),
                ])
                ->addLayout('Video Bölümü', 'video', [
                    Text::make('Video Frame', 'video'),
                ])
                ->addLayout('Galeri Bölümü', 'gallery', [
                    Text::make('Galeri Adı', 'gallery_name'),
                    MediaLibrary::make('Görsel','image_id')->types('Image')->array('list'),
                ])
                ->addLayout('Buton İçerisine Döküman Bölümü', 'document', [
                    Text::make('Döküman Adı', 'document_name'),
                    MediaLibrary::make('Döküman','document_id')->types('docs'),
                ])
                ->addLayout('Sola Metin Sağa Görsel Bölümü', 'metin-link', [
                    Trix::make('Metin', 'text'),
                    MediaLibrary::make('Görsel','image_id')->types('image'),
                ])
                ->addLayout('Tablo Ekleme  Bölümü', 'table', [
                    Markdown::make('Tablo İçerik','tableicerik'),
                ]),

            Flexible::make('Alt Hizmet İçerik','content_sub_page')
                ->addLayout('Tek Görsel Bölümü', 'image-library', [
                    MediaLibrary::make('Foto','image_id'),
                ])
                ->addLayout('İkili Görsel Bölümü', '2-photo', [
                    MediaLibrary::make('İlk Görsel','image_id1')->types('image'),
                    MediaLibrary::make('İkinci Görsel','image_id2')->types('image'),
                ])
                ->addLayout('Üçlü Görsel Bölümü', '3-photo', [
                    MediaLibrary::make('İlk Görsel','image_id1')->types('image'),
                    MediaLibrary::make('İkinci Görsel','image_id2')->types('image'),
                    MediaLibrary::make('Üçüncü Görsel','image_id3')->types('image'),
                ])
                ->addLayout('Yazı Bölümü', 'text', [
                    Trix::make('Yazı', 'text')->withFiles('public'),
                ])
                ->addLayout('Video Bölümü', 'video', [
                    Text::make('Video Frame', 'video'),
                ])
                ->addLayout('Galeri Bölümü', 'gallery', [
                    Text::make('Galeri Adı', 'gallery_name'),
                    MediaLibrary::make('Görsel','image_id')->types('Image')->array('list'),
                ])
                ->addLayout('Buton İçerisine Döküman Bölümü', 'document', [
                    Text::make('Döküman Adı', 'document_name'),
                    MediaLibrary::make('Döküman','document_id')->types('docs'),
                ])
                ->addLayout('Sola Metin Sağa Görsel Bölümü', 'metin-link', [
                    Trix::make('Metin', 'text'),
                    MediaLibrary::make('Görsel','image_id')->types('image'),
                ])
                ->addLayout('Tablo Ekleme  Bölümü', 'table', [
                    Markdown::make('Tablo İçerik','tableicerik'),
                ]),

//            Select::make('Size')->options(function () {
//                return \App\Models\Hizmetler::where('parent_id',0)->get(['id','title']);
//            }),
        ];
    }

    public function SEOFields()
    {
        return [
            Text::make('Seo Title','seo_title')->withMeta(['extraAttributes' => ['maxlength' => 60]])->hideFromIndex(),
            Text::make('Meta Description','meta_description')->withMeta(['extraAttributes' => ['maxlength' => 120]])->hideFromIndex(),
            Text::make('Meta Keywords','meta_keywords')->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [
            new PublishPage(),
        ];
    }
}
