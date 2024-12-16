<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OurvaluesController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SecureImageController;
use App\Jobs\TranslateJob;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//this route is for showing the image to the authenticated user, if the user is not authenticated, it will return 403 error
// Route::get('private/images/{filename}', [SecureImageController::class, 'showImage'])->name('image.show');
Route::get('/testjob', function (){
    TranslateJob::dispatch();
    // TranslateJob::dispatch()->delay(now()->addSeconds(5));
    // yaha nira dherai long kaam x vaney dispathch garne ani tyo kaam garna lai handle function maa jaanxa
    // yesto garesi user lai wait gari rakhn pardaina backend maa kaam hudai garxa user laai arkai route maa return garidiney
    return 'Job dispatched';
});
git 
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'receive'])->name('contact');

Route::get('/services', [ServiceController::class, 'index'])->name('services');

Route::get('/service/{id}',[ServiceController::class, 'detail'])->name('service.show');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/teams', [PageController::class, 'team'])->name('teams');

Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');

Route::get('about_us', [PageController::class, 'about_us'])->name('about_us');

Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');

Route::get('/blog/{id}',[PageController::class, 'blogdetail'])->name('blog.details');

Route::get('/our-values', [PageController::class, 'ourvalues'])->name('our-values');




Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile')->middleware('auth');
Route::get('admin/add-profile', [AdminController::class, 'addProfile'])->name('admin.add.profile')->middleware('auth');
Route::post('admin/add-profile', [AdminController::class, 'saveProfile'])->name('admin.add.profile')->middleware('auth');
Route::get('admin/profile/view/{id}', [AdminController::class, 'viewprofile'])->name('admin.profile.view')->middleware('auth');
Route::get('admin/profile/edit/{id}', [AdminController::class, 'editProfile'])->name('admin.profile.edit')->middleware('auth');
Route::post('admin/profile/update/{id}', [AdminController::class, 'updateProfile'])->name('admin.profile.update')->middleware('auth');
Route::delete('admin/profile/delete/{id}', [AdminController::class, 'deleteProfile'])->name('admin.profile.delete')->middleware('auth');

Route::get('admin/services', [AdminController::class, 'services'])->name('admin.services')->middleware('auth');
Route::get('admin/add-service', [AdminController::class, 'addService'])->name('admin.add.service')->middleware('auth');
Route::post('admin/add-service', [AdminController::class, 'saveService'])->name('admin.add.service')->middleware('auth');
Route::get('admin/service/view/{id}', [AdminController::class, 'viewService'])->name('admin.service.view')->middleware('auth');
Route::get('admin/service/edit/{id}', [AdminController::class, 'editService'])->name('admin.service.edit')->middleware('auth');
Route::post('admin/service/update/{id}', [AdminController::class, 'updateService'])->name('admin.service.update')->middleware('auth');
Route::delete('admin/service/delete/{id}', [AdminController::class, 'deleteService'])->name('admin.service.delete')->middleware('auth');


Route::get('admin/teams', [AdminController::class, 'teams'])->name('admin.teams')->middleware('auth');
Route::get('admin/add-team', [AdminController::class, 'addteam'])->name('admin.add.team')->middleware('auth');
Route::post('admin/add-team', [AdminController::class, 'saveteam'])->name('admin.save.team')->middleware('auth');
Route::get('admin/team/view/{id}', [AdminController::class, 'viewteam'])->name('admin.team.view')->middleware('auth');
Route::get('admin/team/edit/{id}', [AdminController::class, 'editteam'])->name('admin.team.edit')->middleware('auth');
Route::post('admin/team/update/{id}', [AdminController::class, 'updateteam'])->name('admin.team.update')->middleware('auth');
Route::delete('admin/team/delete/{id}', [AdminController::class, 'deleteteam'])->name('admin.team.delete')->middleware('auth');

Route::get('admin/testimonials', [AdminController::class, 'testimonials'])->name('admin.testimonials')->middleware('auth');
Route::get('admin/add-testimonial', [AdminController::class, 'addtestimonial'])->name('admin.add.testimonial')->middleware('auth');
Route::post('admin/add-testimonial', [AdminController::class, 'savetestimonial'])->name('admin.save.testimonial')->middleware('auth');
Route::get('admin/testimonial/view/{id}', [AdminController::class, 'viewtestimonial'])->name('admin.testimonial.view')->middleware('auth');
Route::get('admin/testimonial/edit/{id}', [AdminController::class, 'edittestimonial'])->name('admin.testimonial.edit')->middleware('auth');
Route::post('admin/testimonial/update/{id}', [AdminController::class, 'updatetestimonial'])->name('admin.testimonial.update')->middleware('auth');
Route::delete('admin/testimonial/delete/{id}', [AdminController::class, 'deletetestimonial'])->name('admin.testimonial.delete')->middleware('auth');


Route::get('admin/about_us', [AdminController::class, 'about_us'])->name('admin.about_us')->middleware('auth');
Route::get('admin/add-about_us', [AdminController::class, 'add_about_us'])->name('admin.add.about_us')->middleware('auth');
Route::post('admin/add-about_us', [AdminController::class, 'save_about_us'])->name('admin.save.about_us')->middleware('auth');
Route::get('admin/about_us/view/{id}', [AdminController::class, 'view_about_us'])->name('admin.about_us.view')->middleware('auth');
Route::get('admin/about_us/edit/{id}', [AdminController::class, 'edit_about_us'])->name('admin.about_us.edit')->middleware('auth');
Route::post('admin/about_us/update/{id}', [AdminController::class, 'update_about_us'])->name('admin.about_us.update')->middleware('auth');
Route::delete('admin/about_us/delete/{id}', [AdminController::class, 'delete_about_us'])->name('admin.about_us.delete')->middleware('auth');

Route::get('admin/blogs', [BlogController::class, 'index'])->name('admin.blogs')->middleware('auth');
Route::get('admin/add-blogs', [BlogController::class, 'addblogs'])->name('admin.add.blog')->middleware('auth');
Route::post('admin/add-blogs', [BlogController::class, 'saveblogs'])->name('admin.save.blog')->middleware('auth');
Route::get('admin/blogs/view/{id}', [BlogController::class, 'viewblog'])->name('admin.view.blog')->middleware('auth');
Route::get('admin/blogs/edit/{id}', [BlogController::class, 'editblogs'])->name('admin.edit.blog')->middleware('auth');
Route::post('admin/blogs/update/{id}', [BlogController::class, 'updateblogs'])->name('admin.update.blog')->middleware('auth');
Route::delete('admin/blogs/delete/{id}', [BlogController::class, 'deleteblogs'])->name('admin.delete.blog')->middleware('auth');


Route::get('admin/our-values', [OurvaluesController::class, 'adminindex'])->name('admin.our-values')->middleware('auth');
Route::get('admin/add-our-values', [OurvaluesController::class, 'addourvalues'])->name('admin.add.our-values')->middleware('auth');
Route::post('admin/add-our-values', [OurvaluesController::class, 'saveourvalues'])->name('admin.save.our-values')->middleware('auth');
Route::get('admin/our-values/view/{id}', [OurvaluesController::class, 'viewourvalues'])->name('admin.view.our-values')->middleware('auth');
Route::get('admin/our-values/edit/{id}', [OurvaluesController::class, 'editourvalues'])->name('admin.edit.our-values')->middleware('auth');
Route::post('admin/our-values/update/{id}', [OurvaluesController::class, 'updateourvalues'])->name('admin.update.our-values')->middleware('auth');
Route::delete('admin/our-values/delete/{id}', [OurvaluesController::class, 'deleteourvalues'])->name('admin.delete.our-values')->middleware('auth');


Route::get('admin/faqs', [FaqController::class, 'admin_view'])->name('admin.faqs')->middleware('auth');
Route::get('admin/add-faqs', [FaqController::class, 'addfaq'])->name('admin.add.faq')->middleware('auth');
Route::post('admin/add-faqs', [FaqController::class, 'savefaq'])->name('admin.save.faq')->middleware('auth');
Route::get('admin/faqs/view/{id}', [FaqController::class, 'viewfaq'])->name('admin.view.faq')->middleware('auth');
Route::get('admin/faqs/edit/{id}', [FaqController::class, 'editfaq'])->name('admin.edit.faq')->middleware('auth');
Route::post('admin/faqs/update/{id}', [FaqController::class, 'updatefaq'])->name('admin.update.faq')->middleware('auth');
Route::delete('admin/faqs/delete/{id}', [FaqController::class, 'deletefaq'])->name('admin.delete.faq')->middleware('auth');




Route::get('admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard')->middleware('auth');
Route::get('admin/contact', [ContactController::class, 'adminshow'])->name('admin.contacts')->middleware('auth');


require __DIR__ . '/auth.php';
