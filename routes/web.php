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

Auth::routes();

Route::get('/welcome', function(){
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/logout', 'UserController@logout');


// Profile
Route::get('/profile/{id}', 'ProfilesController@index');

// Dashboards
Route::get('/home', 'DashboardsController@index');
Route::get('/dashboard', 'DashboardsController@index');

// CVs
Route::get('/cv', 'CvsController@index');
Route::get('/view-student-cv/{studentid}', 'CvsController@getByStudentId');
Route::get('/check-if-cv-needs-activation/{id}', 'CvsController@checkIfCVNeedActivation');

// Contact Us
Route::get('/contact', function(){
    return view('contact');
});

// Student Routes---------------------------------------------------------------------------STUDENT
Route::get('/student', 'StudentController@index');
Route::get('/student/careerinterests', 'StudentController@getCareerInterests');
Route::get('/student/dashboard', 'DashboardsController@index');
Route::get('/student/cv', 'CvsController@index');
Route::post('/student-upload-profilepic', 'StudentController@uploadProfilePic');
Route::post('student/profile/update', 'StudentController@updateprofile');
Route::get('/student/profile/image', 'StudentController@getProfilePic');
Route::get('/student/achievements', 'StudentController@getStudentAchievements');
Route::get('/student/credits', 'StudentController@getStudentCredits');
    //-- check credits and edit and ad achievements
    Route::get('/check-student-credit', 'StudentController@checkIfCreditIsAvailable');
    Route::get('/student/edit-achievements', 'AchievementController@EditMyAchievements');
    Route::post('/student/submit-new-achievement', 'AchievementController@submitNewAchievement');
    Route::post('/student/update-achievement', 'AchievementController@updateAchievementStudent');
    Route::get('/submit-review-request', 'AchievementController@submitReviewRequest');
    Route::get('/student/reviewed-achievements', 'StudentController@getReviewedAchievements');

      //--get student achievements by student id
      Route::get('/student/reviewed-achievements-by-id/{id}', 'StudentController@getReviewedAchievementsByStudentId');

    //--My admin
    Route::get('student/my-administrator', 'StudentController@myAdministrator');
    Route::get('/get-admin-avatar/{id}', 'AdministratorController@getAvatarById');
    Route::get('/get-student-count-for-admin/{id}', 'AdministratorController@getStudentCountById');
    Route::post('/student/send-message-to-admin', 'MessageController@sendMessageFromStudentToAdmin');

    //Submit CV
    Route::get('/student/submit-cv', 'StudentController@submitCv');
    Route::get('/student/get-my-cv-submission', 'StudentController@getMyCVSubmissionStatus');

//Student Upload
    //--get my uploads
    Route::get('/student/uploads', 'StudentController@getMyUploads');
    //--upload file
    Route::post('/student-upload-file', 'StudentController@uploadFile');
    //--get file
    Route::get('/get-file/{file}', 'StudentController@getFile');
    //--remove file
    Route::post('/remove-file', 'StudentController@removeFile');
    //--reload files / get uploads
    Route::get('/get-user-uploads', 'StudentController@getUploadFiles');

// Route::get('/get-student', 'StudentController@getStudent');

Route::get('/register/student', function() {
    return view('shared.register')->with('role','student');
});

// Hub Routes
Route::get('/register/hub', function(){
    return view('shared.register')->with('role','hub');
});

// Administrator Routes---------------------------------------------------------------------------ADMIN
Route::get('/register/administrator', function(){
    return view('shared.register')->with('role','administrator');
});
Route::get('/profile', 'HomeController@viewMyProfile');
Route::post('/admin-upload-profilepic', 'AdministratorController@uploadProfilePic');
Route::post('/update-administrator', 'AdministratorController@updateAdministrator');
//--admin review
    Route::get('/admin/achievements/{id}', 'AchievementController@getStudentAchievementsByStudent');
    Route::post('/admin/update-achievement', 'AchievementController@updateAchievement');
    Route::get('/submit-review/{id}', 'AchievementController@submitReview');
//--CV activation
    Route::get('/mark-cv-activated/{studentid}', 'CvsController@markCVActivated');

//Admin vouchers
Route::get('/vouchers', 'VoucherController@viewVouchers');
Route::get('/get-voucher-price-for-admin', 'VoucherController@getPriceForAdmin');
Route::post('/buy-vouchers', 'OrderController@buyVouchers');
Route::post('/send-voucher-to-email', 'VoucherController@emailVoucher');

// User Routes
Route::get('/users', 'UserController@index');
Route::get('/user', 'UserController@get');
Route::post('/registersubmit', 'UserController@register');
Route::get('/activate-account/{token}', 'UserController@activateAccount');
Route::get('/users/get-latest', 'UserController@getLatestUsers');

//Students
Route::get('/my-students', 'AdministratorController@viewMyStudents');
    //--upload files
    Route::get('/student/upload-reference-letters', 'UploadController@uploadReferenceLettersView');
    //--list of admin students
    Route::get('/admin/get-my-students-list', 'AdministratorController@getMyStudents');

//Edits
Route::get('/get-review-requests', 'AdministratorController@getReviewRequests');

//Messages
Route::get('/my-inbox', 'MessageController@getMessageView');
Route::get('/get-all-my-messages', 'MessageController@getMyThreads');
Route::get('/view-message-history/{id}', 'MessageController@viewHistory');
Route::post('/reply-to-message', 'MessageController@reply');
Route::get('/get-this-thread-messages/{id}', 'MessageController@getThreadLatestMessages');
Route::post('/send-message-to-student', 'MessageController@sendMessageToStudent');
Route::get('/get-all-my-unread-messages', 'MessageController@getAllUnread');

//ContactUs
Route::get('/contact', 'HomeController@contactUs');
Route::post('/send-contact-us-message', 'HomeController@sendContactUs');

//Tasks
Route::get('/get-admin-tasks', 'AdministratorController@getTasks');
Route::get('/review/{id}', 'AdministratorController@reviewRequestById');
Route::get('/submission-reviews', 'AdministratorController@getCVsubissionReviews');

//Categories
Route::get('/get-all-achievement-categories', 'AchievementController@getCategories');

//Student Credits
Route::get('/get-credit-price/{type}', 'CreditController@getPrice');
//-- buy
    Route::post('/student/buy-credits', 'CreditController@purchaseCreditsStudent');
// --get all
    Route::get('/student/get-my-credits', 'CreditController@getMyStudentCredits');


//Hub Routes
    //--Profile
    Route::post('/hub-upload-profilepic', 'HubController@uploadProfilePic');
    Route::get('/get-hub-avatar/{id}', 'HubController@getAvatar');
    Route::post('/update-hub', 'HubController@updateHub');
    //--View all students
    Route::get('/view-students', 'HubController@getViewStudents');
    Route::get('/get-all-students', 'StudentController@gshow');
    //--Send contact request
    Route::get('/send-contact-request/{id}', 'RequestController@sendContactRequest');
