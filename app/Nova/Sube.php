<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Sube extends Resource
{
    public static function label() {
        return 'Şube Bilgileri';}

    use HasSortableRows;
    public static $priority = 20;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Sube::class;

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
        'id','isim','adres','telephone','email',
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
            Text::make('Şube Adı','isim'),
            Text::make('Şube Adresi','adres')->hideFromIndex(),
            Text::make('Şube Mail','email')->hideFromIndex(),
            Text::make('Şube Telefon','telephone'),
            new Panel('Lokasyon Bilgileri', $this->Lokasyon()),
        ];
    }

    public function Lokasyon()
    {
        return [
            Text::make('LAT','lat')->withMeta(['extraAttributes' => ['maxlength' => 10]])->hideFromIndex(),
            Text::make('LNG','lng')->withMeta(['extraAttributes' => ['maxlength' => 10]])->hideFromIndex(),

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
        return [];
    }
}
