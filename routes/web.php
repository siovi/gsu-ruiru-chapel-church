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

Route::get('/', function () {
  return view('welcome');
});
Auth::routes();
Route::get('/setup/user', 'VisitorController@setupUser')->name('setupUser');
Route::post('/setup/user', 'VisitorController@register')->name('visitor.register');
Route::post('/setup/logo', 'VisitorController@uploadLogo')->name('app.logo');
Route::post('/setup/name', 'VisitorController@saveAppName')->name('app.name');



//Route::get('/home', 'HomeController@index')->name('home');

//Route::group([ 'middleware' => [ 'auth'] ], function(){
    Route::get('/home', 'HomeBlogController@index')->name('home');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('/welcome', 'NavigationController@welcome')->name('welcome');
    Route::get('/member/register', 'MemberController@create')->name('member.register.form');
    Route::post('/member/register', 'MemberController@store')->name('member.register');
    Route::get('/members/all', 'MemberController@index')->name('members.all');
    Route::get('/member/profile/{id}', 'MemberController@show')->name('member.profile');
    Route::get('/member/edit/{id}', 'MemberController@modify')->name('member.edit');
    Route::post('/member/delete/{id}', 'MemberController@destroy')->name('member.delete');
    Route::post('/member/delete', 'MemberController@delete')->name('member.delete.multi');
    Route::post('/member/upgrade', 'MemberController@upgrade')->name('member.upgrade');
    Route::post('/member/upload/img', 'MemberController@uploadImg')->name('member.upload.img');
    Route::post('/member/update', 'MemberController@updateMember')->name('member.update');
    Route::get('/member/analysis', 'MemberController@memberAnalysis')->name('member.analysis');
    Route::get('/member/stats', 'MemberController@memberRegStats')->name('member.reg.stats');
    Route::get('/member/attendance/{id}', 'MemberController@attendance')->name('member.attendance');

    Route::get('/branches', 'BranchController@index')->name('branches');
    Route::get('/branches/{id}/destroy', 'BranchController@destroy')->name('branch.destroy');
    Route::get('/branches/register', 'BranchController@registerForm')->name('branch.register');
    Route::post('/branches/register', 'BranchController@register')->name('branch.register');
    Route::post('/branches/update', 'BranchController@updateBranch')->name('branch.update');
    Route::post('/branches/delete', 'BranchController@delete')->name('branch.delete.multi');
    Route::get('/branch/invoice', 'BranchController@invoice')->name('branch.invoice');
    // depre
    Route::get('/old/branches/head_office_options', 'BranchController@ho')->name('branch.ho');
    Route::post('/old/branches/head_office_options', 'BranchController@ho_up')->name('branch.ho.up');
    // depre

    Route::get('/attendance', 'AttendanceController@mark')->name('attendance');
    Route::post('/attendance/mark', 'AttendanceController@mark_it')->name('attendance.mark');
    // Route::post('/attendance', 'AttendanceController@store')->name('attendance.selectDate');
    Route::post('/attendance/submit', 'AttendanceController@store')->name('attendance.submit');
    //Route::post('/attendance/mark/submit', 'AttendanceController@store')->name('attendance.mark.submit');
    Route::get('/attendance/analysis', 'AttendanceController@analysis')->name('attendance.analysis');
    Route::get('/attendance/view', 'AttendanceController@view')->name('attendance.view.form');
    //function () {        return view('attendance.view');});
    Route::post('/attendance/view', 'AttendanceController@show')->name('attendance.view');
    Route::get('/attendance/view/{date}', 'AttendanceController@show')->name('attendance.view.custom');
    Route::get('/attendance/stats', 'AttendanceController@attendanceStats')->name('attendance.stats');

    // collection
    Route::get('/collection/offering', 'CollectionController@index')->name('collection.offering');
    Route::post('/collection/save', 'CollectionController@store')->name('collection.save');
    Route::post('/collection/member', 'CollectionController@member')->name('collection.save.member');
    Route::get('/collection/report', 'CollectionController@report')->name('collection.report');
    Route::get('/collection/analysis', 'CollectionController@analysis')->name('collection.analysis');
    Route::get('/collection/history', 'CollectionController@history')->name('collection.history');
    Route::get('/collection/stats', 'CollectionController@collectionStats')->name('collection.stats');

    // calendar
    Route::get('/calendar', 'EventController@index')->name('calendar');
    Route::post('/calendar', 'EventController@store')->name('calendar.update');
    Route::get('/calendar/{id}/delete', 'EventController@destroy')->name('calendar.delete');
    Route::get('/get-relative/{search_term}', 'MemberController@getRelative')->name('relative');

    Route::get('/gallery', 'HomeController@gallery')->name('gallery');

    Route::get('/groups', 'GroupController@index')->name('groups');
    Route::post('/group/create', 'GroupController@store')->name('group.create');
    Route::post('group/members', 'GroupController@members')->name('group.members');
    Route::get('group/default/{name}', 'GroupController@defaultView')->name('group.default.view');
    Route::get('/group/{id}', 'GroupController@show')->name('group.view');
    Route::post('group/{id}/add', 'GroupController@add_member')->name('group.add.member');
    Route::get('group/{id}/delete', 'GroupController@destroy')->name('group.delete');
    Route::get('group/{id}/{group_id}/remove', 'GroupController@remove_member')->name('group.remove.member');


    Route::get('/messaging/email', 'MessagingController@indexEmail')->name('email');
    Route::get('/messaging/sms/', 'MessagingController@indexSMS')->name('sms');
    Route::post('/messaging/email/send', 'MessagingController@sendEmail')->name('sendMail');
    Route::post('/messaging/sms/send', 'MessagingController@sendSMS')->name('sendSMS');
    Route::get('/inbox', 'MessagingController@inbox')->name('inbox');
    Route::post('/inbox/message/send', 'MessagingController@sendMessage')->name('sendMessage');
    Route::get('/inbox/conversation/{from?}/{to?}', 'MessagingController@getMsg')->name('conversation');
    Route::post('/inbox/reply', 'MessagingController@reply')->name('reply');
    Route::get('/inbox/inbox', 'MessagingController@get_inbox')->name('inbox.inbox');
    Route::get('/inbox/users', 'MessagingController@get_users')->name('inbox.users');
    Route::get('/inbox/demo', 'MessagingController@demo')->name('inbox.demo');

    Route::get('/report/membership', 'ReportController@membership')->name('report.membership');
    Route::get('/report/membership/all', 'ReportController@allMembership')->name('report.membership.all');
    Route::get('/report/collections', 'ReportController@collections')->name('report.collections');
    Route::get('/report/collections/all', 'ReportController@allCollections')->name('report.collections.all');
    Route::get('/report/attendance', 'ReportController@attendance')->name('report.attendance');
    Route::get('/report/attendance/all', 'ReportController@allAttendance')->name('report.attendance.all');
    //New route from kenny
     Route::get('/notification', 'EventController@news')->name('notification');
    Route::post('/readmore', 'EventController@readmore')->name('readmore');
    Route::post('/notification/announcement', 'EventController@add')->name('calendar.announcement');
    Route::get('/ticket', 'MessagingController@indexticket')->name('ticket');
    Route::post('/ticket/email/ticket', 'MessagingController@sendTicket')->name('sendTicket');

    // OPTIONS
    Route::get('/options/get', 'OptionController@getOption')->name('option.get');
    Route::get('/options/branch/get', 'OptionController@getBranchOption')->name('option.branch.get');
    Route::post('/options/branch/put', 'OptionController@putBranchOption')->name('option.branch.post');
    Route::get('/branches/options', 'BranchController@options')->name('branch.options');
    Route::post('/branches/options', 'OptionController@optionsPost')->name('branch.optionsPost');
    Route::get('/branches/unsettled', 'OptionController@getUnsettled')->name('branch.unsettled');
    // TOOLS
    Route::get('/branches/tools', 'BranchController@tools')->name('branch.tools');
    Route::post('/branches/tools', 'OptionController@toolsPost')->name('branch.toolsPost');
    Route::get('/branches/tools/collection-type', 'OptionController@collectionTypeGet')->name('collection.type');
    Route::get('/branches/tools/service-type', 'OptionController@serviceTypeGet')->name('service.type');
    Route::post('/branches/tools/collection-type/delete', 'OptionController@deletecollectionType')->name('delete.collection.type');
    Route::post('/branches/tools/service-type/delete', 'OptionController@deleteServiceType')->name('delete.service.type');
    Route::post('/branches/tools/service-type/update', 'OptionController@updateServiceType')->name('update.service.type');
    Route::post('/branches/tools/collection-type/update', 'OptionController@updateCollectionType')->name('update.collection.type');
    // Route::post('/branches/tools', 'OptionController@toolsPost')->name('branch.toolsPost');
    // PAYMENT
    Route::resource('/payments', 'PaymentController');
    Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
    Route::get('/payment/status', 'PaymentController@status');

    // test
    Route::get('/currencies/get', 'OptionController@getCurrencies')->name('option.currencies');
    Route::get('/countries/get', 'OptionController@getCountries')->name('option.countries');
    Route::get('apis', 'CollectionController@test')->name('apis');

    Route::get('/get/banks', 'OptionController@banks')->name('banks');

    // MAIL TEMPLATE PREVIEW SECTION
    Route::get('mailable/email-to-member', 'MemberController@testMail')->name('testMail');

    // MAP
    Route::get('/map', 'MapController@index')->name('map');


//});

Route::get('/admin/login', function () {
    return view('auth.login');
});

//shared server clear cache
Route::get('/clear-cache', function() {
    return Artisan::call('cache:clear');
    // return what you want
});

// migrate db
Route::get('/db/migrate', function() {
    return Artisan::call('migrate');
});

Route::get('/db/migrate/fresh', function() {
  return Artisan::call('migrate:fresh');
});


//Route::get('/registerr', function () {
    //return view('auth.register');
//});
Route::get('/recover', 'Auth\RecoverPasswordController@index')->name('recover');
use Faker\Generator as Faker;

Route::get('/test', function(){
//   name: commission_account_bank
//   value: Guaranty Trust Bank
  // dd(Paystack::fetchSubAccount('ACCT_j8lho5oa7elp4pr'));
  // dd(Paystack::listSubAccounts(500,1));
  // if ($option = Options::getOneBranchOption($request->name, $branch)) {
  //   if (in_array($request->name, ['commission_account_bank', 'commission_account_name', 'commission_account_number'])) {
  //     $acounts = (Paystack::listSubAccounts(500,1))['data'];
  //     // code...
  //   }
  //   // code...
  //   $option->name = $request->name;
  //   $option->value = $request->value;
  //   $option->save();
  //   return $option;
  // }
  // // create part
  // return Options::create([
  //   'branch_id' => $branch->id,
  //   'name' => $request->name,
  //   'value' => $request->value
  // ]);
  // return response()->json($currencies);
  $faker = new Faker();
  dd($faker);
  function fakeDate ($faker){
    // check unique date
    $date = $faker->dateTimeBetween(['2019-01-01', '2020-03-19'])->format('d-m-Y');
    $unique = App\Attendance::where('branch_id', 1)->where('attendance_date', $date)->first();
    if ($unique) {
      $date = fakeDate($faker);
    }
    return $date;
  }
  echo fakeDate($faker);
})->name('test');

Route::get('/users', 'BranchController@users')->name('users');


Route::post('/recover', 'Auth\RecoverPasswordController@recover');
Route::get('/password/reset/{token}', 'Auth\RecoverPasswordController@reset')->name('password.reset');
Route::post('/password/reset/{token}', 'Auth\RecoverPasswordController@reset')->name('password.reset');
Route::post('/recover/{selector}/{token}', 'Auth\RecoverPasswordController@reset')->name('recover.reset');




    

Route::get('/post', 'PostController@posts')->name('post.posts');

Route::post('/addPost', 'PostController@addPost');

Route::get('/profile', 'ProfileController@profiles')->name('profile.profiles');

Route::get('/category', 'CategoryController@category');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('/upload', 'SermonController@upload');

Route::get('/add_sermons', 'SermonController@add_sermon')->name('add_sermons.add_sermon');

Route::get('/members', 'PostController@members');

Route::get('/view/{id}', 'PostController@view');

Route::get('/edit/{id}','PostController@edit');

Route::post('/editPost/{id}', 'PostController@editPost');

Route::get('/delete/{id}', 'PostController@delete');



Route::get('/edit_event/{id}','PageController@edit_event');

Route::post('/editEvent/{id}', 'PageController@editEvent');

Route::get('/deleteEvent/{id}', 'PageController@deleteEvent');

Route::get('/category/{id}', 'PostController@category');

Route::get('/category/{id}', 'PostController@category');

Route::get('/like/{id}', 'PostController@like');

Route::get('/dislike/{id}', 'PostController@dislike');

Route::post('/comment/{id}', 'PostController@comment');

Route::post('/search', 'PostController@search');

Route::post('/searchs', 'PageController@searchs');

Route::post('/searchHBC', 'PageController@searchHBC');

Route::post('/searchAttendance', 'PageController@searchAttendance');

Route::get('/indexs', 'PageController@indexs');

Route::get('/activity', 'PageController@activity')->name('activity')->middleware('verified');

Route::get('/adminlayout', 'PageController@adminlayouts')->name('adminlayout.adminlayouts');

Route::get('/add_members', 'PageController@add_members');

Route::get('/giving_type', 'PageController@giving_type');

Route::get('/add_giving', 'PageController@add_giving');

Route::get('/add_offering', 'PageController@add_offering');

Route::get('/add_sunday_offering', 'PageController@add_sunday_offering');

Route::get('/add_sundaysch', 'PageController@add_sundaysch');

Route::get('/add_tithe', 'PageController@add_tithe');

Route::get('/add_user', 'PageController@add_user');

Route::get('/addvisitor', 'PageController@addvisitor');

Route::post('/addVisitors', 'PageController@addVisitors');

Route::get('/Visitors', 'PageController@Visitors');

Route::get('/addteen', 'PageController@addteen');

Route::get('/change_password_admin', 'PageController@change_password_admin');

Route::get('/postsss', 'PageController@postsss');



Route::get('/read_mail', 'PageController@read_mail');

Route::get('/mailbox', 'PageController@mailbox');

Route::get('/compose', 'PageController@compose');

Route::get('/addss', 'PageController@addss');

Route::get('/addPosts', 'PageController@addPosts');

//Route::resource('/addPost', 'PageController@addPost');

Route::post('/addEvents', 'PageController@addEvents');

Route::get('/Event', 'PageController@Event');

Route::get('/notices', 'PageController@notices');

Route::post('/addNotices', 'PageController@addNotices');

Route::get('/allNotices', 'PageController@allNotices');

Route::get('/index', 'PageController@index');

Route::get('/chuka', 'PageController@chuka');

Route::post('/addEvent', 'PageController@addEvent');

Route::post('/addGiving', 'PageController@addGiving');

Route::post('/addMember', 'PageController@addMember');

Route::post('/addOffering', 'PageController@addOffering');

Route::get('/allMembers', 'PageController@allMembers');

Route::get('/editMembers', 'PageController@editMembers');

Route::get('/editMember/{id}', 'PageController@editMember');

Route::get('/giving', 'PageController@giving');

Route::get('/offering', 'PageController@offering');

Route::get('/add_sunday_offering', 'PageController@add_sunday_offering');

Route::post('/sunday_offering', 'PageController@sunday_offering');

Route::post('/addOfferings', 'PageController@addOfferings');

Route::get('/add_asset', 'PageController@add_asset');

Route::get('/asset', 'PageController@asset');

Route::post('/addAsset', 'PageController@addAsset');

Route::get('/add_leader', 'PageController@add_leader');

Route::get('/Leaders', 'PageController@Leaders');

Route::get('/add_message', 'PageController@add_message');

Route::post('/sms', 'PageController@sms');

Route::post('/addLeaders', 'PageController@addLeaders');

Route::get('/deletes/{id}', 'PageController@deletes');

Route::get('/delete1/{id}', 'PageController@delete1');

Route::get('/delete2/{id}', 'PageController@delete2');

Route::get('/destroys/{id}', 'PageController@destroys');

Route::get('/dests/{id}', 'PageController@dests');

Route::get('/dest/{id}', 'PageController@dest');

Route::get('/indexed', 'PageController@indexed');

Route::post('/give', 'PageController@give');

Route::get('/Baptism', 'PageController@Baptism');

Route::get('/Families', 'PageController@Families');

Route::get('/join_BS', 'PageController@join_BS');

Route::post('/joinBS', 'PageController@joinBS');

Route::get('/BSRequest', 'PageController@BSRequest');

Route::get('/add_Baptised_member', 'PageController@add_Baptised_member');

Route::post('/addBaptisedMember', 'PageController@addBaptisedMember');

Route::get('/BaptisedMembers', 'PageController@BaptisedMembers');

Route::get('/register_for_Baptism', 'PageController@register_for_Baptism');

Route::get('/join_Ministry', 'PageController@join_Ministry');

Route::post('/joinMinistry', 'PageController@joinMinistry');

Route::get('/MinistryRequest', 'PageController@MinistryRequest');

Route::get('/add_member_to_bs', 'PageController@add_member_to_bs');

Route::get('/add_new_bs_group', 'PageController@add_new_bs_group');

Route::post('/addBSGroup', 'PageController@addBSGroup');

Route::get('/add_new_HBC', 'PageController@add_new_HBC');

Route::post('/addHBC', 'PageController@addHBC');

Route::post('/addNewBeliever', 'PageController@addNewBeliever');

Route::get('/add_new_Believer', 'PageController@add_new_Believer');

Route::get('/NewBelievers', 'PageController@NewBelievers');

Route::post('/addNewAttendance', 'PageController@addNewAttendance');

Route::get('/add_new_Attendance', 'PageController@add_new_Attendance');

Route::get('/Attendances', 'PageController@Attendances');

Route::get('/Ministries', 'PageController@Ministries');

Route::get('/index', 'PageController@indexGiving')->name('index.indexGiving');



//charts
Route::get('activity', 'PageController@chart');
Route::get('activity', 'PageController@pie');
Route::get('activity', 'PageController@area');
Route::get('activity', 'PageController@percent');


//ajax
Route::resource('ajax-posts', 'ajaxcrud\AjaxPostController');
Route::resource('ajax-assets', 'ajaxcrud\AssetController');
Route::resource('ajax-baptised_member', 'ajaxcrud\BaptisedController');
Route::resource('ajax-hbc', 'ajaxcrud\HbcController');
Route::resource('ajax-new_believers', 'ajaxcrud\NewBelieverController');
Route::resource('ajax-attendance', 'ajaxcrud\AttendanceController');
Route::resource('ajax-members', 'ajaxcrud\MemberController');
Route::resource('ajax-sunday_offering', 'ajaxcrud\Sunday_offeringController');
Route::resource('ajax-ministry', 'ajaxcrud\MinistryController');
Route::resource('ajax-visitors', 'ajaxcrud\VisitorController');
Route::resource('ajax-leaders', 'ajaxcrud\LeadersController');
Route::resource('ajax-bs', 'ajaxcrud\BsController');
Route::resource('ajax-bs_register', 'ajaxcrud\BsRegisterController');


Route::get('/search','SearchController@search');
Route::get('/searchs','SearchController@searchs');
Route::get('/searchb','SearchController@searchb');
Route::get('/searchc','SearchController@searchc');
Route::get('/searchd','SearchController@searchd');
Route::get('/searche','SearchController@searche');
Route::get('/searchf','SearchController@searchf');
Route::get('/searchg','SearchController@searchg');
Route::get('/searchh','SearchController@searchh');
Route::get('/searchi','SearchController@searchi');
Route::get('/searchj','SearchController@searchj');







Route::get('/Fellowships', 'NavigationController@Fellowships');

Route::get('/Events', 'NavigationController@Events');

Route::get('/Pastors', 'NavigationController@Pastors');

Route::get('/Vission', 'NavigationController@Vission');

Route::get('/Contact', 'NavigationController@Contact');

Route::get('/Givings', 'NavigationController@Givings');

Route::get('/HomePage', 'NavigationController@HomePage');

Route::get('/Sermons', 'NavigationController@Sermons')->name('Sermons.Sermons');

Route::get('/Prayer', 'NavigationController@Prayer');

Route::post('/addOfferingss', 'NavigationController@addOfferingss');

Route::get('/Prayerss', 'NavigationController@Prayerss');

Route::get('/Prayers', 'NavigationController@Prayers');

Route::get('/SundayServices', 'NavigationController@SundayServices');

Route::get('/Praise_and_Worship', 'NavigationController@Praise_and_Worship');

Route::get('/Ushering', 'NavigationController@Ushering');

Route::get('/Catering', 'NavigationController@Catering');

Route::get('/Choir', 'NavigationController@Choir');

Route::get('/Media_and_IT', 'NavigationController@Media_and_IT');

Route::get('/Sunday_School', 'NavigationController@Sunday_School');

Route::get('/youths', 'NavigationController@youths');

Route::get('/women', 'NavigationController@women');

Route::get('/missions', 'NavigationController@missions');

Route::get('/Evangelism', 'NavigationController@Evangelism');

Route::get('/Counselling', 'NavigationController@Counselling');

$router->group(['prefix'=>'api/v1'], function() use($router){

    $router->get('/Givings', 'PaymentController@index');
    $router->post('/Givings', 'PaymentController@create');
    $router->get('/Givings/{id}', 'PaymentController@show');
    $router->put('/Givings/{id}', 'PaymentController@update');
    $router->delete('/Givings/{id}', 'PaymentController@destroy');

});


//pdf
//Route::get('ajax-assets','PDFController@assets');
//Route::get('generatePDF58','ajaxcrud\AssetController@generatePDF58');
//Route::get('ajaxcrud\assets',array('as'=>'assets','uses'=>'ajaxcrud\AssetController@assets'));
//Route::get('ajax-assets', 'NotesController@index');
 //Route::get('/ajax-assets/pdf', 'NotesController@pdf');






//Route::get('/dashboard', 'Controller@index')->name('home');
//require __DIR__ . '/profile/profile.php';

//Route::get('/paywithpaypal', 'PaypalPaymentController@paywithpaypal');

Route::get('paywithpaypal', 'PaymentController@paywithpaypal');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypals');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
/*
Route::get('/', 'PayPalController@getIndex');
Route::get('paypal/ec-checkout', 'PayPalController@getExpressCheckout');
Route::get('paypal/ec-checkout-success', 'PayPalController@getExpressCheckoutSuccess');
Route::get('paypal/adaptive-pay', 'PayPalController@getAdaptivePay');
Route::post('paypal/notify', 'PayPalController@notify');*/



//Route::post('/mark-as-read', 'PageController@markNotification')->name('markNotification');








