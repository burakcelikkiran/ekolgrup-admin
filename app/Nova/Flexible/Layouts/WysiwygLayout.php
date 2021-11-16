<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class WysiwygLayout extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'wysiwyg';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'wysiwyg';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Başlık'),
            Markdown::make('İçerik'),
        ];
    }

}
