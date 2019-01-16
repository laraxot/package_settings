<?php



namespace XRA\Settings\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use XRA\Extend\Services\ThemeService;

class ConfigController extends Controller
{
    public function index()
    {
        $params = \Route::current()->parameters();
        $rows = \Config::all();
        $navs = \Config::all();
        $view = ThemeService::getView();

        return view($view)->with('rows', $rows)
                ->with('params', $params)
                ->with('navs', $navs)
                ->with('nav_active', '')
                ->with('view', $view);
    }

    public function edit()
    {
        $params = \Route::current()->parameters();
        //dd($params);
        \extract($params);
        $navs = \Config::all();
        //$rows=\Config::get($config_file);
        $rows = config($id_config);
        $view = ThemeService::getView();

        return view($view)->with('rows', $rows)
                ->with('params', $params)
                ->with('navs', $navs)
                ->with('nav_active', $id_config)
                ->with('view', $view);
    }

    /*

    public function editConfigFile(){
        $params = \Route::current()->parameters();
        extract($params);
        $navs=\Config::all();
        //$rows=\Config::get($config_file);
        $rows=config($config_file);
        $view=ThemeService::getView();
        return view($view)->with('rows', $rows)
                ->with('params',$params)
                ->with('navs',$navs)
                ->with('nav_active',$config_file)
                ->with('view',$view);
    }
    */

    public function update(Request $request)
    {
        $params = \Route::current()->parameters();
        \extract($params);
        if (isset($id_config) && !isset($config_file)) {
            $config_file = $id_config;
        }
        $data = $request->all();
        $data['_token'] = '';
        unset($data['_token']);
        $data['_method'] = '';
        unset($data['_method']);
        $res = setConfig([
            'file' => $config_file,
            'data' => $data,
            //'msg'=>'['.$config_file.']!',
            ]);
        $msg = 'Aggiornato ['.$config_file.']!';
        \Session::flash('status', $msg.' '.\Carbon\Carbon::now());
        //return \Redirect::back();
        return redirect()->route('settings.config.edit', $params);
    }

    //end function update
}//end class
