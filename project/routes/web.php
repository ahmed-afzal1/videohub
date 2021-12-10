<?php

    Route::prefix('admin')->group(function() {

  //------------- Admin Login Section -------------------------------------------//
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Admin\LoginController@login')->name('admin.login.submit');
    Route::get('/forgot', 'Admin\LoginController@showForgotForm')->name('admin.forgot');
    Route::post('/forgot', 'Admin\LoginController@forgot')->name('admin.forgot.submit');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
  //------------- Admin Login Section End-------------------------------------------//

  //------------- Admin Profile Section --------------------------//
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/profile', 'Admin\DashboardController@profile')->name('admin.profile');
    Route::post('/profile/update', 'Admin\DashboardController@profileupdate')->name('admin.profile.update');
    Route::get('/password', 'Admin\DashboardController@passwordreset')->name('admin.password');  
    Route::post('/password/update', 'Admin\DashboardController@changepass')->name('admin.password.update');
  //------------- Admin Login Section End ----------------------------//

  Route::group(['middleware'=>'permissions:Language Section'],function(){
  //----------------------------- ADMIN LANGUAGE SETTINGS SECTION ---------------------------------//
  
  Route::get('/languages', 'Admin\LanguageController@index')->name('admin-lang-index');
  Route::get('/languages/create', 'Admin\LanguageController@create')->name('admin-lang-create');
  Route::get('/languages/edit/{id}', 'Admin\LanguageController@edit')->name('admin-lang-edit');
  Route::post('/languages/create', 'Admin\LanguageController@store')->name('admin-lang-store');
  Route::post('/languages/edit/{id}', 'Admin\LanguageController@update')->name('admin-lang-update');
  Route::get('/languages/status/{id1}/{id2}', 'Admin\LanguageController@status')->name('admin-lang-st');
  Route::get('/languages/delete/{id}', 'Admin\LanguageController@destroy')->name('admin-lang-delete');
  Route::get('/languages/export/{id}', 'Admin\LanguageController@LanguageExport')->name('website.lang.export');
  Route::post('/languages/import/', 'Admin\LanguageController@LanguageImport')->name('website.lang.import');
  //-------------------------------- ADMIN LANGUAGE SETTINGS SECTION ENDS -----------------------------//

});



  Route::group(['middleware'=>'permissions:Genres Section'],function(){
  //--------------------- ADMIN CATEGORY SECTION --------------------------//
  
  Route::get('/genre', 'Admin\GenreController@index')->name('admin-cat-index');
  Route::get('/genre/create', 'Admin\GenreController@create')->name('admin-cat-create');
  Route::post('/genre/create', 'Admin\GenreController@store')->name('admin-cat-store');
  Route::get('/genre/edit/{id}', 'Admin\GenreController@edit')->name('admin-cat-edit');
  Route::post('/genre/update/{id}', 'Admin\GenreController@update')->name('admin-cat-update');
  Route::post('/genre/delete/{id}', 'Admin\GenreController@destroy')->name('admin-cat-delete');
  Route::post('/genre/status/{id}', 'Admin\GenreController@status')->name('admin-cat-status');
  //------------------------------  ADMIN CATEGORY SECTION ENDS------------------------------//
});

  Route::group(['middleware'=>'permissions:Blog Section'],function(){
   //---------------------------------------- ADMIN BLOG SECTION -----------------------//
   
   Route::get('/blog', 'Admin\BlogController@index')->name('admin-blog-index');
   Route::get('/blog/create', 'Admin\BlogController@create')->name('admin-blog-create');
   Route::post('/blog/create', 'Admin\BlogController@store')->name('admin-blog-store');
   Route::get('/blog/edit/{id}', 'Admin\BlogController@edit')->name('admin-blog-edit');
   Route::post('/blog/edit/{id}', 'Admin\BlogController@update')->name('admin-blog-update');  
   Route::get('/blog/delete/{id}', 'Admin\BlogController@destroy')->name('admin-blog-delete'); 
   //------------------------------- ADMIN BLOG SECTION End -----------------------//


});



  Route::group(['middleware'=>'permissions:Tv Shows Section Section'],function(){
  //--------------------- ADMIN Show SECTION --------------------------//
    
    Route::get('/show', 'Admin\ShowController@index')->name('admin-show-index');
    Route::get('/show/create', 'Admin\ShowController@create')->name('admin-show-create');
    Route::post('/show/create', 'Admin\ShowController@store')->name('admin-show-store');
    Route::get('/show/edit/{id}', 'Admin\ShowController@edit')->name('admin-show-edit');
    Route::post('/show/update/{id}', 'Admin\ShowController@update')->name('admin-show-update');
    Route::get('/show/delete/{id}', 'Admin\ShowController@destroy')->name('admin-show-delete');
    Route::get('/show/status/{id1}/{id2}', 'Admin\ShowController@status')->name('admin-show-status');
  //------------------------------  ADMIN Show ENDS------------------------------//
  
  //--------------------- ADMIN Show SECTION --------------------------//
    
    Route::get('/session', 'Admin\SessionController@index')->name('admin-session-index');
    Route::get('/session/create', 'Admin\SessionController@create')->name('admin-session-create');
    Route::post('/session/create', 'Admin\SessionController@store')->name('admin-session-store');
    Route::get('/session/edit/{id}', 'Admin\SessionController@edit')->name('admin-session-edit');
    Route::post('/session/update/{id}', 'Admin\SessionController@update')->name('admin-session-update');
    Route::get('/session/delete/{id}', 'Admin\SessionController@destroy')->name('admin-session-delete');
    Route::get('/session/status/{id1}/{id2}', 'Admin\SessionController@status')->name('admin-session-status');
    //------------------------------  ADMIN Show ENDS------------------------------//
  
    //--------------------- ADMIN Episode SECTION --------------------------//
    
    Route::get('/episode/session/get/{id}', 'Admin\EpisodeController@GetSessionData');
    Route::get('/episode', 'Admin\EpisodeController@index')->name('admin-episode-index');
    Route::get('/episode/create', 'Admin\EpisodeController@create')->name('admin-episode-create');
    Route::post('/episode/create', 'Admin\EpisodeController@store')->name('admin-episode-store');
    Route::get('/episode/edit/{id}', 'Admin\EpisodeController@edit')->name('admin-episode-edit');
    Route::post('/episode/update/{id}', 'Admin\EpisodeController@update')->name('admin-episode-update');
    Route::get('/episode/delete/{id}', 'Admin\EpisodeController@destroy')->name('admin-episode-delete');
    Route::get('/episode/status/{id1}/{id2}', 'Admin\EpisodeController@status')->name('admin-episode-status');
    Route::post('episode/processing','Admin\EpisodeController@Processing')->name('admin.episode.processing');
    //------------------------------  ADMIN Episode ENDS------------------------------//
  });

  Route::group(['middleware'=>'permissions:Movie Section Section'],function(){
  // Move Section -----------------------------------------------------------------------------//
 
  Route::get('movie/index','Admin\MovieController@Index')->name('admin.movie.index');
  Route::get('movie/create','Admin\MovieController@create')->name('admin.movie.create');
  Route::post('movie/store','Admin\MovieController@store')->name('admin.movie.store');
  Route::post('movie/processing','Admin\MovieController@Processing')->name('admin.movie.processing');
  Route::get('movie/edit/{id}','Admin\MovieController@edit')->name('admin.movie.edit');
  Route::get('movie/heighlight/{id}','Admin\MovieController@Heighlight')->name('admin.move.heighlight');
  Route::post('movie/update/{id}','Admin\MovieController@update')->name('admin.movie.update');
  Route::post('movie/heighlight/update/{id}','Admin\MovieController@heighlightUpdate')->name('admin.heighlight.update');
  Route::get('movie/delete/{id}','Admin\MovieController@delete')->name('admin.movie.delete');
  // Move Section End -----------------------------------------------------------------------------//
});

  Route::group(['middleware'=>'permissions:Menu Page Settings Section'],function(){
    //------------------------------------ ADMIN FAQ SECTION ---------------------------------//
    
    Route::get('/faq', 'Admin\FaqController@index')->name('admin-faq-index');
    Route::get('/faq/create', 'Admin\FaqController@create')->name('admin-faq-create');
    Route::post('/faq/create', 'Admin\FaqController@store')->name('admin-faq-store');
    Route::get('/faq/edit/{id}', 'Admin\FaqController@edit')->name('admin-faq-edit');
    Route::post('/faq/update/{id}', 'Admin\FaqController@update')->name('admin-faq-update');
    Route::get('/faq/delete/{id}', 'Admin\FaqController@destroy')->name('admin-faq-delete');
    //---------------------------- ADMIN FAQ SECTION ENDS -------------------------------//





    //----------------------------- ADMIN PAGE SECTION -----------------------------------------//
    
    Route::get('/page', 'Admin\PageController@index')->name('admin-page-index');
    Route::get('/page/create', 'Admin\PageController@create')->name('admin-page-create');
    Route::post('/page/create', 'Admin\PageController@store')->name('admin-page-store');
    Route::get('/page/edit/{id}', 'Admin\PageController@edit')->name('admin-page-edit');
    Route::post('/page/update/{id}', 'Admin\PageController@update')->name('admin-page-update');
    Route::get('/page/delete/{id}', 'Admin\PageController@destroy')->name('admin-page-delete');
    Route::get('/page/header/{id1}/{id2}', 'Admin\PageController@header')->name('admin-page-header');
    Route::get('/page/footer/{id1}/{id2}', 'Admin\PageController@footer')->name('admin-page-footer');
    //--------------------------------- ADMIN PAGE SECTION ENDS---------------------------------//

  });

    Route::group(['middleware'=>'permissions:Subscription Plan Section'],function(){
    //----------------------------- ADMIN Subscription SECTION -----------------------------------------//
    
    Route::get('/subscription-plan', 'Admin\SubscriptionPlanController@index')->name('admin-subscription-plan-index');
    Route::get('/subscription-plan/create', 'Admin\SubscriptionPlanController@create')->name('admin-subscription-plan-create');
    Route::post('/subscription-plan/create', 'Admin\SubscriptionPlanController@store')->name('admin-subscription-plan-store');
    Route::get('/subscription-plan/edit/{id}', 'Admin\SubscriptionPlanController@edit')->name('admin-subscription-plan-edit');
    Route::post('/subscription-plan/update/{id}', 'Admin\SubscriptionPlanController@update')->name('admin-subscription-plan-update');
    Route::get('/subscription-plan/delete/{id}', 'Admin\SubscriptionPlanController@destroy')->name('admin-subscription-plan-delete');
    Route::get('/subscription-plan/status/{id1}/{id2}', 'Admin\SubscriptionPlanController@status')->name('admin-subscription-plan-status');
    //--------------------------------- ADMIN Subscription SECTION ENDS---------------------------------//
  });

    Route::group(['middleware'=>'permissions:Sports Section'],function(){
    //--------------------- ADMIN Sport CATEGORY SECTION --------------------------//
    
    Route::get('/sports-category', 'Admin\SportsCategoryController@index')->name('admin-sports-cat-index');
    Route::get('/sports-category/create', 'Admin\SportsCategoryController@create')->name('admin-sports-cat-create');
    Route::post('/sports-category/create', 'Admin\SportsCategoryController@store')->name('admin-sports-cat-store');
    Route::get('/sports-category/edit/{id}', 'Admin\SportsCategoryController@edit')->name('admin-sports-cat-edit');
    Route::post('/sports-category/update/{id}', 'Admin\SportsCategoryController@update')->name('admin-sports-cat-update');
    Route::get('/sports-category/delete/{id}', 'Admin\SportsCategoryController@destroy')->name('admin-sports-cat-delete');
    Route::get('/sports-category/status/{id1}/{id2}', 'Admin\SportsCategoryController@status')->name('admin-sports-cat-status');
    //------------------------------  ADMIN Sport CATEGORY SECTION ENDS------------------------------//


    //--------------------- ADMIN Sport SECTION --------------------------//
   
    Route::get('/sports/video', 'Admin\SportsController@index')->name('admin-sports-video-index');
    Route::get('/sports/video/create', 'Admin\SportsController@create')->name('admin-sports-video-create');
    Route::post('/sports/video/create', 'Admin\SportsController@store')->name('admin-sports-video-store');
    Route::get('/sports/video/edit/{id}', 'Admin\SportsController@edit')->name('admin-sports-video-edit');
    Route::post('/sports/video/update/{id}', 'Admin\SportsController@update')->name('admin-sports-video-update');
    Route::get('/sports/video/delete/{id}', 'Admin\SportsController@destroy')->name('admin-sports-video-delete');
    Route::get('/sports/video/status/{id1}/{id2}', 'Admin\SportsController@status')->name('admin-sports-video-status');
    Route::post('sports/video/processing','Admin\SportsController@Processing')->name('admin-sports-video.processing');
    //------------------------------  ADMIN Sport ENDS------------------------------//
  });

    Route::group(['middleware'=>'permissions:Social Settings Section'],function(){
    //------------ ADMIN SOCIAL SETTINGS SECTION ------------//
    Route::get('/social', 'Admin\SocialSettingController@index')->name('admin-social-index');
    Route::post('/social/update', 'Admin\SocialSettingController@socialupdate')->name('admin-social-update');
    Route::post('/social/update/all', 'Admin\SocialSettingController@socialupdateall')->name('admin-social-update-all');
    Route::get('/social/facebook', 'Admin\SocialSettingController@facebook')->name('admin-social-facebook');
    Route::get('/social/google', 'Admin\SocialSettingController@google')->name('admin-social-google');
    Route::get('/social/facebook/{status}', 'Admin\SocialSettingController@facebookup')->name('admin-social-facebookup');
    Route::get('/social/google/{status}', 'Admin\SocialSettingController@googleup')->name('admin-social-googleup');
    //------------ ADMIN SOCIAL SETTINGS SECTION ENDS-------------------------------//
  });


  
  Route::group(['middleware'=>'permissions:General Settings Section'],function(){
    //------------------------------- ADMIN GENERAL SETTINGS SECTION ------------------------------//
    Route::get('/general-settings/logo', 'Admin\GeneralSettingController@logo')->name('admin-gs-logo');
    Route::get('/general-settings/favicon', 'Admin\GeneralSettingController@fav')->name('admin-gs-fav');
    Route::get('/general-settings/loader', 'Admin\GeneralSettingController@load')->name('admin-gs-load');
    Route::get('/general-settings/contents', 'Admin\GeneralSettingController@contents')->name('admin-gs-contents');
    Route::get('/general-settings/success', 'Admin\GeneralSettingController@success')->name('admin-gs-success');
    Route::get('/general-settings/footer', 'Admin\GeneralSettingController@footer')->name('admin-gs-footer');
    Route::get('/general-settings/error', 'Admin\GeneralSettingController@error')->name('admin-gs-error');
    Route::get('/general-settings/breadcumb', 'Admin\GeneralSettingController@breadcumb')->name('admin-gs-breadcumb');
    Route::post('/general-settings/update/all', 'Admin\GeneralSettingController@generalupdate')->name('admin-gs-update');
    Route::get('/general-settings/status/update/{value}', 'Admin\GeneralSettingController@StatusUpdate')->name('admin.gs.status');
    //-------------------------------------- ADMIN GENERAL SETTINGS JSON SECTION END ---------------------------//
  });

    Route::group(['middleware'=>'permissions:Payment Settings Section'],function(){
    //------------------------------ ADMIN PAYMENT SETTINGS SECTION ----------------------------//
    Route::get('/payment-informations', 'Admin\GeneralSettingController@paymentsinfo')->name('admin-gs-payments');
    Route::get('/currency', 'Admin\CurrencyController@Index')->name('admin-currency-index');
    Route::post('/currency/update/{id}', 'Admin\CurrencyController@Update')->name('admin-currency-update');
    //------------------------------ ADMIN PAYMENT SETTINGS SECTION ----------------------------//
  });




Route::group(['middleware'=>'permissions:Email Settings Section'],function(){
  //--------------------------------- ADMIN EMAIL SETTINGS SECTION ----------------------------//
  Route::get('/email-config', 'Admin\EmailController@config')->name('admin-mail-config');
  Route::get('/groupemail', 'Admin\EmailController@groupemail')->name('admin-group-show');
  Route::post('/groupemailpost', 'Admin\EmailController@groupemailpost')->name('admin-group-submit');
  Route::get('/issmtp/{status}', 'Admin\GeneralSettingController@issmtp')->name('admin-gs-issmtp');
  //------------------------- ADMIN EMAIL SETTINGS SECTION ENDS -------------------------//
});

  Route::group(['middleware'=>'permissions:Cast & Crew Section'],function(){
  //--------------------- ADMIN CAST AND CREW SECTION --------------------------//
  
  Route::get('/cast-crew', 'Admin\CastCrewController@index')->name('admin-cast-crew-index');
  Route::get('/cast-crew/create', 'Admin\CastCrewController@create')->name('admin-cast-crew-create');
  Route::post('/cast-crew/create', 'Admin\CastCrewController@store')->name('admin-cast-crew-store');
  Route::get('/cast-crew/edit/{id}', 'Admin\CastCrewController@edit')->name('admin-cast-crew-edit');
  Route::post('/cast-crew/update/{id}', 'Admin\CastCrewController@update')->name('admin-cast-crew-update');
  Route::get('/cast-crew/delete/{id}', 'Admin\CastCrewController@destroy')->name('admin-cast-crew-delete');
  Route::get('/cast-crew/status/{id1}/{id2}', 'Admin\CastCrewController@status')->name('admin-cast-crew-status');
  //------------------------------  ADMIN CAST AND CREW SECTION ENDS------------------------------//
  });

  Route::group(['middleware'=>'permissions:Orders Section'],function(){
  // ---------------------------- ADMIN ORDER SECTION ------------------------------//
  
  Route::get('/order','Admin\OrderController@index')->name('admin.order.index');
  Route::get('/order/{id}/delete','Admin\OrderController@delete')->name('admin.order.delete');
  Route::get('/order/view/{id}','Admin\OrderController@view')->name('admin.order.view');
  // ---------------------------- ADMIN ORDER SECTION END ------------------------------//
  });

  Route::group(['middleware'=>'permissions:Newsletter Section'],function(){
  //------------ ADMIN SUBSCRIBERS SECTION --------------------------------------//
  
  Route::get('/subscribers', 'Admin\SubscriberController@index')->name('admin-subs-index');
  Route::get('/subscribers/download', 'Admin\SubscriberController@download')->name('admin-subs-download');  
  //---------------------------- ADMIN SUBSCRIBERS ENDS -----------------------------------------//
});


 Route::group(['middleware'=>'permissions:Customers Section'],function(){
  //------------------------------- ADMIN USER SECTION -----------------------------------//
  
  Route::get('/users', 'Admin\UserController@index')->name('admin-user-index');
  Route::get('/users/edit/{id}', 'Admin\UserController@edit')->name('admin-user-edit');
  Route::post('/users/edit/{id}', 'Admin\UserController@update')->name('admin-user-update');
  Route::get('/users/delete/{id}', 'Admin\UserController@destroy')->name('admin-user-delete');
  Route::get('/user/{id}/show', 'Admin\UserController@show')->name('admin-user-show');
  Route::get('/users/ban/{id1}/{id2}', 'Admin\UserController@ban')->name('admin-user-ban');

  
  Route::get('/users/{id}/reviews', 'Admin\UserController@Review')->name('admin-user-review');
  Route::get('/users/review/delete/{id}', 'Admin\UserController@ReviewDelete')->name('admin-user-review-delete');
  //------------------------------- ADMIN USER SECTION END -----------------------------------//
});
Route::group(['middleware'=>'permissions:Manage Role Section'],function(){
  // ------------ ROLE SECTION ----------------------//
  
  Route::get('/role', 'Admin\RoleController@index')->name('admin-role-index');
  Route::get('/role/create', 'Admin\RoleController@create')->name('admin-role-create');
  Route::post('/role/create', 'Admin\RoleController@store')->name('admin-role-store');
  Route::get('/role/edit/{id}', 'Admin\RoleController@edit')->name('admin-role-edit');
  Route::post('/role/edit/{id}', 'Admin\RoleController@update')->name('admin-role-update');
  Route::get('/role/delete/{id}', 'Admin\RoleController@destroy')->name('admin-role-delete');
  // ------------ ROLE SECTION ENDS ----------------------;//
});

Route::group(['middleware'=>'permissions:Manage Staff Section'],function(){
  //------------ ADMIN STAFF SECTION ------------
    
    Route::get('/staff', 'Admin\StaffController@index')->name('admin-staff-index');
    Route::get('/staff/create', 'Admin\StaffController@create')->name('admin-staff-create');
    Route::post('/staff/create', 'Admin\StaffController@store')->name('admin-staff-store');
    Route::get('/staff/edit/{id}', 'Admin\StaffController@edit')->name('admin-staff-edit');
    Route::post('/staff/update/{id}', 'Admin\StaffController@update')->name('admin-staff-update');
    Route::get('/staff/show/{id}', 'Admin\StaffController@show')->name('admin-staff-show');
    Route::get('/staff/delete/{id}', 'Admin\StaffController@destroy')->name('admin-staff-delete');
  });


    });

    Route::get('/sign-up','User\RegisterController@registerForm')->name('user.register');
    Route::get('/sign-in','User\LoginController@showLoginForm')->name('user.login');


    Route::get('/','Front\FrontendController@index')->name('front.index');
    Route::get('/movies','Front\FrontendController@movies')->name('front.movies');
    Route::get('/movie-details','Front\FrontendController@movieDetails')->name('front.movieDetails');
    
    Route::get('/pricing-plan','Front\FrontendController@plan')->name('front.plan');
    Route::get('/faq','Front\FrontendController@faq')->name('front.faq');
    
  

