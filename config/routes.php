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



$route['home-page'] = 'welcome';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['All-Manufacturer']= 'admin_panel/show_all_manufacturer';
$route['Save-Manufacturer']= 'admin_panel/save_manufacturer';
$route['Add-Manufacturer']= 'admin_panel/show_add_manufacturer_form';
$route['manufacturer-product/(.+)']= 'welcome/manufacturer_product/$1';




$route['Product-Details/(.+)']= 'welcome/product_details/$1';
$route['All-Products']= 'admin_panel/show_all_products';
$route['change-product-status/(.+)/(.+)']= 'admin_panel/change_product_status/$1/$2';
$route['Edit-Product/(.+)']= 'admin_panel/edit_product/$1';
$route['Update-Product']= 'admin_panel/update_product';
$route['Save-Product']= 'admin_panel/save_product';
$route['Add-Product']= 'admin_panel/add_products';

 
$route['Update-category']= 'admin_panel/update_category';
$route['Edit-Category/(.+)']= 'admin_panel/edit_category/$1';
$route['change-category-status/(.+)/(.+)']= 'admin_panel/change_category_status/$1/$2';
$route['All-Category']= 'admin_panel/show_all_category';
$route['Save-category']= 'admin_panel/save_category';
$route['Add-Category']= 'admin_panel/show_add_category_form';
$route['category-product/(.+)']= 'welcome/category_product/$1';
$route['Product-Invoice']= 'admin_panel/product_invoice';
$route['View-Invoice']= 'admin_panel/view_invoice';



$route['registration-form']= 'admin_panel/register_new_admin';
$route['register-admin']= 'admin_panel/show_admin_register_form';


$route['admin-dashboard']= 'admin_panel/show_dashboard';
$route['admin-login']= 'admin_login/check_admin_login';
$route['admin-logout']= 'admin_login/check_admin_logout';   
$route['admin']= 'admin_login';



$route['Add-To-Cart'] = 'cart/add_to_cart';
$route['show-cart'] = 'cart/show_cart';
$route['Delete-To-Cart/(.+)'] = 'cart/delete_to_cart/$1';
$route['Update-Cart'] = 'cart/update_cart';
$route['Check-Out'] = 'checkout/check_out';
$route['Billing'] = 'checkout/billing';
// $route['login'] = 'checkout/login';


$route['Customer-registration'] = 'checkout/customer_registration';
$route['Customer-login'] = 'checkout/customer_login';




$route['Update-billing'] = 'checkout/update_billing';
$route['Shipping'] = 'checkout/shipping';
$route['Shipping-info'] = 'checkout/shipping_info';

$route['Payment'] = 'checkout/payment';
$route['Place-order'] = 'checkout/place_order';
$route['success-mess'] = 'checkout/success_mess';










