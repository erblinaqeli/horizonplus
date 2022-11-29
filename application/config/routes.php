<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'login';
$route['pages'] = 'pages/dashboard_view';
$route['adminat/create'] = 'adminat/create';
$route['adminat/update'] = 'adminat/update';
$route['adminat'] = 'adminat/index';
$route['perdoruesit/create'] = 'perdoruesit/create';
$route['perdoruesit/update'] = 'perdoruesit/update';
$route['perdoruesit'] = 'perdoruesit/index';
$route['perdoruesit/create_borgj'] = 'perdoruesit/create_borgj';
$route['perdoruesit/update_borgj'] = 'perdoruesit/update_borgj';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
