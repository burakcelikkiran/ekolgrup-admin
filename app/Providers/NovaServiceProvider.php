<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Laravel\Nova\Panel;
use Nibri10\NovaGrid\NovaGrid;
use OptimistDigital\NovaSettings\NovaSettings;
use OwenMelbz\RadioField\RadioButton;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::sortResourcesBy(function ($resource) {
            return $resource::$priority ?? 9999;
        });

        parent::boot();

        NovaSettings::addSettingsFields([
            Panel::make('Anadolu Yakası Bilgileri', [
                Number::make('Telefon Numarası', 'number')->rules( 'max:10')->help('Başında "0" olmadan yazınız'),
                Text::make('E-Posta', 'email')->rules('email')->help('Örnek: example@example'),
                Text::make('Adres','address'),
            ]),
            Panel::make('Avrupa Yakası Bilgileri', [
                Number::make('Telefon Numarası', 'number1')->rules( 'max:10')->help('Başında "0" olmadan yazınız'),
                Text::make('E-Posta', 'email1')->rules('email')->help('Örnek: example@example'),
                Text::make('Adres','address1'),
            ]),
        ], [], 'İletişim Bilgileri');
        NovaSettings::addSettingsFields([
            RadioButton::make('Hangisi Gösterilsin ?','isactive')
                ->options([
                    3 => 'Popup Gösterme',
                    0 => 'Popup Metni',
                    1 => 'Popup Görseli',
                    2 => 'Popup Frame',
                ])
                ->default(1)
                ->marginBetween()
                ->toggle([
                    3 => ['popupimage','videoframe','popupmetin'],
                    2 => ['popupimage','popupmetin'],
                    1 => ['videoframe','popupmetin'],
                    0 => ['popupimage','videoframe']
                ]),
            Textarea::make('Popup Metni','popupmetin'),
            Image::make('Popup Görseli', 'popupimage'),
            Text::make('Popup Frame', 'videoframe')->help('Eklenmek istenen içeriğin Embed kodu girilmelidir.'),
            Boolean::make('Buton Gösterilsin','buttonactive'),
            Text::make('Buton Yazısı', 'popupyazi'),
            Text::make('Buton Yönlendirme Linki', 'popuplink'),
        ], [], 'Popup');
        NovaSettings::addSettingsFields([
            Image::make('Varsayılan Logo','default_logo'),
            Image::make('Transparan Logo','logo'),
            Image::make('Siyah Logo','dark_logo'),
            Image::make('Beyaz Logo','white_logo'),
            Image::make('Favicon Logo','favicon_logo'),
        ], [], 'Logo Yönetimi');
        NovaSettings::addSettingsFields([
            Text::make('Google Analytics ID ','analytics'),
            Text::make('Slider Boyutu','sliderboyut'),
            Text::make('Duyuru Boyutu','duyuruboyut'),
            Text::make('Site Title Ön Ek','site_title'),
            Text::make('Meta Description','description'),
            Text::make('Meta Keywords','keywords'),
            Markdown::make('Footer Yazısı','footer_text'),
        ], [], 'Site Ayarları');

        NovaSettings::addSettingsFields([
            Panel::make('1. Link', [
                Text::make('Metin', 'link_name1')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link1')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target1')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('2. Link', [
                Text::make('Metin', 'link_name2')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link2')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target2')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('3. Link', [
                Text::make('Metin', 'link_name3')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link3')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target3')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('4. Link', [
                Text::make('Metin', 'link_name4')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link4')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target4')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('5. Link', [
                Text::make('Metin', 'link_name5')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link5')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target5')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('6. Link', [
                Text::make('Metin', 'link_name6')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link6')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target6')->withMeta(['size' => 'w-1/3']),
            ]),
            Panel::make('7. Link', [
                Text::make('Metin', 'link_name7')->withMeta(['size' => 'w-1/3']),
                Text::make('Link','link_link7')->withMeta(['size' => 'w-1/3']),
                Boolean::make('Yeni Sekmede Aç','link_target7')->withMeta(['size' => 'w-1/3']),
            ]),
        ], [], 'Faydalı Linkler');

        NovaSettings::addSettingsFields([
            Markdown::make('Sıkça Sorulan Sorular ','sorular'),
        ], [], 'Sıkça Sorulan Sorular');
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            new Help,
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \OptimistDigital\MenuBuilder\MenuBuilder,
            new \OptimistDigital\NovaSettings\NovaSettings,
            new \ClassicO\NovaMediaLibrary\NovaMediaLibrary(),
            new NovaGrid(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
