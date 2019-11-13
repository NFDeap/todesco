<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('/',['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

Route::get('/sobre',['as'=>'site.sobre', 'uses'=>'Site\PaginaController@sobre']);

Route::get('/contato',['as'=>'site.contato', 'uses'=>'Site\PaginaController@contato']);

Route::post('/contato/enviar',['as'=>'site.contato.enviar', 'uses'=>'Site\PaginaController@enviarContato']);

Route::get('/trabalheconosco',['as'=>'site.trabalheconosco', 'uses'=>'Site\PaginaController@trabalheConosco']);

Route::post('/trabalheconosco/enviar',['as'=>'site.trabalheconosco.enviar', 'uses'=>'Site\PaginaController@enviarTrabalheConosco']);

Route::get('/financiamento',['as'=>'site.financiamento', 'uses'=>'Site\PaginaController@financiamento']);

Route::post('/financiamento/enviar',['as'=>'site.financiamento.enviar', 'uses'=>'Site\PaginaController@enviarFinanciamento']);




Route::get('/carro/{id}/{titulo?}',['as'=>'site.carro', 'uses'=>'Site\CarroController@index']);


Route::get('/busca}',['as'=>'site.busca', 'uses'=>'Site\HomeController@busca']);


/* Rota Login */
Route::get('/admin/login',['as'=>'admin.login', function(){
    return view('admin.login.index');
}]);

Route::post('/admin/login',['as'=>'admin.login', 'uses'=>'Admin\UsuarioController@login']);

Route::group(['middleware'=>'auth'], function(){

    Route::get('/admin/login/sair',['as'=>'admin.login.sair', 'uses'=>'Admin\UsuarioController@sair']);

    Route::get('/admin',['as'=>'admin.principal', function(){
        return view('admin.principal.index');    
    }]);


    Route::get('/admin/usuarios',['as'=>'admin.usuarios', 'uses'=>'Admin\UsuarioController@index']);

    Route::get('/admin/usuarios/adicionar',['as'=>'admin.usuarios.adicionar', 'uses'=>'Admin\UsuarioController@adicionar']);

    Route::post('/admin/usuarios/salvar',['as'=>'admin.usuarios.salvar', 'uses'=>'Admin\UsuarioController@salvar']);

    Route::get('/admin/usuarios/editar/{id}',['as'=>'admin.usuarios.editar', 'uses'=>'Admin\UsuarioController@editar']);

    Route::put('/admin/usuarios/atualizar/{id}',['as'=>'admin.usuarios.atualizar', 'uses'=>'Admin\UsuarioController@atualizar']);

    Route::get('/admin/usuarios/deletar/{id}',['as'=>'admin.usuarios.deletar', 'uses'=>'Admin\UsuarioController@deletar']);


    Route::get('/admin/contatos',['as'=>'admin.contatos', 'uses'=>'Admin\ContatoController@index']);

    Route::post('/admin/contatos/salvar',['as'=>'admin.contatos.salvar', 'uses'=>'Admin\ContatoController@salvar']);

    Route::get('/admin/contatos/editar/{id}',['as'=>'admin.contatos.editar', 'uses'=>'Admin\ContatoController@editar']);

    Route::put('/admin/contatos/atualizar/{id}',['as'=>'admin.contatos.atualizar', 'uses'=>'Admin\ContatoController@atualizar']);



    Route::get('/admin/marcas',['as'=>'admin.marcas', 'uses'=>'Admin\MarcaController@index']);

    Route::get('/admin/marcas/adicionar',['as'=>'admin.marcas.adicionar', 'uses'=>'Admin\MarcaController@adicionar']);

    Route::post('/admin/marcas/salvar',['as'=>'admin.marcas.salvar', 'uses'=>'Admin\MarcaController@salvar']);

    Route::get('/admin/marcas/editar/{id}',['as'=>'admin.marcas.editar', 'uses'=>'Admin\MarcaController@editar']);

    Route::put('/admin/marcas/atualizar/{id}',['as'=>'admin.marcas.atualizar', 'uses'=>'Admin\MarcaController@atualizar']);

    Route::get('/admin/marcas/deletar/{id}',['as'=>'admin.marcas.deletar', 'uses'=>'Admin\MarcaController@deletar']);



    
    Route::get('/admin/modelos',['as'=>'admin.modelos', 'uses'=>'Admin\ModeloController@index']);

    Route::get('/admin/modelos/adicionar',['as'=>'admin.modelos.adicionar', 'uses'=>'Admin\ModeloController@adicionar']);

    Route::post('/admin/modelos/salvar',['as'=>'admin.modelos.salvar', 'uses'=>'Admin\ModeloController@salvar']);

    Route::get('/admin/modelos/editar/{id}',['as'=>'admin.modelos.editar', 'uses'=>'Admin\ModeloController@editar']);

    Route::put('/admin/modelos/atualizar/{id}',['as'=>'admin.modelos.atualizar', 'uses'=>'Admin\ModeloController@atualizar']);

    Route::get('/admin/modelos/deletar/{id}',['as'=>'admin.modelos.deletar', 'uses'=>'Admin\ModeloController@deletar']);




    Route::get('/admin/paginas',['as'=>'admin.paginas','uses'=>'Admin\PaginaController@index']);

    Route::get('/admin/paginas/editar/{id}',['as'=>'admin.paginas.editar','uses'=>'Admin\PaginaController@editar']);

    Route::put('/admin/paginas/atualizar/{id}',['as'=>'admin.paginas.atualizar','uses'=>'Admin\PaginaController@atualizar']);

    
    Route::get('/admin/usuarios/papel/{id}',['as'=>'admin.usuarios.papel', 'uses'=>'Admin\UsuarioController@papel']);
    
    Route::post('/admin/usuarios/papel/salvar/{id}',['as'=>'admin.usuarios.papel.salvar', 'uses'=>'Admin\UsuarioController@salvarPapel']);

    Route::get('/admin/usuarios/papel/remover/{id}/{papel_id}',['as'=>'admin.usuarios.papel.remover', 'uses'=>'Admin\UsuarioController@removerPapel']);

    
    Route::get('/admin/carros',['as'=>'admin.carros', 'uses'=>'Admin\CarroController@index']);

    Route::get('/admin/carros/adicionar',['as'=>'admin.carros.adicionar', 'uses'=>'Admin\CarroController@adicionar']);

    Route::post('/admin/carros/salvar',['as'=>'admin.carros.salvar', 'uses'=>'Admin\CarroController@salvar']);

    Route::get('/admin/carros/editar/{id}',['as'=>'admin.carros.editar', 'uses'=>'Admin\CarroController@editar']);

    Route::put('/admin/carros/atualizar/{id}',['as'=>'admin.carros.atualizar', 'uses'=>'Admin\CarroController@atualizar']);

    Route::get('/admin/carros/deletar/{id}',['as'=>'admin.carros.deletar', 'uses'=>'Admin\CarroController@deletar']);



    Route::get('/admin/galerias/{id}',['as'=>'admin.galerias', 'uses'=>'Admin\GaleriaController@index']);

    Route::get('/admin/galerias/adicionar/{id}',['as'=>'admin.galerias.adicionar', 'uses'=>'Admin\GaleriaController@adicionar']);

    Route::post('/admin/galerias/salvar/{id}',['as'=>'admin.galerias.salvar', 'uses'=>'Admin\GaleriaController@salvar']);

    Route::get('/admin/galerias/editar/{id}',['as'=>'admin.galerias.editar', 'uses'=>'Admin\GaleriaController@editar']);

    Route::put('/admin/galerias/atualizar/{id}',['as'=>'admin.galerias.atualizar', 'uses'=>'Admin\GaleriaController@atualizar']);

    Route::get('/admin/galerias/deletar/{id}',['as'=>'admin.galerias.deletar', 'uses'=>'Admin\GaleriaController@deletar']);




    Route::get('/admin/slides',['as'=>'admin.slides', 'uses'=>'Admin\SlideController@index']);

    Route::get('/admin/slides/adicionar',['as'=>'admin.slides.adicionar', 'uses'=>'Admin\SlideController@adicionar']);

    Route::post('/admin/slides/salvar',['as'=>'admin.slides.salvar', 'uses'=>'Admin\SlideController@salvar']);

    Route::get('/admin/slides/editar/{id}',['as'=>'admin.slides.editar', 'uses'=>'Admin\SlideController@editar']);

    Route::put('/admin/slides/atualizar/{id}',['as'=>'admin.slides.atualizar', 'uses'=>'Admin\SlideController@atualizar']);

    Route::get('/admin/slides/deletar/{id}',['as'=>'admin.slides.deletar', 'uses'=>'Admin\SlideController@deletar']);




    Route::get('/admin/papel',['as'=>'admin.papel', 'uses'=>'Admin\PapelController@index']);

    Route::get('/admin/papel/adicionar',['as'=>'admin.papel.adicionar', 'uses'=>'Admin\PapelController@adicionar']);

    Route::post('/admin/papel/salvar',['as'=>'admin.papel.salvar', 'uses'=>'Admin\PapelController@salvar']);

    Route::get('/admin/papel/editar/{id}',['as'=>'admin.papel.editar', 'uses'=>'Admin\PapelController@editar']);

    Route::put('/admin/papel/atualizar/{id}',['as'=>'admin.papel.atualizar', 'uses'=>'Admin\PapelController@atualizar']);

    Route::get('/admin/papel/deletar/{id}',['as'=>'admin.papel.deletar', 'uses'=>'Admin\PapelController@deletar']);

    Route::get('/admin/papel/permissao/{id}',['as'=>'admin.papel.permissao', 'uses'=>'Admin\PapelController@permissao']);

    Route::get('/admin/papel/permissao/{id}/salvar',['as'=>'admin.papel.permissao.salvar', 'uses'=>'Admin\PapelController@salvarPermissao']);

    Route::get('/admin/papel/permissao/{id}/remover/{id_permissao}',['as'=>'admin.papel.permissao.remover', 'uses'=>'Admin\PapelController@removerPermissao']);
    



    Route::get('/admin/papel/permissao/{id}',['as'=>'admin.papel.permissao', 'uses'=>'Admin\PapelController@permissao']);

    Route::post('/admin/papel/permissao/salvar/{id}',['as'=>'admin.papel.permissao.salvar', 'uses'=>'Admin\PapelController@salvarPermissao']);

    Route::get('/admin/papel/permissao/remover/{id}/{id_permissao}',['as'=>'admin.papel.permissao.remover', 'uses'=>'Admin\PapelController@removerPermissao']);


});
