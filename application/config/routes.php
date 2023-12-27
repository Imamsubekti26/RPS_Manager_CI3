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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'view/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['auth/login'] = 'view/login';
$route['auth/register']['GET'] = 'view/register';
$route['dashboard']['GET'] = 'view/dashboard';
$route['rps/(:any)']['GET'] = 'view/rps/$1';
$route['components/(:any)']['get'] = 'view/components/$1';

$route['api/auth/login']['POST'] = 'auth/login';
$route['api/auth/register']['POST'] = 'auth/register';
$route['api/auth/logout']['GET'] = 'auth/logout';

$route['api/prodi']['GET'] = 'prodi/index';
$route['api/matkul']['GET'] = 'matkul/index';

$route['api/rps'] = [
  'GET' => 'rps/index',
  'POST' => 'rps/insert',
];
$route['api/rps/(:num)'] = [
  'PUT' => 'rps/editInfo/$1',
  'DELETE' => 'rps/delete/$1',
];
$route['api/rps/(:num)/status/(:num)'] = [
  'PUT' => 'rps/editStatus/$1/$2',
];
$route['api/rps/(:num)/gam'] = [
  'PUT' => 'rps/editGam/$1',
];
$route['api/rps/(:num)/cap'] = [
  'PUT' => 'rps/editCap/$1',
];
$route['api/rps/(:num)/pra'] = [
  'PUT' => 'rps/editPra/$1',
];
$route['api/rps/(:num)/referensi'] = [
  'GET' => 'ref/index/$1',
  'POST' => 'ref/insert/$1',
];
$route['api/rps/(:num)/referensi/(:num)'] = [
  'DELETE' => 'ref/delete/$2',
];
$route['api/rps/(:num)/unit'] = [
  'GET' => 'unit/index/$1',
  'POST' => 'unit/insert/$1',
];
$route['api/rps/(:num)/unit/(:num)'] = [
  'GET' => 'unit/show/$2',
  'PUT' => 'unit/edit/$1/$2',
  'DELETE' => 'unit/delete/$2',
];
$route['api/rps/(:num)/nilai'] = [
  'GET' => 'persentase/index/$1',
  'POST' => 'persentase/insert/$1',
];
$route['api/rps/(:num)/nilai/(:num)'] = [
  'DELETE' => 'persentase/delete/$2',
];
$route['api/rps/(:num)/tugas'] = [
  'GET' => 'tugas/index/$1',
  'POST' => 'tugas/insert/$1',
];
$route['api/rps/(:num)/tugas/(:num)'] = [
  'GET' => 'tugas/show/$2',
  'PUT' => 'tugas/edit/$1/$2',
  'DELETE' => 'tugas/delete/$2',
];
$route['api/rps/(:num)/rencana'] = [
  'GET' => 'rencana/index/$1',
  'POST' => 'rencana/insert/$1',
];
$route['api/rps/(:num)/rencana/(:num)'] = [
  'GET' => 'rencana/show/$2',
  'PUT' => 'rencana/edit/$1/$2',
  'DELETE' => 'rencana/delete/$2',
];
