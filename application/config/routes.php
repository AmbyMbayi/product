<?php
defined('BASEPATH') OR exit('No direct script access allowed');









$route['default_controller'] = 'items';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['items/index'] = 'items/index';
$route['items/create'] = 'items/create';
$route['items/update'] = 'items/update';
$route['items/(:num)'] = 'items/view/$1';
