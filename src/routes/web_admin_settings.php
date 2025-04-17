<?php


use XRA\Extend\Traits\RouteTrait;

$item0 = [
    [
        'name' => 'Config',
    ],
    [
        'name' => null,
        'prefix' => '{lang}',
        'as' => null,
        'subs' => [
            [
                'name' => 'Translation',
                'param_name' => 'namespace',
                'namespace' => 'Translation',
                'subs' => [
                    [
                        'name' => '{namespace}/Lista',
                        //'param_name'=>'group',
                        'as' => 'lista',
                        'controller' => 'ListaController',
                    ], //end sub_n
                ], //end subs
            ],
        ],
    ],
];
$namespace = $this->getNamespace();
$pack = class_basename($namespace);
$areas_prgs = [
    [
        'name' => $pack,
        'only' => ['index'],
        'subs' => $item0, //end subs
    ],
];

Route::group(
    [
    'prefix' => 'admin',
    'middleware' => ['web', 'auth'],
    'namespace' => $namespace.'\Controllers\Admin',
    ],
    function () use ($areas_prgs) {
        RouteTrait::dynamic_route($areas_prgs);
    }
);
