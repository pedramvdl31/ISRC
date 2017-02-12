<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'beforeFilter'], function () {
	//HOME ROUTE
	Route::get('/', ['as'=>'home_index', 'uses' => 'HomeController@getHomepage']);
	//PAGES
	Route::get('/view/{param1}','PagesController@getPage');
	Route::get('/view/{param1}/{param2}','PagesController@getPage');

	//NCLAB
	Route::get('/people/professor',  ['uses' => 'PagesController@getProf']);
	Route::get('/people/student',  ['uses' => 'PagesController@getStud']);

	// WEBSITE PUBLIC PAGES
	Route::get('/events',  ['as'=>'events', 'uses' => 'HomeController@getEvents']);
	Route::get('/events-view/{id}',  ['as'=>'events_ind', 'uses' => 'HomeController@getEventsInd']);
	Route::get('/calendar',  ['as'=>'get-calendar', 'uses' => 'HomeController@getCalendar']);
	Route::get('/schedule-and-register',  ['as'=>'get-scheduling', 'uses' => 'HomeController@getScheduling']);
	Route::get('/videos',  ['as'=>'get-videos', 'uses' => 'HomeController@getVideos']);
	Route::get('/donate',  ['as'=>'get-donate', 'uses' => 'HomeController@getDonate']);

	Route::get('/about/jean-paul-lacroix',  ['as'=>'get_jean_page', 'uses' => 'HomeController@getJean']);
	Route::get('/about/bbtr',  ['as'=>'get_bbtr_page', 'uses' => 'HomeController@getBbtr']);
	Route::get('/about/bbtr-session',  ['as'=>'get_bbtr_session_page', 'uses' => 'HomeController@getBbtrSession']);
	Route::get('/about/cocoon-us',  ['as'=>'get_cocoon_page', 'uses' => 'HomeController@getCocoon']);
	Route::get('/about/cocoon-modality',  ['as'=>'get_cocoon_modality_page', 'uses' => 'HomeController@getCocoonModality']);
	Route::get('/about/cocoon-message',  ['as'=>'get_cocoon_massage_page', 'uses' => 'HomeController@getCocoonMassage']);
	Route::get('/about/giten-tonkov',  ['as'=>'get_giten_page', 'uses' => 'HomeController@getGiten']);
	Route::get('/about/7-belts-of-tension',  ['as'=>'get_7_belt', 'uses' => 'HomeController@getSevenBelts']);
	Route::get('/about/Newspaper-Articles',  ['as'=>'get_papers', 'uses' => 'HomeController@getPapers']);
	Route::get('/about/Presumtive-Parole-legislation',  ['as'=>'get_parole', 'uses' => 'HomeController@getParole']);
	Route::get('/about/donation',  ['as'=>'get_donation', 'uses' => 'HomeController@getDonation']);
	Route::get('/about/participant-testimonial',  ['as'=>'get_members_testimonials', 'uses' => 'HomeController@getMembersTestimonials']);
	
	// WEBSITE PUBLIC PAGES END
	Route::post('/questions-and-answers/ajax-add',  ['uses' => 'QnAController@postAjaxqnaAdd']);
	Route::post('/reviews/ajax-add',  ['uses' => 'ReviewsController@postAjaxReviewAdd']);
	Route::post('/reviews/ajax-edit',  ['uses' => 'ReviewsController@postAjaxReviewEdit']);
	Route::post('/like-us',  ['uses' => 'LikesController@postLikeUs']);
	Route::post('/send-email',  ['uses' => 'HomeController@postSendEmail']);

	Route::get('/admins',  ['as'=>'admins_index', 'uses' => 'AdminsController@getIndex']);
	Route::get('/admins-simple',  ['as'=>'simple_admin_index', 'uses' => 'AdminsController@getSimpleIndex']);
	Route::get('registration', ['as'=>'registration_view','uses'=>'UsersController@getRegistration']);
	Route::post('registration', ['uses'=>'UsersController@postRegistration']);
	Route::post('users/return-users',  ['uses' => 'UsersController@postReturnUsers', 'middleware' => ['acl:admins/acl/view']]);
	Route::post('users/invoice-users',  ['uses' => 'UsersController@postInvoiceUsers', 'middleware' => ['acl:admins/acl/view']]);
	Route::post('users/user-info',  ['uses' => 'UsersController@postUserInfo', 'middleware' => ['acl:admins/acl/view']]);
	Route::post('pages/mce-upload',  ['uses' => 'PagesController@postUploadMce']);

	Route::group(['prefix' => 'users'], function () {
		Route::get('login', ['as'=>'users_login','uses'=>'UsersController@getLogin']);
		Route::post('login',['uses'=>'UsersController@postLogin']);
		Route::post('login-invoices',['uses'=>'InvoicesController@postLoginInvoices']);
		Route::post('login-modal', ['uses'=>'UsersController@postLoginModal']);
		Route::get('profile/{username}',  ['as'=>'users_profile','uses' => 'UsersController@getProfile', function ($username) {}]);
		Route::post('profile',  ['as'=>'users_profile_post','uses' => 'UsersController@postProfile']);
		Route::post('user-auth', ['uses'=>'UsersController@postUserAuth']);
		Route::post('send-file', ['uses'=>'UsersController@postSendFile']);
		Route::post('validate', ['uses'=>'UsersController@postValidate']);
		Route::post('validate-sales', ['uses'=>'UsersController@postValidateSales']);
		Route::post('send-file-temp', ['uses'=>'UsersController@postSendFileTemp']);
		Route::get('logout', ['as'=>'users_logout','uses'=>'UsersController@getLogout']);
		Route::post('auth-check', ['as'=>'users_ac','uses'=>'UsersController@postUsersAuthCheck']);
		Route::post('auth-check-review', ['as'=>'users_ac_review','uses'=>'UsersController@postUsersAuthCheckReview']);
	});	
	Route::group(['prefix' => 'admins'], function () {
		Route::get('login', ['as'=>'admin_login', 'uses' => 'AdminsController@getLogin']);
		Route::post('login', 'AdminsController@postLogin');
		Route::get('logout', 'AdminsController@getLogout');			
	});

			/** ADMINS ACL GROUP **/
	Route::group(['middleware' => ['auth']], function(){
		Route::get('admins',  ['as'=>'admins_index', 'uses' => 'AdminsController@getIndex', 'middleware' => ['acl:admins']]);
			
		Route::group(['prefix' => 'admins'], function () {
			$prefix = 'admins';	
			Route::get('roles',  ['as'=>'roles_index', 'uses' => 'RolesController@getIndex', 'middleware' => ['acl:'.$prefix.'/roles']]);
			Route::get('roles/add',  ['as'=>'roles_add', 'uses' => 'RolesController@getAdd','middleware' => ['acl:'.$prefix.'/roles/add']]);
			Route::post('roles/add',  ['uses' => 'RolesController@postAdd', 'middleware' => ['acl:'.$prefix.'/roles/add']]);
			Route::get('roles/edit/{id}',  ['as'=>'roles_edit', 'uses' => 'RolesController@getEdit', 'middleware' => ['acl:'.$prefix.'/roles/edit/{id}'], function ($id) {}]);
			Route::post('roles/edit',  ['as'=>'roles_update','uses' => 'RolesController@postEdit', 'middleware' => ['acl:'.$prefix.'/roles/edit']]);
			Route::get('roles/delete-data/{id}',  ['as'=>'roles_delete', 'uses' => 'RolesController@getDelete', 'middleware' => ['acl:'.$prefix.'/roles/delete-data{id}'], function ($id) {}]);

			Route::get('permissions',  ['as'=>'permissions_index', 'uses' => 'PermissionsController@getIndex', 'middleware' => ['acl:'.$prefix.'/permissions']]);
			Route::get('permissions/add',  ['as'=>'permissions_add','uses' => 'PermissionsController@getAdd', 'middleware' => ['acl:'.$prefix.'/permissions/add']]);
			Route::post('permissions/add',  ['uses' => 'PermissionsController@postAdd', 'middleware' => ['acl:'.$prefix.'/permissions/add']]);
			Route::get('permissions/edit/{id}', ['as' => 'permissions_edit', 'uses' => 'PermissionsController@getEdit','middleware' => ['acl:'.$prefix.'/permissions/edit/{id}'], function ($id) {}]);
			Route::post('permissions/edit',  ['uses' => 'PermissionsController@postEdit', 'middleware' => ['acl:'.$prefix.'/permissions/edit']]);
			Route::get('permissions/delete-data/{id}',  ['as'=>'permissions_delete','uses' => 'PermissionsController@getDelete', 'middleware' => ['acl:'.$prefix.'/permissions/delete-data{id}'], function ($id) {}]);

			Route::get('permission-roles',  ['as'=>'permission_roles_index', 'uses' => 'PermissionRolesController@getIndex', 'middleware' => ['acl:'.$prefix.'/permission-roles']]);
			Route::get('permission-roles/add',  ['as'=>'permission_roles_add', 'uses' => 'PermissionRolesController@getAdd', 'middleware' => ['acl:'.$prefix.'/permission-roles/add']]);
			Route::post('permission-roles/add',  ['uses' => 'PermissionRolesController@postAdd', 'middleware' => ['acl:'.$prefix.'/permission-roles/add']]);
			Route::get('permission-roles/edit/{id}',  ['as'=>'permission_roles_edit', 'uses' => 'PermissionRolesController@getEdit', 'middleware' => ['acl:'.$prefix.'/permission-roles/edit/{id}'], function ($id) {}]);
			Route::post('permission-roles/edit',  ['uses' => 'PermissionRolesController@postEdit', 'middleware' => ['acl:'.$prefix.'/permission-roles/edit']]);
			Route::get('permission-roles/delete-data/{id}',  ['as'=>'permission_roles_delete', 'uses' => 'PermissionRolesController@getDelete', 'middleware' => ['acl:'.$prefix.'/permission-roles/delete-data/{id}'], function ($id) {}]);

			//WEBSITE BRAND
			Route::get('website-brand/index',  ['as' => 'website_brand_index','uses' => 'WebsiteBrandController@getIndex', 'middleware' => ['acl:'.$prefix.'/website-brand/index']]);
			Route::post('website-brand/index',  ['uses' => 'WebsiteBrandController@postIndex', 'middleware' => ['acl:'.$prefix.'/website-brand/index']]);
			Route::post('website-brand/upload',  ['uses' => 'WebsiteBrandController@postUpload', 'middleware' => ['acl:'.$prefix.'/website-brand/upload']]);
			//SETTING
			Route::post('mode',  ['uses' => 'AdminsController@postWebModeChange', 'middleware' => ['acl:'.$prefix.'/mode']]);
			Route::get('mode',  ['as' => 'web_mode','uses' => 'AdminsController@getWebMode', 'middleware' => ['acl:'.$prefix.'/mode']]);			

			//EVENTS
			Route::get('events',  ['as' => 'events_index','uses' => 'EventsController@getIndex', 'middleware' => ['acl:'.$prefix.'/events']]);
			Route::get('events/add',  ['as' => 'events_add','uses' => 'EventsController@getAdd', 'middleware' => ['acl:'.$prefix.'/events/add']]);
			Route::post('events/add',  ['uses' => 'EventsController@postAdd', 'middleware' => ['acl:'.$prefix.'/events/add']]);
			Route::get('events/edit/{id}',  ['as' => 'events_edit','uses' => 'EventsController@getEdit', 'middleware' => ['acl:'.$prefix.'/events/edit'], function ($id) {}]);
			Route::post('events/edit',  ['uses' => 'EventsController@postEdit', 'middleware' => ['acl:'.$prefix.'/events/edit']]);
			Route::post('events/remove',  ['uses' => 'EventsController@postRemove', 'middleware' => ['acl:'.$prefix.'/events/remove']]);
			Route::get('events/view/{id}',  ['as' => 'events_view','uses' => 'EventsController@getView', 'middleware' => ['acl:'.$prefix.'/events/view'], function ($id) {}]);
			Route::post('events/view',  ['uses' => 'EventsController@postView', 'middleware' => ['acl:'.$prefix.'/events/view']]);
			Route::get('events/remove/{id}',  ['as' => 'events_remove','uses' => 'EventsController@getRemove', 'middleware' => ['acl:'.$prefix.'/events/remove'], function ($id) {}]);
			Route::post('events/images/add',  [ 'uses' => 'EventsController@postAddImages', 'middleware' => ['acl:'.$prefix.'/events/images/add']]);


			//slogan
			Route::get('slogans',  ['as' => 'slogans_index','uses' => 'WebsiteBrandController@getSloganIndex', 'middleware' => ['acl:'.$prefix.'/slogans']]);
			Route::get('slogans/add',  ['as' => 'slogans_add','uses' => 'WebsiteBrandController@getSloganAdd', 'middleware' => ['acl:'.$prefix.'/slogans/add']]);
			Route::post('slogans/add',  ['uses' => 'WebsiteBrandController@postSloganAdd', 'middleware' => ['acl:'.$prefix.'/slogans/add']]);
			Route::get('slogans/edit/{id}',  ['as' => 'slogans_edit','uses' => 'WebsiteBrandController@getSloganEdit', 'middleware' => ['acl:'.$prefix.'/slogans/edit'], function ($id) {}]);
			Route::post('slogans/edit',  ['uses' => 'WebsiteBrandController@postSloganEdit', 'middleware' => ['acl:'.$prefix.'/slogans/edit']]);
			Route::post('slogans/remove',  ['uses' => 'WebsiteBrandController@postSloganRemove', 'middleware' => ['acl:'.$prefix.'/slogans/remove']]);
			Route::get('slogans/remove/{id}',  ['as' => 'slogans_remove','uses' => 'WebsiteBrandController@getSloganRemove', 'middleware' => ['acl:'.$prefix.'/slogans/remove'], function ($id) {}]);

			//MENUS
			Route::get('menus',  ['as' => 'menus_index','uses' => 'MenusController@getIndex', 'middleware' => ['acl:'.$prefix.'/menus']]);
			Route::get('menus/add',  ['as' => 'menus_add','uses' => 'MenusController@getAdd', 'middleware' => ['acl:'.$prefix.'/menus/add']]);
			Route::post('menus/add',  ['uses' => 'MenusController@postAdd', 'middleware' => ['acl:'.$prefix.'/menus/add']]);
			Route::get('menus/order',  ['as' => 'menus_order','uses' => 'MenusController@getOrder', 'middleware' => ['acl:'.$prefix.'/menus/order']]);
			Route::post('menus/order',  ['uses' => 'MenusController@postOrder', 'middleware' => ['acl:'.$prefix.'/menus/order']]);
			Route::get('menus/edit/{id}',  ['as' => 'menus_edit','uses' => 'MenusController@getEdit', 'middleware' => ['acl:'.$prefix.'/menus/edit'], function ($id) {}]);
			Route::post('menus/edit',  ['uses' => 'MenusController@postEdit', 'middleware' => ['acl:'.$prefix.'/menus/edit']]);
			Route::post('menus/remove',  ['uses' => 'MenusController@postRemove', 'middleware' => ['acl:'.$prefix.'/menus/remove']]);
			Route::get('menus/view/{id}',  ['as' => 'menus_view','uses' => 'MenusController@getView', 'middleware' => ['acl:'.$prefix.'/menus/view'], function ($id) {}]);
			Route::post('menus/view',  ['uses' => 'MenusController@postView', 'middleware' => ['acl:'.$prefix.'/menus/view']]);
			Route::get('menus/remove/{id}',  ['as' => 'menus_remove','uses' => 'MenusController@getRemove', 'middleware' => ['acl:'.$prefix.'/menus/remove'], function ($id) {}]);

			Route::get('acl/view',  ['as' => 'acl_view','uses' => 'AdminsController@getViewAcl', 'middleware' => ['acl:'.$prefix.'/acl/view']]);
			Route::get('categories/index',  ['as'=>'category_index', 'uses' => 'CategoriesController@getIndex', 'middleware' => ['acl:'.$prefix.'/categories/index']]);
			Route::get('categories/add',  ['as'=>'category_add', 'uses' => 'CategoriesController@getAdd', 'middleware' => ['acl:'.$prefix.'/categories/add']]);
			Route::post('categories/add',  ['uses' => 'CategoriesController@postAdd', 'middleware' => ['acl:'.$prefix.'/categories/add']]);
			
			Route::get('categories/view/{id}',  ['as' => 'category_view','uses' => 'CategoriesController@getView', 'middleware' => ['acl:'.$prefix.'/categories/view'], function ($id) {}]);
			
			Route::get('categories/edit/{id}',  ['as'=>'category_edit','uses' => 'CategoriesController@getEdit', 'middleware' => ['acl:'.$prefix.'/categories/edit'], function ($id) {}]);
			Route::post('categories/edit',  ['uses' => 'CategoriesController@postEdit', 'middleware' => ['acl:'.$prefix.'/categories/edit']]);
			
			//PAGES
			Route::get('pages',  ['as' => 'pages_index','uses' => 'PagesController@getIndex', 'middleware' => ['acl:'.$prefix.'/pages']]);
			Route::get('pages/sliders-index',  ['as' => 'sliders_index','uses' => 'PagesController@getSlidersIndex', 'middleware' => ['acl:'.$prefix.'/pages/sliders-index']]);
			Route::get('pages/sliders-add',  ['as' => 'sliders_add','uses' => 'PagesController@getSlidersAdd', 'middleware' => ['acl:'.$prefix.'/pages/sliders-add']]);
			Route::post('pages/sliders-add',  ['uses' => 'PagesController@postSlidersAdd', 'middleware' => ['acl:'.$prefix.'/pages/sliders-add']]);
			Route::get('pages/sliders-edit/{id}',  ['as' => 'sliders_edit','uses' => 'PagesController@getSlidersEdit', 'middleware' => ['acl:'.$prefix.'/pages/sliders-edit'], function ($id) {}]);
			Route::post('pages/sliders-edit',  ['uses' => 'PagesController@postSlidersEdit', 'middleware' => ['acl:'.$prefix.'/pages/sliders-edit']]);
			Route::get('pages/add',  ['as' => 'pages_add','uses' => 'PagesController@getAdd', 'middleware' => ['acl:'.$prefix.'/pages/add']]);
			Route::post('pages/preview',  ['uses' => 'PagesController@postAddPreviewStep', 'middleware' => ['acl:'.$prefix.'/pages/preview']]);
			Route::post('pages/preview2',  ['uses' => 'PagesController@postAddPreviewStep2', 'middleware' => ['acl:'.$prefix.'/pages/preview2']]);
			Route::post('pages/edit-preview',  ['uses' => 'PagesController@postEditPreviewStep', 'middleware' => ['acl:'.$prefix.'/pages/edit-preview']]);
			Route::post('pages/sort',  ['uses' => 'PagesController@postAddSortStep', 'middleware' => ['acl:'.$prefix.'/pages/sort']]);
			Route::post('pages/data',  ['uses' => 'PagesController@postAddDataStep', 'middleware' => ['acl:'.$prefix.'/pages/data']]);
			Route::post('pages/add',  ['uses' => 'PagesController@postAdd', 'middleware' => ['acl:'.$prefix.'/pages/add']]);
			Route::post('pages/add-data',  ['uses' => 'PagesController@postAddData', 'middleware' => ['acl:'.$prefix.'/pages/add-data']]);
			Route::post('pages/data-edit',  ['uses' => 'PagesController@postEditDataStep', 'middleware' => ['acl:'.$prefix.'/pages/data-edit']]);
			Route::post('pages/add-section',  ['uses' => 'PagesController@postAddSection', 'middleware' => ['acl:'.$prefix.'/pages/add-section']]);
			Route::post('pages/add-section-edit',  ['uses' => 'PagesController@postAddSectionEdit', 'middleware' => ['acl:'.$prefix.'/pages/add-section-edit']]);
			Route::get('pages/edit/{id}',  ['as' => 'pages_edit','uses' => 'PagesController@getEdit', 'middleware' => ['acl:'.$prefix.'/pages/edit'], function ($id) {}]);
			Route::post('pages/edit',  ['uses' => 'PagesController@postEdit', 'middleware' => ['acl:'.$prefix.'/pages/edit']]);
			Route::post('pages/remove',  ['uses' => 'PagesController@postRemove', 'middleware' => ['acl:'.$prefix.'/pages/remove']]);
			Route::get('pages/remove/{id}',  ['as' => 'pages_remove','uses' => 'PagesController@getRemove', 'middleware' => ['acl:'.$prefix.'/pages/remove'], function ($id) {}]);
			Route::post('pages/sliders/upload',  ['uses' => 'PagesController@postUploadSlider', 'middleware' => ['acl:'.$prefix.'/pages/sliders/upload']]);
			Route::post('pages/pages-slider/upload',  ['uses' => 'PagesController@postUploadPagesSliderImage', 'middleware' => ['acl:'.$prefix.'/pages/pages-slider/upload']]);
			Route::post('pages/pages-image/upload',  ['uses' => 'PagesController@postUploadPagesImageSingle', 'middleware' => ['acl:'.$prefix.'/pages/pages-image/upload']]);
			Route::get('pages/view/{id}',  ['as' => 'pages_view','uses' => 'PagesController@getView', 'middleware' => ['acl:'.$prefix.'/pages/view'], function ($id) {}]);
			Route::post('pages/view',  ['uses' => 'PagesController@postView', 'middleware' => ['acl:'.$prefix.'/pages/view']]);
			
			Route::get('questions-and-answers',  ['as' => 'qna_index','uses' => 'QnAController@getIndex', 'middleware' => ['acl:'.$prefix.'/questions-and-answers']]);

			Route::get('questions-and-answers/view/{id}',  ['as' => 'qna_view','uses' => 'QnAController@getView', 'middleware' => ['acl:'.$prefix.'/questions-and-answers/view'], function ($id) {}]);
			Route::post('questions-and-answers/view',  ['uses' => 'QnAController@postView', 'middleware' => ['acl:'.$prefix.'/questions-and-answers/view']]);

			Route::get('reviews',  ['as' => 'review_index','uses' => 'ReviewsController@getIndex', 'middleware' => ['acl:'.$prefix.'/reviews']]);

			Route::get('reviews/view/{id}',  ['as' => 'review_view','uses' => 'ReviewsController@getView', 'middleware' => ['acl:'.$prefix.'/reviews/view'], function ($id) {}]);
			Route::post('reviews/view',  ['uses' => 'ReviewsController@postView', 'middleware' => ['acl:'.$prefix.'/reviews/view']]);
			Route::post('reviews/delete-review',  ['uses' => 'ReviewsController@postDeleteReview', 'middleware' => ['acl:'.$prefix.'/reviews/delete-review']]);

			Route::get('users/index',  ['as' => 'users_index','uses' => 'AdminsController@getUsersIndex', 'middleware' => ['acl:'.$prefix.'/acl/view']]);
			Route::get('users/add',  ['as' => 'users_add','uses' => 'AdminsController@getUsersAdd', 'middleware' => ['acl:'.$prefix.'/acl/view']]);
			Route::post('users/add',  ['uses' => 'AdminsController@postUsersAdd', 'middleware' => ['acl:'.$prefix.'/acl/view']]);
			Route::get('users/edit/{id}',  ['as' => 'users_edit','uses' => 'AdminsController@getUsersEdit', 'middleware' => ['acl:'.$prefix.'/acl/view'], function ($id) {}]);
			Route::post('users/edit',  ['uses' => 'AdminsController@postUsersEdit', 'middleware' => ['acl:'.$prefix.'/acl/view']]);

		});
	});



	//PERMISSIONS ROUTE
	Route::group(['prefix' => 'permissions'], function () {
		Route::get('auto-update', ['uses'=>'PermissionsController@getAutoUpdate']);
	});

	Route::get('/{prefered_layout}/{id}', ['as'=>'set_layout', 'uses' => 'HomeController@getSetPreferedLayoutSession']);


});