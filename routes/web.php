<?php

use Illuminate\Support\Facades\Route;

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

   Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

    Route::get('/affiliate', [App\Http\Controllers\AffiliateController::class, 'index'])->name('affiliate');

    Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');

    Route::get('/blogdetail/{id}', [App\Http\Controllers\BlogController::class, 'blogdetail'])->name('blogdetail');
     Route::get('/blogdetail/blogdetail/{id}', [App\Http\Controllers\BlogController::class, 'blogdetail'])->name('blogdetail');

 Route::get('/application-form', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application-form');

Route::get('/constructions', [App\Http\Controllers\ConstructionController::class, 'index'])->name('constructions');

Route::get('/book-inspection', [App\Http\Controllers\BookInspectionController::class, 'index'])->name('book-inspection');

Route::get('/cis-form', [App\Http\Controllers\CisFormController::class, 'index'])->name('cis-form');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'Contactinsert'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

Route::get('/consultancy', [App\Http\Controllers\ConsultancyController::class, 'index'])->name('consultancy');

Route::get('/lifting-form', [App\Http\Controllers\LiftingFormController::class, 'index'])->name('lifting-form');

Route::get('/consultants-form', [App\Http\Controllers\ConsultantsFormController::class, 'index'])->name('consultants-form');

Route::get('/estate-detail', [App\Http\Controllers\EstatedetailController::class, 'index'])->name('estate-detail');

Route::get('/our-work', [App\Http\Controllers\OurWorkController::class, 'index'])->name('our-work');

Route::get('/our-estate', [App\Http\Controllers\OurEstateController::class, 'index'])->name('our-estate');

Route::get('/site-form', [App\Http\Controllers\SiteFormController::class, 'index'])->name('site-form');

Route::get('/property-form', [App\Http\Controllers\PropertySearchController::class, 'index'])->name('property-form');

Route::get('/real-estate', [App\Http\Controllers\RealEstateController::class, 'index'])->name('real-estate');

Route::get('/career', [App\Http\Controllers\CareerController::class, 'index'])->name('career');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/energys', [App\Http\Controllers\EnergyController::class, 'index'])->name('energys');
Route::get('/logistics', [App\Http\Controllers\LogisticController::class, 'index'])->name('logistics');
Route::get('/agricultures', [App\Http\Controllers\AgricultureController::class, 'index'])->name('agricultures');
Route::get('/minerals', [App\Http\Controllers\MineralController::class, 'index'])->name('minerals');
Route::get('/medicals', [App\Http\Controllers\MedicalController::class, 'index'])->name('medicals');



/* Admin Area */
Route::get('/admin/login', [App\Http\Controllers\LoginController::class, 'admin'])->name('login');
Route::post('/admin/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
Route::get('/admin/dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('dashboard');
Route::get('/admin/affiliates', [App\Http\Controllers\AffiliateTableController::class, 'admin'])->name('affiliates');
Route::get('/admin/booking', [App\Http\Controllers\BookingTableController::class, 'admin'])->name('booking');
Route::get('/admin/contacts', [App\Http\Controllers\ContactTableController::class, 'admin'])->name('contacts');
Route::get('/admin/cis', [App\Http\Controllers\CISTableController::class, 'admin'])->name('cis');
Route::get('/admin/psr', [App\Http\Controllers\PSRTableController::class, 'admin'])->name('property');
Route::get('/admin/inspection', [App\Http\Controllers\SiteInspectionTableController::class, 'admin'])->name('inspection');
Route::get('/admin/consultant', [App\Http\Controllers\ConsultantsTableController::class, 'admin'])->name('consultant');
Route::get('/admin/application', [App\Http\Controllers\ApplicationTableController::class, 'admin'])->name('application');
Route::get('/admin/portifolio', [App\Http\Controllers\PortifolioController::class, 'admin'])->name('portifolio');
Route::get('/admin/constructiontable', [App\Http\Controllers\ConstructionTableController::class, 'admin'])->name('constructiontable');
Route::get('/admin/consultancytable', [App\Http\Controllers\ConsultancyTableController::class, 'admin'])->name('consultancytable');
Route::get('/admin/estatetable', [App\Http\Controllers\EstateTableController::class, 'admin'])->name('estatetable');
Route::get('/admin/mineraltable', [App\Http\Controllers\MineralTableController::class, 'admin'])->name('mineraltable');
Route::get('/admin/medicaltable', [App\Http\Controllers\MedicalTableController::class, 'admin'])->name('medicaltable');
Route::get('/admin/agriculture', [App\Http\Controllers\AgricultureTableController::class, 'admin'])->name('agriculturetable');
Route::get('/admin/logistictable', [App\Http\Controllers\LogisticTableController::class, 'admin'])->name('logistictable');
Route::get('/admin/energy', [App\Http\Controllers\EnergyTableController::class, 'admin'])->name('energy');
Route::get('/admin/abouttable', [App\Http\Controllers\AboutTableController::class, 'admin'])->name('abouttable');
Route::get('/admin/addenergy', [App\Http\Controllers\AddEnergyController::class, 'admin'])->name('addenergy');
Route::get('/admin/addlogistic', [App\Http\Controllers\AddLogisticController::class, 'admin'])->name('addlogistic');
Route::get('/admin/addmedical', [App\Http\Controllers\AddmedicalController::class, 'admin'])->name('addmedical');
Route::get('/admin/addmineral', [App\Http\Controllers\AddMineralController::class, 'admin'])->name('addmineral');
Route::get('/admin/addagriculture', [App\Http\Controllers\AddAgricultureController::class, 'admin'])->name('addagriculture');
Route::get('/admin/addabout', [App\Http\Controllers\AddAboutController::class, 'admin'])->name('addabout');

Route::get('/admin/siteform', [App\Http\Controllers\AdminSiteFormController::class, 'admin'])->name('siteform');

Route::get('/admin/propertyform', [App\Http\Controllers\AdminPropertySearchController::class, 'admin'])->name('propertyform');
Route::get('/admin/consultantform', [App\Http\Controllers\AdminConsultantsFormController::class, 'admin'])->name('consultantform');
Route::get('/admin/bookinspection', [App\Http\Controllers\AdminBookInspectionController::class, 'admin'])->name('bookinspection');

Route::get('/admin/cisform', [App\Http\Controllers\AdminCisFormController::class, 'admin'])->name('cisform');
Route::get('/admin/applicationforms', [App\Http\Controllers\AdminApplicationController::class, 'admin'])->name('applicationforms');

Route::get('/admin/blog', [App\Http\Controllers\BlogTableController::class, 'admin'])->name('blog');
Route::get('/admin/blogpost', [App\Http\Controllers\BlogPostController::class, 'admin'])->name('blogpost');
Route::get('/admin/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('/admin/login');
Route::get('/admin/addportifolio', [App\Http\Controllers\AddPortifolioController::class, 'admin'])->name('addportifolio');
Route::get('/admin/addconstruction', [App\Http\Controllers\AddConstructionController::class, 'admin'])->name('addconstruction');
Route::get('/admin/addconsultancy', [App\Http\Controllers\AddConsultancyController::class, 'admin'])->name('addconsultancy');
Route::get('/admin/addestate', [App\Http\Controllers\AddEstateController::class, 'admin'])->name('addestate');










/* deleting file/data from Database */
Route::post('/admin/application/{id}', [App\Http\Controllers\ApplicationTableController::class, 'delete'])->name('delete');
Route::post('/admin/cis/{id}', [App\Http\Controllers\CISTableController::class, 'delete'])->name('delete');
Route::post('/admin/affiliate/{id}', [App\Http\Controllers\AffiliateTableController::class, 'delete'])->name('delete');
Route::post('/admin/consultants/{id}', [App\Http\Controllers\ConsultantsTableController::class, 'delete'])->name('delete');
Route::post('/admin/inspection/{id}', [App\Http\Controllers\SiteInspectionTableController::class, 'delete'])->name('delete');
Route::post('/admin/propertysearch/{id}', [App\Http\Controllers\PSRTableController::class, 'delete'])->name('delete');
Route::post('/admin/booking/{id}', [App\Http\Controllers\BookingTableController::class, 'delete'])->name('delete');
Route::post('/admin/contact/{id}', [App\Http\Controllers\ContactTableController::class, 'delete'])->name('deletes');
Route::post('/admin/blogpost/{id}', [App\Http\Controllers\BlogTableController::class, 'delete'])->name('delete');
Route::post('/admin/portifolio/{id}', [App\Http\Controllers\PortifolioController::class, 'delete'])->name('delete');
Route::post('/admin/constructiontable/{id}', [App\Http\Controllers\ConstructionTableController::class, 'delete'])->name('delete');
Route::post('/admin/consultancytable/{id}', [App\Http\Controllers\ConsultancyTableController::class, 'delete'])->name('delete');
Route::post('/admin/estatetable/{id}', [App\Http\Controllers\EstateTableController::class, 'delete'])->name('delete');
Route::post('/admin/energy/{id}', [App\Http\Controllers\EnergyTableController::class, 'delete'])->name('delete');
Route::post('/admin/logistic/{id}', [App\Http\Controllers\LogisticTableController::class, 'delete'])->name('delete');
Route::post('/admin/medical/{id}', [App\Http\Controllers\MedicalTableController::class, 'delete'])->name('delete');
Route::post('/admin/mineral/{id}', [App\Http\Controllers\MineralTableController::class, 'delete'])->name('delete');
Route::post('/admin/agriculture/{id}', [App\Http\Controllers\AgricultureTableController::class, 'delete'])->name('delete');
Route::post('/admin/about/{id}', [App\Http\Controllers\AboutTableController::class, 'delete'])->name('delete');

Route::post('/admin/application/{id}', [App\Http\Controllers\ApplicationTableController::class, 'delete'])->name('delete');
Route::post('/admin/affiliate/{id}', [App\Http\Controllers\AffiliateTableController::class, 'delete'])->name('delete');
Route::post('/admin/contact/{id}', [App\Http\Controllers\ContactTableController::class, 'delete'])->name('deletes');
Route::post('/admin/booking/{id}', [App\Http\Controllers\BookingTableController::class, 'delete'])->name('delete');
Route::post('/admin/consultants/{id}', [App\Http\Controllers\ConsultantsTableController::class, 'delete'])->name('delete');

/* Viewing Form detail */
Route::get('/admin/viewabout/{id}', [App\Http\Controllers\Edit\AboutEditController::class, 'view'])->name('viewabout/{id}');
Route::get('/admin/viewapplication/{id}', [App\Http\Controllers\Edit\ApplicationFormEditController::class, 'view'])->name('viewapplication/{id}');
Route::get('/admin/viewconsultant/{id}', [App\Http\Controllers\Edit\ConsultantFormEditController::class, 'view'])->name('viewconsultant/{id}');
Route::get('/admin/viewinspection/{id}', [App\Http\Controllers\Edit\SiteFormEditController::class, 'view'])->name('editsiteinspection/{id}');
Route::get('/admin/viewbooking/{id}', [App\Http\Controllers\Edit\BookingFormEditController::class, 'view'])->name('viewbooking/{id}');
Route::get('/admin/viewcis/{id}', [App\Http\Controllers\Edit\CisFormEditController::class, 'view'])->name('viewcis/{id}');
Route::get('/admin/viewproperty/{id}', [App\Http\Controllers\Edit\PropertyFormEditController::class, 'view'])->name('editproperty/{id}');
Route::get('/admin/viewconstruction/{id}', [App\Http\Controllers\Edit\ConstructionEditController::class, 'view'])->name('viewconstruction/{id}');
Route::get('/admin/viewconsultancy/{id}', [App\Http\Controllers\Edit\ConsultancyEditController::class, 'view'])->name('viewconsultancy');
Route::get('/admin/viewenergy/{id}', [App\Http\Controllers\Edit\EnergyEditController::class, 'view'])->name('viewenergy');
Route::get('/admin/viewestate/{id}', [App\Http\Controllers\Edit\EstateEditController::class, 'view'])->name('viewestate');
Route::get('/admin/viewagriculture/{id}', [App\Http\Controllers\Edit\AgricultureEditController::class, 'view'])->name('viewagriculture/{id}');
Route::get('/admin/viewmedical/{id}', [App\Http\Controllers\Edit\MedicalEditController::class, 'view'])->name('viewmedical/{id}');
Route::get('/admin/viewmineral/{id}', [App\Http\Controllers\Edit\MineralEditController::class, 'view'])->name('viewmineral/{id}');
Route::get('/admin/viewlogistic/{id}', [App\Http\Controllers\Edit\LogisticEditController::class, 'view'])->name('viewlogistic/{id}');
Route::get('/admin/viewportifolio/{id}', [App\Http\Controllers\Edit\PortifolioEditControllor::class, 'view'])->name('viewportifolio/{id}');
Route::get('/admin/viewblog/{id}', [App\Http\Controllers\Edit\BlogEditController::class, 'view'])->name('viewblog/{id}');


/* The Viewing of data ends here */

/* getting Editing Documents */
Route::get('/admin/editabout/{id}', [App\Http\Controllers\Edit\AboutEditController::class, 'edit'])->name('editabout/{id}');
Route::get('/admin/editconstruction/{id}', [App\Http\Controllers\Edit\ConstructionEditController::class, 'edit'])->name('editconstruction/{id}');
Route::get('/admin/editconsultancy/{id}', [App\Http\Controllers\Edit\ConsultancyEditController::class, 'edit'])->name('editconsultancy');
Route::get('/admin/editestate/{id}', [App\Http\Controllers\Edit\EstateEditController::class, 'edit'])->name('editestate/{id}');
Route::get('/admin/editenergy/{id}', [App\Http\Controllers\Edit\EnergyEditController::class, 'edit'])->name('editenergy');
Route::get('/admin/editagriculture/{id}', [App\Http\Controllers\Edit\AgricultureEditController::class, 'edit'])->name('editagriculture/{id}');
Route::get('/admin/editmedical/{id}', [App\Http\Controllers\Edit\MedicalEditController::class, 'edit'])->name('editmedical/{id}');
Route::get('/admin/editmineral/{id}', [App\Http\Controllers\Edit\MineralEditController::class, 'edit'])->name('editmineral/{id}');
Route::get('/admin/editlogistic/{id}', [App\Http\Controllers\Edit\LogisticEditController::class, 'edit'])->name('editlogistic/{id}');
Route::get('/admin/editapplication/{id}', [App\Http\Controllers\Edit\ApplicationFormEditController::class, 'edit'])->name('editapplication/{id}');

Route::get('/admin/editaffiliate/{id}', [App\Http\Controllers\Edit\AffiliateFormEditController::class, 'edit'])->name('editaffiliate/{id}');
Route::get('/admin/editbooking/{id}', [App\Http\Controllers\Edit\BookingFormEditController::class, 'edit'])->name('editbooking/{id}');
Route::get('/admin/editconsultant/{id}', [App\Http\Controllers\Edit\ConsultantFormEditController::class, 'edit'])->name('editconsultant/{id}');

Route::get('/admin/editcis/{id}', [App\Http\Controllers\Edit\CisFormEditController::class, 'edit'])->name('editcis/{id}');
Route::get('/admin/editcontact/{id}', [App\Http\Controllers\Edit\ContactEditController::class, 'edit'])->name('editcontact/{id}');
Route::get('/admin/editproperty/{id}', [App\Http\Controllers\Edit\PropertyFormEditController::class, 'edit'])->name('editproperty/{id}');
Route::get('/admin/editsiteinspection/{id}', [App\Http\Controllers\Edit\SiteFormEditController::class, 'edit'])->name('editsiteinspection/{id}');
Route::get('/admin/editportifolio/{id}', [App\Http\Controllers\Edit\PortifolioEditControllor::class, 'edit'])->name('editportifolio/{id}');
Route::get('/admin/editblog/{id}', [App\Http\Controllers\Edit\BlogEditController::class, 'edit'])->name('editblog/{id}');


/* end of getting files for editing */

/* posting edited document */
Route::post('/admin/editportifolio/{id}', [App\Http\Controllers\Edit\PortifolioEditControllor::class, 'portifolioedit'])->name('editportifolio/{id}');
Route::post('/admin/editabout/{id}', [App\Http\Controllers\Edit\AboutEditController::class, 'AboutEdit'])->name('editabout/{id}');
Route::post('/admin/editconstruction/{id}', [App\Http\Controllers\Edit\ConstructionEditController::class, 'Constructionedit'])->name('editconstruction/{id}');
Route::post('/admin/editestate/{id}', [App\Http\Controllers\Edit\EstateEditController::class, 'EstateEdit'])->name('editestate/{id}');
Route::post('/admin/editenergy/{id}', [App\Http\Controllers\Edit\EnergyEditController::class, 'EnergyEdit'])->name('editenergy');
Route::post('/admin/editagriculture/{id}', [App\Http\Controllers\Edit\AgricultureEditController::class, 'agricultureEdit'])->name('editagriculture/{id}');
Route::post('/admin/editmedical/{id}', [App\Http\Controllers\Edit\MedicalEditController::class, 'MedicalEdit'])->name('editmedical/{id}');
Route::post('/admin/editmineral/{id}', [App\Http\Controllers\Edit\MineralEditController::class, 'MineralEdit'])->name('editmineral/{id}');
Route::post('/admin/editlogistic/{id}', [App\Http\Controllers\Edit\LogisticEditController::class, 'logisticEdit'])->name('editlogistic/{id}');
Route::post('/admin/editapplication/{id}', [App\Http\Controllers\Edit\ApplicationFormEditController::class, 'ApplicationEdit'])->name('editapplication/{id}');
Route::post('/admin/editaffiliate/{id}', [App\Http\Controllers\Edit\AffiliateFormEditController::class, 'AffiliateEdit'])->name('editaffiliate/{id}');
Route::post('/admin/editbooking/{id}', [App\Http\Controllers\Edit\BookingFormEditController::class, 'BookingEdit'])->name('editbooking/{id}');
Route::post('/admin/editconsultant/{id}', [App\Http\Controllers\Edit\ConsultantFormEditController::class, 'ConsultantEdit'])->name('editconsultant/{id}');
Route::post('/admin/editcis/{id}', [App\Http\Controllers\Edit\CisFormEditController::class, 'CisEdit'])->name('editcis/{id}');
Route::post('/admin/editcontact{id}', [App\Http\Controllers\Edit\ContactEditController::class, 'contactEdit'])->name('editcontact/{id}');
Route::post('/admin/editproperty/{id}', [App\Http\Controllers\Edit\PropertyFormEditController::class, 'PropertyformEdit'])->name('editproperty/{id}');
Route::post('/admin/editsiteinspection/{id}', [App\Http\Controllers\Edit\SiteFormEditController::class, 'SiteInspectionEdit'])->name('editsiteinspection/{id}');

Route::post('/admin/editconsultancy/{id}', [App\Http\Controllers\Edit\ConsultancyEditController::class, 'ConsultancyEdit'])->name('editconsultancy');
Route::post('/admin/editblog/{id}', [App\Http\Controllers\Edit\BlogEditController::class, 'blogEdit'])->name('editblog/{id}');
/* end of editing */



/* posting files */
Route::post('/admin/login', [App\Http\Controllers\ValidationController::class, 'checklogin'])->name('login.checklogin');

/* Posting of forms */
Route::post('/affiliate',[App\Http\Controllers\AffiliateController::class, 'AffiliateInsert'])->name('affiliate');
Route::post('/consultants-form',[App\Http\Controllers\ConsultantsFormController::class, 'ConsultantsInsert'])->name('consultants-form');

Route::post('/cis-form',[App\Http\Controllers\CisFormController::class, 'CisInsert'])->name('cis-form');
Route::post('/book-inspection',[App\Http\Controllers\BookInspectionController::class, 'BookingsInsert'])->name('book-inspection');

Route::post('/site-form',[App\Http\Controllers\SiteFormController::class, 'SiteInsert'])->name('site-form');
Route::post('/contact',[App\Http\Controllers\ContactController::class, 'ContactInsert'])->name('contact');

Route::post('/application-form',[App\Http\Controllers\ApplicationController::class, 'ApplicationInsert'])->name('application-form');
Route::post('/property-form', [App\Http\Controllers\PropertySearchController::class, 'PropertyInsert'])->name('property-form');
Route::post('/admin/blogpost', [App\Http\Controllers\BlogPostController::class, 'BlogInsert'])->name('blogpost');

Route::post('/', [App\Http\Controllers\HomeController::class, 'NewsInsert'])->name('home');
Route::post('/', [App\Http\Controllers\ContactController::class, 'ContactInsert'])->name('home');
Route::post('/admin/addportifolio', [App\Http\Controllers\AddPortifolioController::class, 'PortifolioInsert'])->name('addportifolio');
Route::post('/admin/addconstruction', [App\Http\Controllers\AddConstructionController::class, 'ConstructionInsert'])->name('addconstruction');
Route::post('/admin/addconsultancy', [App\Http\Controllers\AddConsultancyController::class, 'ConsultancyInsert'])->name('addconsultancy');
Route::post('/admin/addenergy', [App\Http\Controllers\AddEnergyController::class, 'EnergyInsert'])->name('addenergy');

Route::post('/admin/addestate', [App\Http\Controllers\AddEstateController::class, 'estateInsert'])->name('addestate');
Route::post('/admin/addlogistic', [App\Http\Controllers\AddLogisticController::class, 'LogisticInsert'])->name('addlogistic');
Route::post('/admin/addmedical', [App\Http\Controllers\AddMedicalController::class, 'MedicalInsert'])->name('addmedical');
Route::post('/admin/addmineral', [App\Http\Controllers\AddMineralController::class, 'MineralInsert'])->name('addmineral');
Route::post('/admin/addagriculture', [App\Http\Controllers\AddAgricultureController::class, 'AgricultureInsert'])->name('addagriculture');
Route::post('/admin/addabout', [App\Http\Controllers\AddAboutController::class, 'AboutInsert'])->name('addabout');


/* admin Form Add Posting */
Route::post('/admin/consultantform',[App\Http\Controllers\AdminConsultantsFormController::class, 'AdminConsultantsInsert'])->name('consultantform');

Route::post('/admin/cisform',[App\Http\Controllers\AdminCisFormController::class, 'AdminCisInsert'])->name('cisform');
Route::post('/admin/bookinspection',[App\Http\Controllers\AdminBookInspectionController::class, 'AdminBookingsInsert'])->name('bookinspection');

Route::post('/admin/siteform',[App\Http\Controllers\AdminSiteFormController::class, 'AdminSiteInsert'])->name('siteform');

Route::post('/admin/applicationforms',[App\Http\Controllers\AdminApplicationController::class, 'ApplicationInsert'])->name('applicationforms');
Route::post('/admin/propertyform', [App\Http\Controllers\AdminPropertySearchController::class, 'AdminPropertyInsert'])->name('propertyform');









