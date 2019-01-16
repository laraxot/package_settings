<?php



namespace XRA\Settings\Controllers\Admin\Translation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//--- services
use XRA\Extend\Services\ThemeService;
use XRA\Extend\Traits\ArrayTrait;

class ListaController extends Controller
{
    public function index()
    {
        $params = \Route::current()->parameters();
        \extract($params);
        $trans = trans();
        $rows = $trans->getLoader()->namespaces();
        $path = $rows[$namespace].\DIRECTORY_SEPARATOR.$lang;
        if (!\File::exists($path)) {
            echo '<br/>Directory non esiste ['.$path.']';
            \File::makeDirectory($path, 0775, true);
        }
        $files = \File::allFiles($path);
        $view = ThemeService::getView();

        return view($view)
                ->with('params', $params)
                ->with($params)
                ->with('path', $path)
                ->with('view', $view)
                ->with('rows', $files)
                ->with('lang', \App::getLocale());
    }

    public function edit(Request $request)
    {
        $params = \Route::current()->parameters();
        \extract($params);
        $trad = $namespace.'::'.$listum;
        $rows = trans($trad);

        $view = ThemeService::getView();

        return view($view)
                ->with('params', $params)
                ->with($params)
                ->with('view', $view)
                ->with('rows', $rows)
                ;
        //->with('lang',\App::getLocale());
    }

    public function update(Request $request)
    {
        $params = \Route::current()->parameters();
        \extract($params);
        $data = $request->all();
        $action = $data['_action']; //save_continue
        unset($data['_token']);
        unset($data['_method']);
        unset($data['_action']);
        $trans = trans();
        $rows = $trans->getLoader()->namespaces();
        $file = $listum;
        $filename = $rows[$namespace].\DIRECTORY_SEPARATOR.$lang.\DIRECTORY_SEPARATOR.$file.'.php';
        ArrayTrait::save(['data' => $data, 'filename' => $filename]);

        \Session::flash('status', 'Modifica Eseguita! ['.$filename.']');

        return \Redirect::back();
    }
}
