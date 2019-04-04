<?php
namespace XRA\Settings\Controllers\Admin;

use App\Http\Controllers\Controller;
//--- services
use XRA\Extend\Services\ThemeService;

class TranslationController extends Controller
{
    public function index()
    {
        
        //dd(\Lang::localeArray(false));
        //dd(__());
        $trans = trans();
        $rows = $trans->getLoader()->namespaces();
        $view = ThemeService::getView();

        return view($view)->with('view', $view)->with('rows', $rows)->with('lang', \App::getLocale());
        /*
    	dd($trans_namespaces);
    	dd(\Lang::get('food'));
    	*/
        //dd(trans('food::'));
        /*
    	dd($trans_loader);
    	$trans_hints=$trans_loader->hints;
    	dd($trans_hints);
    	dd(\Lang::get('pub_theme::restaurant'));
    	*/
    }
}
