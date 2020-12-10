<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['regioes'] = 'main/regioes';
$route['regioes/(:num)'] = 'main/cidades_regiao/$1';
$route['cidades/(:num)'] = 'main/tipos/$1';
$route['eventos/(:num)/(:num)'] = 'main/eventos/$1/$2';
$route['cidades'] = 'main/cidades';
$route['cidades/busca'] = 'main/busca';
$route['eventos/detalhes/(:num)'] = 'eventos/evento/$1';
$route['login'] = 'usuarios/login';
$route['entrar'] = 'usuarios/entrar';
$route['cadastro'] = 'usuarios/cadastro';
$route['cadastrar'] = 'usuarios/cadastrar';
$route['sair'] = 'usuarios/logoff';
$route['tipos'] = 'eventos/tipos';
$route['eventos/tipo/(:num)'] = 'eventos/eventos_tipo/$1';
$route['eventos/salvar'] = 'eventos/cadastrar_evento';
$route['eventos/formulario'] = 'eventos/formulario_evento';


/*$route['eventos/regiao/(:num)'] = 'main/eventos_regioes/$1';
$route['eventos/cidade/(:num)'] = 'main/eventos_cidades/$1';
$route['eventos/tipo/(:num)'] = 'main/tipos_regiao/$1';
$route['eventos/(:num)'] = 'main/evento_detalhes/$1';
$route['cadastro'] = 'cadastrocontroller/mostrar_regioes';
$route['cadastro/regiao/(:num)'] = 'cadastrocontroller/mostrar_cidades/$1';
$route['cadastro/formulario/(:num)'] = 'cadastrocontroller/formulario_evento/$1';
$route['eventos/tipo/(:num)/(:num)'] = 'main/eventos_tipos/$1/$2';
*/
$route['erro'] = 'main/erro';
$route['404_override'] = 'main/erro';
$route['translate_uri_dashes'] = FALSE;