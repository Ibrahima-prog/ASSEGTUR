<?php

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

Route::group([
				'namespace' => 'User', 
				//'prefix' => LaravelLocalization::setLocale(),
				//'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
	
	Route::get('/', 'RoutesController@index');
	Route::get('/fr', 'RoutesController@index');
	Route::get('/conctact-us', 'RoutesController@conctact');
	Route::post('conctact', 'RoutesController@sendEmail')->name('conctact.sendEmail');
	Route::get('/association/our-history', 'RoutesController@ourhistory');
	Route::get('/association/about-us', 'RoutesController@aboutus');
	Route::get('/association/our-mission-vision', 'RoutesController@ourmissionvision');
	Route::get('/association/register', 'RoutesController@register')->name('register');
	Route::get('/association/login', 'RoutesController@login');
	Route::post('/association/registermember', 'RoutesController@registermember')->name('registermember');
	Route::get('/association/faq', 'RoutesController@faq');
	Route::get('/gallery', 'RoutesController@gallery');
	Route::get('/news', 'RoutesController@news');
	Route::get('/news/{slug?}', 'RoutesController@newsDetails')->name('newsDetails');
	Route::get('/activities', 'RoutesController@activities');
	Route::get('/activities_and_gallery', 'RoutesController@activities_and_gallery');
	Route::get('/activities_and_gallery_summary/{slug?}', 'RoutesController@activities_and_gallery_summary')->name('activities_and_gallery_summary');
	Route::get('/communities/aktat', 'RoutesController@aktat');
	Route::get('/academic-works/article', 'RoutesController@article');
	Route::get('/academic-works/announce', 'RoutesController@announce');
	Route::get('/ArticlesByDepartment/{slug?}', 'RoutesController@articles_department')->name('ArticlesByDepartment');
	Route::get('/departments_by_faculty/{slug?}', 'RoutesController@departments_by_faculty')->name('departments_by_faculty');

});



Auth::routes();


Route::group(['namespace' => 'Admin'], function(){


	Route::get('/admin/anasayfa', 'HomeController@index')->name('admin.anasayfa');
   
    //kurumsal Menu Sayfasi
	Route::get('/admin/kurumsal', 'KurumsalController@index')->name('admin.kurumsal');
	
	//Hakkimizda Metni
	Route::get('/admin/kurumsal/tarigi', 'KurumsalController@tarigi')->name('admin.kurumsal.tarigi');
	Route::post('admin/kurumsal/tarigi/save', 'KurumsalController@tarigisave')->name('admin.kurumsal.tarigi.save');

	//Hakkimizda Metni
	Route::get('/admin/kurumsal/hakkimizda', 'KurumsalController@hakkimizda')->name('admin.kurumsal.hakkimizda');
	Route::post('admin/kurumsal/hakkimizda/save', 'KurumsalController@hakkimizdasave')->name('admin.kurumsal.hakkimizda.save');

   //Misyon Metini
	Route::get('/admin/kurumsal/misyon', 'KurumsalController@misyon')->name('admin.kurumsal.misyon');
	Route::post('admin/kurumsal/misyon/save', 'KurumsalController@misyonsava')->name('admin.kurumsal.misyon.save');

	//plan Metini

	Route::get('/admin/kurumsal/plan', 'KurumsalController@plan')->name('admin.kurumsal.plan');

	Route::post('admin/kurumsal/plan/save', 'KurumsalController@plansava')->name('admin.kurumsal.plan.save');
     //Visyon Metini
	Route::get('/admin/kurumsal/visyon', 'KurumsalController@visyon')->name('admin.kurumsal.visyon');
	Route::post('admin/kurumsal/visyon/save', 'KurumsalController@visyonsave')->name('admin.kurumsal.visyon.save');

	

	//Sikca Sorulan Sorular

	Route::get('/admin/kurumsal/sikcasorulansorular', 'KurumsalController@sikcasorulansorular')->name('admin.kurumsal.sikcasorulansorular');
	Route::get('/admin/kurumsal/sikcasorulansorular/ekle', 'KurumsalController@sikcasorulansorularekle')->name('admin.kurumsal.sikcasorulansorular.ekle');
	Route::post('admin/kurumsal/sikcasorulansorular/ekle', 'KurumsalController@sikcasorulansorularsave')->name('admin.kurumsal.sikcasorulansorular.ekle');
	Route::get('/admin/kurumsal/sikcasorulansorular/delete/{id?}', 'KurumsalController@deletesikcaksorulansorular')->name('admin.sikcasorulansorular.delete');

    //Aktat Toplulugu

	Route::get('/admin/topluluk', 'CommunitiesController@index')->name('admin.topluluk');
	Route::get('/admin/topluluk/yonet', 'CommunitiesController@yonet')->name('admin.topluluk.yonet');
	Route::get('/admin/topluluk/ekle', 'CommunitiesController@ekle')->name('admin.topluluk.ekle');
	Route::get('/admin/topluluk/aktat/hakkinda', 'CommunitiesController@aktathakkinda')->name('admin.topluluk.aktathakkinda');
	Route::post('/admin/topluluk/aktat/hakkinda/save', 'CommunitiesController@aktathakkindasave')->name('admin.topluluk.aktathakkinda.save');
	Route::post('admin/topluluk/ekle/save', 'CommunitiesController@save')->name('admin.topluluk.ekle.save');
	Route::get('/admin/topluluk/duzenle/{id?}', 'CommunitiesController@duzenle')->name('admin.topluluk.duzenle');
	Route::post('admin/topluluk/duzenle/save/{id?}', 'CommunitiesController@duzenleYap')->name('admin.topluluk.duzenle.save');
	Route::get('/admin/topluluk/delete/{id?}', 'CommunitiesController@delete')->name('admin.topluluk.delete');
	
	// Ektinlik Hocalari

	Route::get('/admin/etkinlik', 'EtkinlikController@index')->name('admin.etkinlik');
	Route::get('/admin/etkinlik/yonet', 'EtkinlikController@yonet')->name('admin.etkinlik.yonet');
	Route::get('/admin/etkinlik/ekle', 'EtkinlikController@ekle')->name('admin.etkinlik.ekle');
	Route::post('admin/etkinlik/ekle/save', 'EtkinlikController@save')->name('admin.etkinlik.ekle.save');
	Route::get('/admin/etkinlik/duzenle/{id?}', 'EtkinlikController@duzenle')->name('admin.etkinlik.duzenle');
	Route::get('/admin/etkinlik/gecti/{id?}', 'EtkinlikController@gecti')->name('admin.etkinlik.gecti');
	Route::post('admin/etkinlik/duzenle/save/{id?}', 'EtkinlikController@duzenleYap')->name('admin.etkinlik.duzenle.save');
	Route::get('/admin/etkinlik/delete/{id?}', 'EtkinlikController@delete')->name('admin.etkinlik.delete');

    // Personel Hocalari

	Route::get('/admin/yonetim', 'YonetimController@index')->name('admin.yonetim');
	Route::get('/admin/yonetim/yonet', 'YonetimController@yonet')->name('admin.yonetim.yonet');
	Route::get('/admin/yonetim/ekle', 'YonetimController@ekle')->name('admin.yonetim.ekle');
	Route::post('admin/yonetim/ekle/save', 'YonetimController@save')->name('admin.yonetim.ekle.save');
	Route::get('/admin/yonetim/duzenle/{id?}', 'YonetimController@duzenle')->name('admin.yonetim.duzenle');
	Route::post('admin/yonetim/duzenle/save/{id?}', 'YonetimController@duzenleYap')->name('admin.yonetim.duzenle.save');
	Route::get('/admin/yonetim/delete/{id?}', 'YonetimController@delete')->name('admin.yonetim.delete');


	// On kayit Sistemi
	Route::get('/admin/onkayit/upload', 'Registrations@upload')->name('admin.upload');
	Route::post('/admin/onkayit/upload/save', 'Registrations@saveUpload')->name('admin.upload.save');

	Route::get('/admin/onkayit', 'Registrations@index')->name('admin.onkayit');
	Route::get('/admin/onkayi/yonet', 'Registrations@yonet')->name('admin.onkayi.yonet');
	Route::get('/admin/onkayi/detaylari/{id?}', 'Registrations@detaylari')->name('admin.onkayi.detaylari');
	Route::get('/admin/onkayi/delete/{id?}', 'Registrations@onkayitsil')->name('admin.onkayi.delete');
	Route::get('admin/onkayi/onayla/{id?}', 'Registrations@onayla')->name('admin.onkayi.onayla');

	Route::post('admin/onkayi/email/gonder', 'Registrations@emailgonder')->name('admin.onkayi.email.gonder');

	Route::get('/admin/onkayi/saatlarvekosullari', 'Registrations@saatlarvekosullari')->name('admin.onkayi.saatlarvekosullari');
	Route::get('/admin/onkayi/saatlarvekosullari/ekle', 'Registrations@saatlarvekosullariekle')->name('admin.onkayi.saatlarvekosullari.ekle');
	Route::post('admin/onkayi/saatlarvekosullari/ekle', 'Registrations@saatlarvekosullarisave')->name('admin.onkayi.saatlarvekosullari.ekle');
	Route::get('/admin/onkayi/saatlarvekosullari/delete/{id?}', 'Registrations@deletesaatvekosul')->name('admin.saatlarvekosullari.delete');
	// Galleries Sistemi
	Route::resource('/admin/departments', 'DepartmentController');
	//Route::get('/admin/departments', 'DepartmentController@index')->name('admin.makale.departments');
	Route::resource('/admin/faculties', 'FacultiesController');
	//Route::get('/admin/faculties', 'FacultiesController@index')->name('admin.makale.faculties');
	

	
	// Video Gallery

	Route::get('/admin/video/yonet', 'VideoController@index')->name('admin.video.yonet');
	Route::get('/admin/video/ekle', 'VideoController@ekle')->name('admin.video.ekle');
	Route::post('admin/video/ekle/save', 'VideoController@save')->name('admin.video.ekle.save');
	Route::get('/admin/video/delete/{id?}', 'VideoController@deleteavideo')->name('admin.video.delete');
	Route::get('/admin/video/deleteall', 'VideoController@deleteallvideo')->name('admin.video.deleteall');
	
	// Image Gallery

	Route::get('/admin/gallery/yonet', 'GalleryController@index')->name('admin.gallery.yonet');
	Route::get('/admin/gallery/ekle', 'GalleryController@ekle')->name('admin.gallery.ekle');
	Route::post('admin/gallery/ekle/save', 'GalleryController@save')->name('admin.gallery.ekle.save');
	Route::get('/admin/gallery/delete/{id?}', 'GalleryController@deleteapicture')->name('admin.gallery.delete');
	Route::get('/admin/gallery/deleteall', 'GalleryController@deleteallpicture')->name('admin.gallery.deleteall');

	// Duyuru Posts

	Route::get('/admin/duyuru', 'DuyuruController@index')->name('admin.duyuru');
	Route::get('/admin/duyuru/yonet', 'DuyuruController@yonet')->name('admin.duyuru.yonet');
	Route::get('/admin/duyuru/ekle', 'DuyuruController@ekle')->name('admin.duyuru.ekle');
	Route::get('/admin/duyuru/duzenle/{id?}', 'DuyuruController@duzenle')->name('admin.duyuru.duzenle');
	Route::post('admin/duyuru/duzenle/save/{id?}', 'DuyuruController@duzenleYap')->name('admin.duyuru.duzenle.save');
    Route::post('admin/duyuru/ekle/save', 'DuyuruController@save')->name('admin.duyuru.ekle.save');
	Route::get('/admin/duyuru/delete/{id?}', 'DuyuruController@delete')->name('admin.duyuru.delete');


    Route::get('/admin/haber', 'NewsController@index')->name('admin.haber');
	Route::get('/admin/haber/yonet', 'NewsController@yonet')->name('admin.haber.yonet');
	Route::get('/admin/haber/ekle', 'NewsController@ekle')->name('admin.haber.ekle');
	Route::get('/admin/haber/duzenle/{id?}', 'NewsController@duzenle')->name('admin.haber.duzenle');
	Route::post('admin/haber/duzenle/save/{id?}', 'NewsController@duzenleYap')->name('admin.haber.duzenle.save');
    Route::post('admin/haber/ekle/save', 'NewsController@save')->name('admin.haber.ekle.save');
	Route::get('/admin/haber/delete/{id?}', 'NewsController@delete')->name('admin.haber.delete');

	Route::get('/admin/makale', 'MakaleController@index')->name('admin.makale');
	Route::get('/admin/makale/yonet', 'MakaleController@yonet')->name('admin.makale.yonet');
	Route::get('/admin/makale/ekle', 'MakaleController@ekle')->name('admin.makale.ekle');
	Route::get('/admin/makale/duzenle/{id?}', 'MakaleController@duzenle')->name('admin.makale.duzenle');
	Route::post('admin/makale/duzenle/save/{id?}', 'MakaleController@duzenleYap')->name('admin.makale.duzenle.save');
    Route::post('admin/makale/ekle/save', 'MakaleController@save')->name('admin.makale.ekle.save');
	Route::get('/admin/makale/delete/{id?}', 'MakaleController@delete')->name('admin.makale.delete');

	Route::get('/admin/kullanici', 'Kullaniciontroller@index')->name('admin.kullanici');
	Route::get('/admin/kullanici/yonet', 'Kullaniciontroller@yonet')->name('admin.kullanici.yonet');
	Route::get('/admin/kullanici/ekle', 'Kullaniciontroller@ekle')->name('admin.kullanici.ekle');
	Route::get('/admin/kullanici/delete/{id?}', 'Kullaniciontroller@delete')->name('admin.kullanici.delete');
	Route::get('/admin/kullanici/sifredegistir', 'Kullaniciontroller@sifreDegistir')->name('admin.kullanici.sifredegistir');
	Route::post('admin/kullanici/sifredegistir', 'Kullaniciontroller@changePassword')->name('admin.kullanici.changepassword');


	Route::get('/admin/ayarlari/genelayarlari', 'AyarlariController@index')->name('admin.ayarlari.genelayarlari');
	Route::post('admin/ayarlari/genelayarlari/save', 'AyarlariController@save')->name('admin.ayarlari.genelayarlari.save');

	Route::get('/admin/slider', 'AyarlariController@slider')->name('admin.ayarlari.slider');
	Route::post('admin/slider/save', 'AyarlariController@saveslider')->name('admin.ayarlari.slider.save');
	Route::get('/admin/slider/delete/{id?}', 'AyarlariController@deletslider')->name('admin.ayarlari.slider.delete');
	Route::post('admin/slider/save1', 'AyarlariController@saveslider1')->name('admin.ayarlari.slider.save1');
	Route::get('/admin/slider/delete1/{id?}', 'AyarlariController@deletslider1')->name('admin.ayarlari.slider.delete1');
	
});

