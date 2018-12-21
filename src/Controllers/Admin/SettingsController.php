<?php

namespace XRA\Settings\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use XRA\Extend\Traits\CrudSimpleTrait as CrudTrait;
//--- services
use XRA\Extend\Services\ThemeService;


//-------- Models ----------------
use XRA\LU\Models\User;
use XRA\Extend\Traits\ArtisanTrait;

/*--move to seo

*/
/*
use XRA\XRA\Packages;
use XRA\Settings\Models\Settings;
use XRA\Settings\Settings as Setts;
*/

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->routelist==1) {
            return ArtisanTrait::exe('route:list');
        }
        
        $view=ThemeService::getView();
        return view($view);
    }
}
