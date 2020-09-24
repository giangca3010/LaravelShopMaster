<?php

function getConfigValueFormSettingTable($configKey) {
    return $setting = App\Setting::where('config_key', $configKey)
        ->first() ?? null;
//    dd($setting);
}
