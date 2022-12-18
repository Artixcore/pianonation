<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {   return view('welcome');});

Route::post('payment', 'HomeController@payment')->name('payment');

Route::post('import', 'Product\ProductController@import')->name('import');

Route::get('piano/product/pur/{name}',  'HomeController@purches')->name('piano.product.pur');

// Form
Route::post('public-form', 'Form\FormController@home_form')->name('public-form');
Route::post('public-form-nonimg', 'Form\FormController@non_im')->name('public-form-nonimg');
Route::post('public-form-nonimgapp_mail', 'Form\FormController@app_mail')->name('public-form-nonimgapp_mail');
Route::post('worship-form', 'Form\FormController@home_form')->name('worship-form');

 Route::get('piano/search/{type}','HomeController@search_type')->name('piano.search');

//  Route::get('piano/product/{product_number}', function () {  return view('single'); });
 Route::get('piano/products',  'HomeController@all_piano')->name('piano.products');
 Route::get('piano/product/{product_id}',  'HomeController@product_number')->name('piano.product');
 Route::get('piano/brand',  'HomeController@brand')->name('piano.brand');
 Route::get('piano/mail',  'HomeController@product_number')->name('piano.mail');

//  Route::get('service', function () {  return view('service'); });
 Route::get('Piano/service', function () {  return view('service'); });
 Route::get('education', function () {  return view('education'); });

// Showroom
Route::get('showroom/{shop_number}', 'HomeController@showroom')->name('showroom');

 Route::get('shop-smart', function () {  return view('show.shopsmart'); });
 Route::get('player-piano', function () {  return view('show.player'); });
 Route::get('world-advance-piano', function () {  return view('show.advance'); });
 Route::get('consign-piano', function () {  return view('show.consign'); });
 Route::get('buy-my-piano', function () {  return view('show.buymypiano'); });
 Route::get('move-my-piano', function () {  return view('show.move'); });
 Route::get('upgrade-my-piano', function () {  return view('show.upgrade'); });
 Route::get('virtual-piano-appointment', function () {  return view('show.virtual'); });
 Route::get('tune-my-piano', function () {  return view('show.tune'); });


 Route::get('concert-piano-rental', function () {  return view('show.concert'); });
 Route::get('donate-my-piano', function () {  return view('show.donate'); });
 Route::get('store-my-piano', function () {  return view('show.store'); });

 Route::get('teacher-refferal-network', function () {  return view('show.teacher'); });
 Route::get('schools-house-worship', function () {  return view('show.school'); });
 Route::get('designer-broker-network', function () {  return view('show.designer'); });

 Route::get('cutting-edge-technology', function () {  return view('show.cutting'); });

// Route::get('/', 'Frontend\WelcomeController@index');

Route::post('welcome-mail','Form\FormController@home_form')->name('welcome-mail');

Auth::routes();

// Site
Route::get('site/see/{slug}', 'SiteController@visit_site')->name('site.see');
Route::get('site/edit/{site_number}', 'SiteController@edit')->name('site.edit');
Route::get('site/pro_sites/{site_number}', 'SiteController@pro_sites')->name('site.pro_sites');
Route::get('site/view', 'SiteController@view')->name('site.view');
Route::get('site/new', 'SiteController@new')->name('site.new');
Route::post('site/post', 'SiteController@post')->name('site.post');
Route::post('site/up_pro', 'SiteController@up_pro')->name('site.up_pro');
Route::post('site/update/{id}', 'SiteController@update')->name('site.update');
Route::post('site/delete/{id}', 'SiteController@delete_site')->name('site.delete');

// Frontend
Route::get('profile/{name}',  'Frontend\UserController@profile');
Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');

// Address
Route::get('admin/address', 'AddressController@view')->name('admin.address');
Route::post('admin/new', 'AddressController@new')->name('admin.new');
Route::post('address/delete/{id}', 'AddressController@address_delete')->name('address.delete');

// Campaign
Route::get('admin/campaign', 'CampaignController@adminview')->name('admin.campaign');
Route::get('admin/campaign/new', 'CampaignController@Adminnew')->name('admin.campaign.new');
Route::get('admin/campaign/adminviews/{camp_number}', 'CampaignController@adminviews')->name('admin.campaign.adminviews');
Route::post('admin/campaign/save_camp', 'CampaignController@save_campaign')->name('admin.campaign.save_camp');
Route::post('admin/campaign/delete/{id}', 'CampaignController@delete_camp')->name('admin.campaign.delete');

// SEO
Route::get('admin/seo', 'SeoController@admin')->name('admin.seo');
Route::get('admin/seo/new', 'SeoController@admin_new')->name('admin.seo.new');
Route::get('admin/seo/view/{number}', 'SeoController@admin_view')->name('admin.seo.view');
Route::post('admin/seo/delete/{id}', 'SeoController@delete_seo')->name('admin.seo.delete');
Route::post('admin/seo/save', 'SeoController@save_seo')->name('admin.seo.save');

// FAQ
Route::get('admin/faq', 'AddressController@faq')->name('admin.faq');
Route::post('faq/save', 'AddressController@faq_save')->name('faq.save');
Route::post('admin/faq/{id}', 'AddressController@faq_delete')->name('faq.delete');

// Icon
Route::post('icon/new', 'AddressController@icon_new')->name('icon.new');
Route::post('icon/delete/{id}', 'AddressController@icon_delete')->name('icon.delete');

// Service
Route::get('service/view', 'ServiceController@service')->name('service.view');
Route::get('service/new', 'ServiceController@service_new')->name('service.new');
Route::post('service/post', 'ServiceController@service_post')->name('service.post');
Route::post('service/delete/{id}', 'ServiceController@service_delete')->name('service.delete');

// Manu
Route::post('brand', 'TaskController@brand')->name('brand');
Route::post('menu', 'TaskController@menu')->name('menu');

// Task
Route::post('task', 'TaskController@task')->name('task');

// Employee
Route::get('employee/view', 'EmployeeController@view')->name('employee.view');
Route::get('employee/new', 'EmployeeController@add')->name('employee.add');
Route::post('employee/post', 'EmployeeController@post')->name('employee.post');
Route::get('employee/single/{name}', 'EmployeeController@single')->name('employee.single');
Route::get('employee/edit/{name}', 'EmployeeController@edit')->name('employee.edit');
Route::post('employee/update/{id}', 'EmployeeController@update')->name('employee.update');
Route::post('employee/delete/{id}', 'EmployeeController@delete_user')->name('employee.delete');

// Contact
Route::get('contact/view', 'CustomerController@view')->name('contact.view');
Route::get('customer/new', 'CustomerController@new')->name('customer.new');
Route::post('customer/add', 'CustomerController@add')->name('customer.add');

// Shop
Route::get('shop/view', 'ShopController@view')->name('shop.view');
Route::get('shop/new', 'ShopController@new')->name('shop.new');
Route::get('shop/visit/{shop_number}', 'ShopController@visit')->name('shop.visit');
Route::get('shop/edit/{shop_number}', 'ShopController@edit')->name('shop.edit');
Route::post('shop/edit/{id}', 'ShopController@update')->name('shop.edit');
Route::post('shop/image/{id}', 'ShopController@update_shop_image')->name('shop.image');
Route::post('shop/delete/{id}', 'ShopController@delete_show')->name('shop.delete');
Route::post('shop/store', 'ShopController@store')->name('shop.store');

Route::get('shop/user', 'ShopController@user')->name('shop.user');

//Products

Route::post('category', 'Product\ProductController@post_cat')->name('category');
Route::post('subcategory', 'Product\ProductController@subcategory')->name('subcategory');

Route::post('store','ProductController@store')->name('store');

Route::namespace('Product')->prefix('product')->name('product.')->group(function(){

Route::get('view','ProductController@view')->name('view');
Route::get('single/{product_id}','ProductController@single')->name('single');
Route::get('single/edit/{product_id}','ProductController@edit')->name('single.edit');
Route::get('editimage/{product_id}','ProductController@editimage')->name('editimage');
Route::post('update/{id}','ProductController@update')->name('update');

Route::post('update_image/{id}','ProductController@update_image')->name('update_image');
Route::post('update_image_main/{id}','ProductController@update_image_main')->name('update_image_main');
Route::post('delete_image/{id}','ProductController@delete_image')->name('delete_image');

Route::get('newPro','ProductController@newPro')->name('newPro');

Route::get('edit/{product_number}','ProductController@edit')->name('edit');

// Route::resource('store','ProductController');
Route::post('store','ProductController@store')->name('store');
Route::post('delete/{id}','ProductController@delete')->name('delete');
Route::post('new','ProductController@new')->name('new');

// Orders
Route::get('orders', 'ProductController@orders')->name('orders');
Route::get('orders/single/{book_number}', 'ProductController@orders_single')->name('orders.single');
Route::post('orders/single', 'ProductController@post_order')->name('orders.single');
});

Route::get('checkout','CheckoutController@checkout')->name('checkout');
Route::post('checkout','CheckoutController@afterpayment')->name('checkout.credit-card');

// Lead
Route::get('admin/lead', 'Lead\LeadController@index')->name('admin.lead');
Route::get('admin/lead/view/{f_name}', 'Lead\LeadController@lead_in')->name('admin.lead.view');
Route::get('admin/lead/new', 'Lead\LeadController@Adminnew')->name('admin.lead.new');
Route::post('admin/lead/save', 'Lead\LeadController@save_lead')->name('admin.lead.savelead');
Route::post('admin/lead/delete/{id}', 'Lead\LeadController@delete_lead')->name('admin.lead.delete');
// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});


// Author
    // Dashboard
    Route::get('author/dashboard', 'Author\DashboardController@index')->name('author.dashboard');

    // Contact
    Route::namespace('Author')->prefix('author')->name('author.')->group(function(){
    Route::get('customer/new', 'CustomerController@new')->name('customer.new');
    Route::get('contact/view', 'CustomerController@view')->name('contact.view');
    Route::post('customer/add', 'CustomerController@add')->name('customer.add');
    });

    // Showroom
    Route::namespace('Author')->prefix('author')->name('author.')->group(function(){
    Route::get('shop/view', 'ShopController@visit')->name('shop.view');

    });

    // Products
    Route::namespace('Author')->prefix('author')->name('author.')->group(function(){
    Route::post('category', 'ProductController@post_cat')->name('category');
    Route::post('subcategory', 'ProductController@subcategory')->name('subcategory');

    Route::get('view','ProductController@view')->name('view');
    Route::get('single/{product_id}','ProductController@single')->name('single');
    Route::get('single/edit/{product_id}','ProductController@edit')->name('single.edit');
    Route::post('update/{id}','ProductController@update')->name('update');

    Route::get('newPro','ProductController@newPro')->name('newPro');

    Route::get('edit/{product_id}','ProductController@edit')->name('edit');

    Route::post('store','ProductController@store')->name('store');
    Route::post('new','ProductController@new')->name('new');
});

// Lead
Route::get('author/lead', 'Lead\LeadController@Aindex')->name('author.lead');
Route::get('author/lead/new', 'Lead\LeadController@Anew')->name('author.lead.new');
Route::post('author/lead/save', 'Lead\LeadController@save_lead')->name('author.lead.savelead');

//Campaign
Route::get('author/campaign', 'CampaignController@authorview')->name('author.campaign');
Route::get('author/campaign/new', 'CampaignController@authornew')->name('author.campaign.new');
Route::get('author/campaign/adminviews/{camp_number}', 'CampaignController@authorviews')->name('author.campaign.adminviews');

// SEO
Route::get('author/seo', 'SeoController@author')->name('author.seo');
Route::get('author/seo/new', 'SeoController@author_new')->name('author.seo.new');
Route::get('author/seo/view/{number}', 'SeoController@author_view')->name('author.seo.view');

// Slide
Route::get('author/slide', 'SeoController@slide')->name('author.slide');
Route::get('author/slide/new', 'SeoController@slide_new')->name('author.slide.new');
Route::post('author/slide/new', 'SeoController@slide_post')->name('author.slide.new');
Route::post('author/slide/delete/{id}', 'SeoController@delete_slide')->name('author.slide.delete');

// Orders
Route::get('author/orders', 'Product\ProductController@authorders')->name('author.orders');
Route::get('author/orders/single/{book_number}', 'Product\ProductController@authororders_single')->name('author.orders.single');
Route::post('orders/single', 'Product\ProductController@post_order')->name('orders.single');

// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});
