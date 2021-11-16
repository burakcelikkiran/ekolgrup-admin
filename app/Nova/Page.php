<?php

namespace App\Nova;

use App\Nova\Actions\PublishPage;
use App\Nova\Flexible\Layouts\WysiwygLayout;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Page extends Resource
{
    public static $displayInNavigation = false;
    public static function label() {
        return 'Sayfa Yönetimi';}
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Page::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name','slug',
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
            Text::make('Sayfa Adı','name'),
            Text::make('Sayfa Linki','slug'),
            Flexible::make('Content')
                ->addLayout('Fotoğraf Bölümü', 'image', [
//                    Image::make('Fotoğraf', 'thumbnail'),
                    MediaLibrary::make('Fotoğraf', 'resim')
//                    Text::make('Title'),
//                    Text::make('Video ID (YouTube)', 'video'),
//                    Text::make('Video Caption', 'caption')
                ])
                ->addLayout('Fotoğraf Bölümü', 'image', [
//                    Image::make('Fotoğraf', 'thumbnail'),
                    MediaLibrary::make('Fotoğraf', 'resim')
//                    Text::make('Title'),
//                    Text::make('Video ID (YouTube)', 'video'),
//                    Text::make('Video Caption', 'caption')
                ])
                ->addLayout(WysiwygLayout::class)
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
