<?php

use ClassicO\NovaMediaLibrary\API;
use OptimistDigital\NovaSettings\NovaSettings;

if (! function_exists('getImageLibraryImage')) {
    function getImageLibraryImage($key, $default = null) {
        return ClassicO\NovaMediaLibrary\Core\Model::find($key);
    }
}
if (!function_exists('SettingsDB')) {
    function SettingsDB($settingKey, $default = null)
    {
        return NovaSettings::getSetting($settingKey, $default);
    }
}
if (! function_exists('PhoneFormat')) {
    function PhoneFormat($settingKey, $default = null) {
        $data=NovaSettings::getSetting($settingKey, $default);
        return substr($data, 0, 3)." ".substr($data, 3, 3)." ".substr($data,6);
    }
}
if (! function_exists('PhoneFormat1')) {
    function PhoneFormat1($settingKey, $default = null) {
        $data=NovaSettings::getSetting($settingKey, $default);
        return substr($data, 0, 3)." ".substr($data, 3, 2)." ".substr($data,5);
    }
}
if (! function_exists('filesThumb')) {
    function filesThumb($ids , $Size) {
        return API::getFiles($ids , $imgSize = $Size, $object = false);

    }
}

