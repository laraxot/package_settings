<?php



namespace XRA\Settings\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use XRA\Extend\Services\ThemeService;
//-------- Models ----------------
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
        if (1 == $request->routelist) {
            return ArtisanTrait::exe('route:list');
        }

        $view = ThemeService::getView();

        return view($view);
    }
}
