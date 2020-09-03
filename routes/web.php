<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('formRegistro/{tipo}', function ($tipo) {
    return view('frmRegistro',compact('tipo'));
})->name('formRegistro');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Proveedor */
Route::post('/formRegistro/registro/insertProveedor', 'ProveedorController@insertProveedor')->name('insertProveedor');

/*Persona */
Route::get('/formRegistro/validacion/validarDni/{dni}', 'PersonaController@validarDni')->name('validarDni');

/*Empresa */
Route::get('/formRegistro/validacion/validarRuc/{ruc}', 'EmpresaController@validarRuc')->name('validarRuc');


/*Mercados y sectores */
Route::get('/formRegistro/mercados/listMercados/{dist}', 'MercadoController@listMercados')->name('listMercados');
Route::get('/formRegistro/mercados/listSectoresMercados/{id}', 'MercadoController@listSectoresMercados')->name('listSectoresMercados');

/*Categorias */ 
Route::get('/formRegistro/categorias/listCategorias', 'CategoriaController@listCategorias')->name('listCategorias');


 /*ubigeo */
 Route::get('/formRegistro/ubigeo/departamentos', 'UbigeoController@departamentos')->name('departamentos');
 Route::get('/formRegistro/ubigeo/provincias/{id}', 'UbigeoController@provincias')->name('provincias');
 Route::get('/formRegistro/ubigeo/distritos/{id}', 'UbigeoController@distritos')->name('distritos');
