<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::login');
$routes->get('/login', 'Home::login');
$routes->post('/proses_login', 'Home::proses_login');
$routes->get('/logout', 'Home::logout');

//Admin
$routes->get('/admin/index', 'AdminController::index');
//kt

$routes->get('/kt/index', 'KTController::index');
//Data AT
$routes->get('/admin/at', 'AdminController::ATview');
$routes->get('/admin/create_at', 'AdminController::ATcreate');
$routes->post('/admin/saveAT', 'AdminController::saveAT');
$routes->get('/admin/at/delete/(:num)', 'AdminController::deleteAT/$1');

//Data KT
$routes->get('/admin/kt', 'AdminController::KTview');
$routes->get('/admin/create_kt', 'AdminController::KTcreate');
$routes->post('/admin/saveKT', 'AdminController::saveKT');
$routes->get('/admin/kt/delete/(:num)', 'AdminController::deleteKT/$1');

//Data NKP
$routes->get('/admin/nkp', 'AdminController::NKPview');
$routes->get('/admin/create_nkp', 'AdminController::NKPcreate');
$routes->post('/admin/saveNKP', 'AdminController::saveNKP');
$routes->get('/admin/nkp/delete/(:num)', 'AdminController::deleteNKP/$1');

//Data NKT
$routes->get('/admin/nkt', 'AdminController::NKTview');
$routes->get('/admin/create_nkt', 'AdminController::NKTcreate');
$routes->post('/admin/saveNKT', 'AdminController::saveNKT');
$routes->get('/admin/nkt/delete/(:num)', 'AdminController::deleteNKT/$1');

//Data PJ
$routes->get('/admin/pj', 'AdminController::PJview');
$routes->get('/admin/create_pj', 'AdminController::PJcreate');
$routes->post('/admin/savePJ', 'AdminController::savePJ');
$routes->get('/admin/pj/delete/(:num)', 'AdminController::deletePJ/$1');

//Data PT
$routes->get('/admin/pt', 'AdminController::PTview');
$routes->get('/admin/create_pt', 'AdminController::PTcreate');
$routes->post('/admin/savePT', 'AdminController::savePT');
$routes->get('/admin/pt/delete/(:num)', 'AdminController::deletePT/$1');

//AT
$routes->get('/at/index/(:num)', 'ATController::index/$1');

$routes->get('/at/bimbingan', 'ATController::BimbinganView');
$routes->get('/at/create_bimbingan', 'ATController::CreateBimbingan');
$routes->post('/at/saveBimbingan', 'ATController::saveBimbingan');
$routes->get('/at/edit_bimbingan/(:num)', 'ATController::EditBimbingan/$1');
$routes->post('/at/updateBimbingan/(:num)', 'ATController::updateBimbingan/$1');
$routes->get('/at/detail_bimbingan/(:num)', 'ATController::DetailBimbingan/$1');
$routes->get('/at/bimbingan/delete/(:num)', 'ATController::deleteBimbingan/$1');

$routes->get('/at/nkp', 'ATController::NKPView');
$routes->get('/at/create_nkp', 'ATController::CreateNKP');
$routes->post('/at/saveNKP', 'ATController::saveNKP');
$routes->get('/at/edit_nkp/(:num)', 'ATController::EditNKP/$1');
$routes->post('/at/updateNKP/(:num)', 'ATController::updateNKP/$1');
$routes->get('/at/detail_nkp/(:num)', 'ATController::DetailNKP/$1');
$routes->get('/at/nkp/delete/(:num)', 'ATController::deleteNKP/$1');
$routes->get('/at/form_updateNKP/(:num)', 'ATController::form_updateNKP/$1');

$routes->get('/at/nkt', 'ATController::NKTView');
$routes->get('/at/create_nkt', 'ATController::CreateNKT');
$routes->post('/at/saveNKT', 'ATController::saveNKT');
$routes->get('/at/edit_nkt/(:num)', 'ATController::EditNKT/$1');
$routes->post('/at/updateNKT/(:num)', 'ATController::updateNKT/$1');
$routes->get('/at/detail_nkt/(:num)', 'ATController::DetailNKT/$1');
$routes->get('/at/nkt/delete/(:num)', 'ATController::deleteNKT/$1');

$routes->get('/at/sasarankinerja', 'ATController::SasaranKinerjaView');
$routes->get('/at/create_sasaran', 'ATController::CreateSasaran');
$routes->post('/at/saveSasaran', 'ATController::saveSasaran');
$routes->get('/at/edit_sasaran/(:num)', 'ATController::EditSasaran/$1');
$routes->post('/at/updateSasaran/(:num)', 'ATController::updateSasaran/$1');
$routes->get('/at/detail_sasaran/(:num)', 'ATController::DetailSasaran/$1');
$routes->get('/at/sasaran/delete/(:num)', 'ATController::deleteSasaran/$1');


$routes->get('/at/profile/(:num)', 'ATController::ProfileView/$1');
$routes->post('/at/saveProfile/(:num)', 'ATController::saveProfile/$1');
$routes->post('/at/saveFotoProfile/(:num)', 'ATController::saveFotoProfile/$1');

$routes->get('/at/nkpp', 'ATController::NKPPView');
$routes->post('/at/detail_nkpp/(:num)', 'ATController::DetailNKPP/$1');

//KT
$routes->get('/kt/index/(:num)', 'KTController::index/$1');

$routes->get('/kt/bimbingan', 'KTController::BimbinganView');
$routes->get('/kt/create_bimbingan', 'KTController::CreateBimbingan');
$routes->post('/kt/saveBimbingan', 'KTController::saveBimbingan');
$routes->get('/kt/edit_bimbingan/(:num)', 'KTController::EditBimbingan/$1');
$routes->post('/kt/updateBimbingan/(:num)', 'KTController::updateBimbingan/$1');
$routes->get('/kt/detail_bimbingan/(:num)', 'KTController::DetailBimbingan/$1');
$routes->get('/kt/bimbingan/delete/(:num)', 'KTController::deleteBimbingan/$1');

$routes->get('/kt/nkp', 'KTController::NKPView');
$routes->get('/kt/create_nkp', 'KTController::CreateNKP');
$routes->post('/kt/saveNKP', 'KTController::saveNKPKT');
$routes->get('/kt/edit_nkp/(:num)', 'KTController::EditNKP/$1');
$routes->post('/kt/updateNKP/(:num)', 'KTController::updateNKP/$1');
$routes->get('/kt/detail_nkp/(:num)', 'KTController::DetailNKP/$1');
$routes->get('/kt/nkp/delete/(:num)', 'KTController::deleteNKP/$1');

$routes->get('/kt/nkt', 'KTController::NKTView');
$routes->get('/kt/create_nkt', 'KTController::CreateNKT');
$routes->post('/kt/saveNKT', 'KTController::saveNKTKT');
$routes->get('/kt/edit_nkt/(:num)', 'KTController::EditNKT/$1');
$routes->post('/kt/updateNKT/(:num)', 'KTController::updateNKT/$1');
$routes->get('/kt/detail_nkt/(:num)', 'KTController::DetailNKT/$1');
$routes->get('/kt/nkt/delete/(:num)', 'KTController::deleteNKT/$1');

$routes->get('/kt/sasarankinerja', 'KTController::SasaranKinerjaView');
$routes->get('/kt/create_sasaran', 'KTController::CreateSasaran');
$routes->post('/kt/saveSasaran', 'KTController::saveSasaran');
$routes->get('/kt/edit_sasaran/(:num)', 'KTController::EditSasaran/$1');
$routes->post('/kt/updateSasaran/(:num)', 'KTController::updateSasaran/$1');
$routes->get('/kt/detail_sasaran/(:num)', 'KTController::DetailSasaran/$1');
$routes->get('/kt/sasaran/delete/(:num)', 'KTController::deleteSasaran/$1');

$routes->get('/kt/profile/(:num)', 'KTController::ProfileView/$1');
$routes->post('/kt/saveProfile/(:num)', 'KTController::saveProfile/$1');
$routes->post('/kt/saveFotoProfile/(:num)', 'KTController::saveFotoProfile/$1');

$routes->get('/kt/nkpp', 'KTController::NKPPView');
$routes->post('/kt/detail_nkpp/(:num)', 'KTController::DetailNKPP/$1');


//KT Realisasi AT


//NKP
$routes->get('/kt/anggota/nkp_at', 'KTController::NKP_Anggota');
$routes->get('/kt/anggota/nkp_at/(:num)', 'KTController::NKP_Anggota/$1');
$routes->get('/kt/anggota/detail_nkp/(:num)', 'KTController::DetailNKP_Anggota/$1');
$routes->get('/kt/anggota/realisasi_nkp/(:num)', 'KTController::RealisasiNKP/$1');
$routes->post('/kt/saveNKP/(:num)', 'KTController::saveNKP/$1');


//NKT
$routes->get('/kt/anggota/nkt_at', 'KTController::NKT_Anggota');
$routes->get('/kt/anggota/nkt_at/(:num)', 'KTController::NKT_Anggota/$1');
$routes->get('/kt/anggota/detail_nkt/(:num)', 'KTController::DetailNKT_Anggota/$1');
$routes->get('/kt/anggota/realisasi_nkt/(:num)', 'KTController::RealisasiNKT/$1');
$routes->post('/kt/saveNKT/(:num)', 'KTController::saveNKT/$1');

//NSKP
$routes->get('/kt/anggota/nskp', 'KTController::NSKP_Anggota');
$routes->get('/kt/anggota/detail_nskp/(:num)', 'KTController::DetailNSKP_Anggota/$1');
$routes->get('/kt/anggota/realisasi/(:num)', 'KTController::Realisasi/$1');
$routes->post('/kt/saveSasaranAT/(:num)', 'KTController::saveSasaranAT/$1');
$routes->post('/kt/approveSasaranAT/(:num)', 'KTController::approveSasaranAT/$1');



//Tanggapan
$routes->get('/kt/anggota/do_tanggapan/(:num)', 'KTController::DoTanggapan/$1');
$routes->post('/kt/anggota/saveTanggapan/(:num)', 'KTController::SaveTanggapan/$1');

//BImbingan
$routes->get('/kt/anggota/tanggapan_bimbingan', 'KTController::TanggapanBimbingan');

//PJ
$routes->get('/pj/index/(:num)', 'PJController::index/$1');
$routes->get('/pj/profile/(:num)', 'PJController::Profile/$1');
$routes->post('/pj/saveProfile/(:num)', 'PJController::saveProfile/$1');
$routes->post('/pj/saveFotoProfile/(:num)', 'PJController::saveFotoProfile/$1');

//Ketua
//NKP
$routes->get('/pj/ketua/detail_nkp/(:num)', 'PJController::DetailNKP/$1');
$routes->get('/pj/ketua/review_nkp', 'PJController::ReviewNKP');
$routes->post('/pj/saveNKPKT/(:num)', 'PJController::saveNKPKT/$1');

//NKT
$routes->get('/pj/ketua/detail_nkt/(:num)', 'PJController::DetailNKT/$1');
$routes->get('/pj/ketua/review_nkt', 'PJController::ReviewNKT');
$routes->post('/pj/saveNKTKT/(:num)', 'PJController::saveNKTKT/$1');

//Sasaran
$routes->get('/pj/ketua/detail_sasaran/(:num)', 'PJController::DetailSasaran/$1');
$routes->get('/pj/ketua/review_sasaran', 'PJController::ReviewSasaran');
$routes->post('/pj/saveSasaranKT/(:num)', 'PJController::saveSasaranKT/$1');
$routes->post('/pj/approveSasaranKT/(:num)', 'PJController::approveSasaranKT/$1');

//DO
$routes->get('/pj/ketua/do_review_nkp/(:num)', 'PJController::DoReviewNKP/$1');
$routes->get('/pj/ketua/do_review_nkt/(:num)', 'PJController::DoReviewNKT/$1');
$routes->get('/pj/ketua/do_review_sasaran/(:num)', 'PJController::DoReviewSasaran/$1');


//Pengendali


//NKP
$routes->get('/pj/pengendali/nkp', 'PJController::NKP_Pengendali');
$routes->get('/pj/pengendali/detail_nkp/(:num)', 'PJController::DetailNKP_Pengendali/$1');
$routes->get('/pj/pengendali/realisasi_nkp/(:num)', 'PJController::RealisasiNKP/$1');
$routes->post('/pj/saveNKPPT/(:num)', 'PJController::saveNKPPT/$1');

//NKT
$routes->get('/pj/pengendali/nkt', 'PJController::NKt_Pengendali');
$routes->get('/pj/pengendali/detail_nkt/(:num)', 'PJController::DetailNKT_Pengendali/$1');
$routes->get('/pj/pengendali/realisasi_nkt/(:num)', 'PJController::RealisasiNKT/$1');
$routes->post('/pj/saveNKTPT/(:num)', 'PJController::saveNKTPT/$1');

//NSKP
$routes->get('/pj/pengendali/nskp', 'PJController::NSKP_Pengendali');
$routes->get('/pj/pengendali/realisasi/(:num)', 'PJController::Realisasi/$1');
$routes->get('/pj/pengendali/detail_nskp/(:num)', 'PJController::DetailNSKP_Pengendali/$1');
$routes->post('/pj/saveSasaranPT/(:num)', 'PJController::saveSasaranPT/$1');
$routes->post('/pj/approveSasaranPT/(:num)', 'PJController::approveSasaranPT/$1');

//Tanggapan
$routes->get('/pj/pengendali/do_tanggapan/(:num)', 'PJController::DoTanggapan/$1');
$routes->post('/pj/pengendali/saveTanggapan/(:num)', 'PJController::SaveTanggapan/$1');


//BImbingan
$routes->get('/pj/pengendali/tanggapan_bimbingan', 'PJController::TanggapanBimbingan');

//PT

$routes->get('/pt/index/(:num)', 'PTController::index/$1');

$routes->get('/pt/bimbingan', 'PTController::BimbinganView');
$routes->get('/pt/create_bimbingan', 'PTController::CreateBimbingan');
$routes->post('/pt/saveBimbingan', 'PTController::saveBimbingan');
$routes->get('/pt/edit_bimbingan/(:num)', 'PTController::EditBimbingan/$1');
$routes->post('/pt/updateBimbingan/(:num)', 'PTController::updateBimbingan/$1');
$routes->get('/pt/detail_bimbingan/(:num)', 'PTController::DetailBimbingan/$1');
$routes->get('/pt/bimbingan/delete/(:num)', 'PTController::deleteBimbingan/$1');


$routes->get('/pt/nkp', 'PTController::NKPView');
$routes->get('/pt/create_nkp', 'PTController::CreateNKP');
$routes->post('/pt/saveNKP', 'PTController::saveNKP');
$routes->get('/pt/edit_nkp/(:num)', 'PTController::EditNKP/$1');
$routes->post('/pt/updateNKP/(:num)', 'PTController::updateNKP/$1');
$routes->get('/pt/detail_nkp/(:num)', 'PTController::DetailNKP/$1');
$routes->get('/pt/nkp/delete/(:num)', 'PTController::deleteNKP/$1');

$routes->get('/pt/nkt', 'PTController::NKTView');
$routes->get('/pt/create_nkt', 'PTController::CreateNKT');
$routes->post('/pt/saveNKT', 'PTController::saveNKT');
$routes->get('/pt/edit_nkt/(:num)', 'PTController::EditNKT/$1');
$routes->post('/pt/updateNKT/(:num)', 'PTController::updateNKT/$1');
$routes->get('/pt/detail_nkt/(:num)', 'PTController::DetailNKT/$1');
$routes->get('/pt/nkt/delete/(:num)', 'PTController::deleteNKT/$1');

$routes->get('/pt/sasarankinerja', 'PTController::SasaranKinerjaView');
$routes->get('/pt/create_sasaran', 'PTController::CreateSasaran');
$routes->post('/pt/saveSasaran', 'PTController::saveSasaran');
$routes->get('/pt/edit_sasaran/(:num)', 'PTController::EditSasaran/$1');
$routes->post('/pt/updateSasaran/(:num)', 'PTController::updateSasaran/$1');
$routes->get('/pt/detail_sasaran/(:num)', 'PTController::DetailSasaran/$1');
$routes->get('/pt/sasaran/delete/(:num)', 'PTController::deleteSasaran/$1');

$routes->get('/pt/profile/(:num)', 'PTController::ProfileView/$1');
$routes->post('/pt/saveProfile/(:num)', 'PTController::saveProfile/$1');
$routes->post('/pt/saveFotoProfile/(:num)', 'PTController::saveFotoProfile/$1');

$routes->get('/pt/nkpp', 'PTController::NKPPView');
$routes->get('/pt/detail_nkpp', 'PTController::DetailNKPP');

//ANGGOTA
//NKP
$routes->get('/pt/anggota/detail_nkp/(:num)', 'PTController::DetailNKPAnggota/$1');
$routes->get('/pt/anggota/review_nkp', 'PTController::ReviewNKP');
$routes->post('/pt/saveNKPAT/(:num)', 'PTController::saveNKPAT/$1');

//NKT
$routes->get('/pt/anggota/detail_nkt/(:num)', 'PTController::DetailNKTAnggota/$1');
$routes->get('/pt/anggota/review_nkt', 'PTController::ReviewNKT');
$routes->get('/pt/anggota/review_nkt', 'PTController::ReviewNKT');
$routes->post('/pt/saveNKTAT/(:num)', 'PTController::saveNKTAT/$1');


//Sasaran
$routes->get('/pt/anggota/review_sasaran', 'PTController::ReviewSasaran');
$routes->get('/pt/anggota/detail_sasaran/(:num)', 'PTController::DetailSasaranAnggota/$1');
$routes->post('/pt/saveSasaranAT/(:num)', 'PTController::saveSasaranAT/$1');
$routes->post('/pt/approveSasaranAT/(:num)', 'PTController::approveSasaranAT/$1');

//DO
$routes->get('/pt/anggota/do_review_nkp/(:num)', 'PTController::DoReviewNKP/$1');
$routes->get('/pt/anggota/do_review_nkt/(:num)', 'PTController::DoReviewNKT/$1');
$routes->get('/pt/anggota/do_review_sasaran/(:num)', 'PTController::DoReviewSasaran/$1');

//KETUA


//NKP
$routes->get('/pt/ketua/nkp', 'PTController::NKP_Ketua');
$routes->get('/pt/ketua/nkp/(:num)', 'PTController::NKP_Ketua/$1');
$routes->get('/pt/ketua/detail_nkp/(:num)', 'PTController::DetailNKP_Ketua/$1');
$routes->get('/pt/ketua/realisasi_nkp/(:num)', 'PTController::RealisasiNKP/$1');
$routes->post('/pt/saveNKPKT/(:num)', 'PTController::saveNKPKT/$1');

//NKT
$routes->get('/pt/ketua/nkt', 'PTController::NKT_Ketua');
$routes->get('/pt/ketua/nkt/(:num)', 'PTController::NKT_Ketua/$1');
$routes->get('/pt/ketua/detail_nkt/(:num)', 'PTController::DetailNKT_Ketua/$1');
$routes->get('/pt/ketua/realisasi_nkt/(:num)', 'PTController::RealisasiNKT/$1');
$routes->post('/pt/saveNKTKT/(:num)', 'PTController::saveNKTKT/$1');

//NSKP
$routes->get('/pt/ketua/nskp', 'PTController::NSKP_Ketua');
$routes->get('/pt/ketua/detail_nskp/(:num)', 'PTController::DetailNSKP_Ketua/$1');
$routes->get('/pt/ketua/realisasi/(:num)', 'PTController::Realisasi/$1');
$routes->post('/pt/saveSasaranKT/(:num)', 'PTController::saveSasaranKT/$1');
$routes->post('/pt/approveSasaranKT/(:num)', 'PTController::approveSasaranKT/$1');


//Tanggapan
$routes->get('/pt/ketua/do_tanggapan/(:num)', 'PTController::DoTanggapan/$1');
$routes->post('/pt/ketua/saveTanggapan/(:num)', 'PTController::SaveTanggapan/$1');

//BImbingan
$routes->get('/pt/ketua/tanggapan_bimbingan', 'PTController::TanggapanBimbingan');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
