<?php

namespace App\Casts;

use App\Nova\Flexible\Layouts\VideoLayout;
use App\Nova\Flexible\Layouts\WysiwygLayout;
use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class PagesLayout extends FlexibleCast
{
    protected $layouts = [
        'wysiwyg' => WysiwygLayout::class,
        //'image' => VideoLayout::class,
    ];
}
