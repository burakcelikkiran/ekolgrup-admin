<?php
namespace App\Http\Menus;

use Illuminate\Support\Arr;

class Menu
{
    public static function getTopMenuHtml($menuName)
    {
        $menu = Arr::get(nova_get_menus(app()->getLocale())->where('name', $menuName), '0.menuItems');
        return view('components.menu')->with([
            'menu' => $menu,
            'submenu' => false,
        ]);
    }

    public static function getSideMenuHtml($menuName)
    {
        $menu = Arr::get(nova_get_menus(app()->getLocale())->where('name', $menuName), '0.menuItems');
        return view('components.side-menu')->with([
            'menu' => $menu,
            'submenu' => false,
        ]);
    }
}
