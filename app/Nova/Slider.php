<?php

namespace App\Nova;

use App\Nova\Actions\SliderPublish;
use ClassicO\NovaMediaLibrary\MediaLibrary;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use OptimistDigital\NovaSettings\NovaSettings;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Slider extends Resource
{

    public static function label() {
        return 'Slider';}

    use HasSortableRows;
    public static $priority = 0;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Slider::class;

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
        'id',
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
            Text::make('Başlık(Zorunlu)','slider_title'),
            Markdown::make('Slider Üzeri Metni','slider_text')->hideFromIndex(),
            Text::make('Yönlendirme Linki','slider_link')->hideFromIndex(),
            MediaLibrary::make('Slider Fotoğrafı(Zorunlu)', 'image_id')->types(['Image'])->preview('full'),
            Heading::make('Slider Boyutu "'.NovaSettings::getSetting('sliderboyut',0).'" olmalıdır.'),
            Boolean::make('Sliderda Göster','isactive'),
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
            new SliderPublish(),
        ];
    }
}
