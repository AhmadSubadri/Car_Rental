<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// default loader
$route['default_controller'] = 'Users/Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// interface load
$route["services"] = 'Users/Home/services';
$route["pricing"] = 'Users/Home/pricing';
$route["user/home/detail"] = 'Users/Produk_detail/get/';

//artikel
$route["artikel"] = 'Users/Home/article';
$route["syarat"] = 'Users/Home/syarat';
$route["contact"] = 'Users/Home/contact';

//admin loaded page
$route["administrator"] = 'Admin/Auth';
$route["administrator/procces"] = 'Admin/Auth/cek_login';
$route["adminstrator/dashboard"] = 'Admin/Dashboard';

//admin get data mobil
$route["adminstrator/mobil"] = 'Admin/Mobil';
$route["adminstrator/mobil/create"] = 'Admin/Mobil/create';

//admin get data services
$route["administrator/services"] = 'Admin/Layanan';
$route["administrator/services/create"] = 'Admin/Layanan/create';

//admin get data articel
$route["administrator/artikel"] = 'Admin/Article';
$route["administrator/artikel/create"] = 'Admin/Article/create';

//syarat
$route["administrator/syarat"] = 'Admin/Syarat';
$route["administrator/syarat/create"] = 'Admin/Syarat/create';

//pricing
$route["administrator/harga"] = 'Admin/Pricing';
$route["administrator/harga/create"] = 'Admin/Pricing/create';

//message
$route["administrator/pesan"] = 'Admin/Contact';

//admin
$route["administrator/admin"] = 'Admin/Auth/admin';
$route["administrator/admin/cretae"] = 'Admin/Auth/create';