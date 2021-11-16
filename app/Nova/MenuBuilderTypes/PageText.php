<?php

namespace App\Nova\MenuBuilderTypes;

use OptimistDigital\MenuBuilder\MenuItemTypes\MenuItemTextType;


class PageText extends MenuItemTextType
{
    public static function getIdentifier(): string
    {
        return 'text';
    }

    public static function getName(): string
    {
        return 'Metin';
    }

    public static function getType(): string
    {
        return 'text';
    }

}
