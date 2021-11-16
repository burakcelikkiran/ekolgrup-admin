<?php

namespace App\Nova\MenuBuilderTypes;

use App\Models\Page;
use OptimistDigital\MenuBuilder\MenuItemTypes\MenuItemStaticURLType;



class PageSlug extends MenuItemStaticURLType
{
    public static function getIdentifier(): string
    {
        return 'static-url';
    }

    public static function getName(): string
    {
        return 'Static URL';
    }

    public static function getType(): string
    {
        return 'static-url';
    }

    public static function getRules(): array
    {
        return [
            'value' => 'required',
        ];
    }

}
