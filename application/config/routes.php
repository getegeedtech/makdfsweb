<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/notfound';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = "welcome/about";
$route['contact'] = "welcome/contact";
$route['privacy'] = "welcome/privacy";
$route['terms'] = "welcome/terms";
$route['services'] = "welcome/services";
$route['api'] = "welcome/api";
$route['blogs'] = "welcome/blog";
$route['education'] = "welcome/education";
$route['sendallmail'] = "welcome/sendallmail";
$route['chart'] = "welcome/chart";
$route['blog/(:any)'] = "welcome/blog_single/$1";