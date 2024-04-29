<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EvenController;
use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UpdateController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Route::get('register', [RegisteredUserController::class, 'create'])
    //             ->name('register');

    // Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

});

Route::middleware('auth')->group(function () {
    Route::get('update-password', [UpdateController::class, 'updatePassword'])->name('update-password');
    Route::put('update-password', [UpdateController::class, 'updatePasswords'])->name('update-password');
    Route::get('update-profile', [UpdateController::class, 'updateProfile'])->name('update-profile');
    Route::post('update-profile', [UpdateController::class, 'saveProfile'])->name('update-profile');

    Route::get('post-team', [TeamController::class, 'postTeam'])->name('post-team');
    Route::post('post-team', [TeamController::class, 'store'])->name('post-team');
    Route::get('team-table', [TeamController::class, 'allTeam'])->name('team-table');
    Route::get('team/{id}', [TeamController::class, 'editTeam'])->name('team.edit');
    Route::post('team/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::delete('team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    Route::delete('user/{id}', [TeamController::class, 'userdestroy'])->name('user.destroy');

    Route::get('about', [AboutController::class, 'about'])->name('about');
    Route::post('about', [AboutController::class, 'store'])->name('about');
    Route::get('about-table', [AboutController::class, 'allAbout'])->name('about-table');
    Route::get('about/{id}', [AboutController::class, 'editabout'])->name('about.edit');
    Route::post('about/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('about/{id}', [AboutController::class, 'aboutdestroy'])->name('about.destroy');

    Route::get('service-us', [ServiceController::class, 'service'])->name('service-us');
    Route::post('service', [ServiceController::class, 'store'])->name('service');
    Route::get('service-table', [ServiceController::class, 'allService'])->name('service-table');
    Route::get('service/{id}', [ServiceController::class, 'editservice'])->name('service.edit');
    Route::post('service/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('service/{id}', [ServiceController::class, 'servicedestroy'])->name('service.destroy');

    Route::get('testimonial-us', [TestimonialController::class, 'testimonial'])->name('testimonial-us');
    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial');
    Route::get('testimonial-table', [TestimonialController::class, 'allTestimonial'])->name('testimonial-table');
    Route::get('testimonial/{id}', [TestimonialController::class, 'edittestimonial'])->name('testimonial.edit');
    Route::post('testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('testimonial/{id}', [TestimonialController::class, 'testimonialdestroy'])->name('testimonial.destroy');

    Route::get('new-us', [NewsController::class, 'new'])->name('new-us');
    Route::post('new-us', [NewsController::class, 'store'])->name('new-us');
    Route::get('new-table', [NewsController::class, 'allNew'])->name('new-table');
    Route::get('new/{id}', [NewsController::class, 'editnew'])->name('new.edit');
    Route::post('new/{id}', [NewsController::class, 'update'])->name('new.update');
    Route::delete('new/{id}', [NewsController::class, 'newdestroy'])->name('new.destroy');

    Route::get('even-us', [EvenController::class, 'even'])->name('even-us');
    Route::post('even-us', [EvenController::class, 'evenstore'])->name('even-us');
    Route::get('even-table', [EvenController::class, 'allEven'])->name('even-table');
    Route::get('even/{id}', [EvenController::class, 'editeven'])->name('even.edit');
    Route::post('even/{id}', [EvenController::class, 'update'])->name('even.update');
    Route::delete('even/{id}', [EvenController::class, 'evendestroy'])->name('even.destroy');

    Route::get('gallery-us', [GalleryController::class, 'gallery'])->name('gallery-us');
    Route::post('gallery-us', [GalleryController::class, 'gallerystore'])->name('gallery-us');
    Route::get('gallery-table', [GalleryController::class, 'allGallery'])->name('gallery-table');
    Route::get('gallery/{id}', [GalleryController::class, 'editgallery'])->name('gallery.edit');
    Route::post('gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('gallery/{id}', [GalleryController::class, 'gallerydestroy'])->name('gallery.destroy');

    Route::get('project-us', [ProjectController::class, 'project'])->name('project-us');
    Route::post('project-us', [ProjectController::class, 'projectstore'])->name('project-us');
    Route::get('project-table', [ProjectController::class, 'allProject'])->name('project-table');
    Route::get('project/{id}', [ProjectController::class, 'editproject'])->name('project.edit');
    Route::post('project/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::delete('project/{id}', [ProjectController::class, 'projectdestroy'])->name('project.destroy');


    Route::get('contact-us', [ContactController::class, 'contact'])->name('contact-us');
    Route::post('contact-us', [ContactController::class, 'contactstore'])->name('contact-us');
    Route::get('contact-table', [ContactController::class, 'allContact'])->name('contact-table');
    Route::get('contact/{id}', [ContactController::class, 'editcontact'])->name('contact.edit');
    Route::post('contact/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('contact/{id}', [ContactController::class, 'contactdestroy'])->name('contact.destroy');

    Route::get('info-table', [InfoController::class, 'allinfo'])->name('info-table');
    Route::delete('info/{id}', [InfoController::class, 'infodestroy'])->name('info.destroy');


    Route::get('family', [FamilyController::class, 'family'])->name('family');












    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);




    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
