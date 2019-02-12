<?php
namespace XRA\Settings\Controllers\Admin\Settings\namespace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- traits
use XRA\Extend\Traits\CrudSimpleTrait as CrudTrait;
//--- services 
use XRA\Extend\Services\ThemeService;


use Zend;

class ListaController  extends Controller{
    public function index(){
    	//echo '['.__LINE__.']['.__FILE__.']';
    	//dd(\Lang::localeArray(false));
    	//dd(__());
        
    	$trans=trans();
    	$rows=$trans->getLoader()->namespaces();

    	$view=ThemeService::getView();
    	return view($view)->with('view',$view)->with('rows',$rows)->with('lang',\App::getLocale());

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