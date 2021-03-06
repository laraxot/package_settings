<?php
namespace XRA\Settings\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use XRA\Extend\Services\ThemeService;
//--- traits
use XRA\Extend\Traits\ArtisanTrait;
//-------- Models ----------------

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
        if ($request->act=='routelist') {
            return ArtisanTrait::exe('route:list');
        }

        $view = ThemeService::getView();

        return view($view);
    }
}
