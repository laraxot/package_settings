<?php



namespace XRA\Settings;

use Illuminate\Support\ServiceProvider;
use XRA\Extend\Traits\ServiceProviderTrait;

class SettingsServiceProvider extends ServiceProvider
{
    use ServiceProviderTrait;

    public static function topToolbar()
    {
        $rows = \Config::all();

        return view('settings::admin.topToolbar')->with('rows', $rows);
    }
}
