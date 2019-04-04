<?php
namespace XRA\Settings;
use XRA\Extend\BaseServiceProvider;
//use Illuminate\Support\ServiceProvider;
//use XRA\Extend\Traits\ServiceProviderTrait;

class SettingsServiceProvider extends BaseServiceProvider
{
    //use ServiceProviderTrait;

    //protected $defer = true;

    public static function topToolbar()
    {
        $rows = \Config::all();

        return view('settings::admin.topToolbar')->with('rows', $rows);
    }
}
