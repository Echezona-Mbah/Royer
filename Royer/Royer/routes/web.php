<?php

use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\ProfileController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Even;
use App\Models\Galery;
use App\Models\News;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $aims = About::where('categories','aim')->get();
    $abouts = About::where('categories','about')->get();
    $Testimonials = Testimonial::all();
    $Teams = Team::take(4)->get();
    $services = Service::take(4)->get();
    $projects = Project::take(4)->get();
    $contact = Contact::first();






    return view('welcome',compact('aims','abouts','Testimonials','Teams','services','projects','contact'));
})->name('/');

Route::get('/about-us', function () {
    $about = About::where('categories','about')->get();
    $contact = Contact::first();
    return view('about',compact('about','contact'));
})->name('about-us');

Route::get('/blog-details/{id}', function ($id) {
    $news = News::where('id',$id)->get();
    //dd($news);die();
    $userIds = $news->pluck('user_id')->unique(); 
    $getUsers = User::whereIn('id', $userIds)->first();

    $newss = News::latest()->take(2)->get();
    $evenss = Even::latest()->take(2)->get();
    $contact = Contact::first();


    return view('blog-details',compact('news','getUsers','newss','evenss','contact'));
})->name('blog-details');


Route::get('/blog-details2/{id}', function ($id) {
    $evens = Even::where('id',$id)->get();
    $userIdseven = $evens->pluck('user_id')->unique(); 
    $getUserseven = User::whereIn('id', $userIdseven)->first();

    $newss = News::latest()->take(2)->get();
    $evenss = Even::latest()->take(2)->get();
    $contact = Contact::first();



    return view('blog-details2',compact('evens','getUserseven','newss','evenss','contact'));
})->name('blog-details2');

Route::get('/blog', function () {
    $news = News::latest()->paginate(2);
    $userIds = $news->pluck('user_id')->unique(); 
    $getUsers = User::whereIn('id', $userIds)->first();

    $evens = Even::latest()->paginate(2);
    $userIdseven = $evens->pluck('user_id')->unique(); 
    $getUserseven = User::whereIn('id', $userIdseven)->first();

    $newss = News::latest()->take(2)->get();
    $evenss = Even::latest()->take(2)->get();
    $contact = Contact::first();

    // dd( $usersData);die();

    return view('blog', compact('news', 'getUsers','evens','getUserseven','newss','evenss','contact'));
})->name('blog');

Route::get('/contact', function () {
    $contacts = Contact::take(4)->get();
    $contact = Contact::first();

    return view('contact',compact('contacts','contact'));
})->name('contact');

Route::get('/gallery', function () {
    $title = 'Gallery | Committed to investment orientation, profit growth, and extensive global business penetration.';
    $gallerys = Galery::all();
    $contact = Contact::first();

    return view('gallery',compact('title','gallerys','contact'));
})->name('gallery');

Route::get('/partners', function () {
    return view('partners');
})->name('partners');

Route::get('/project-details/{id}', function ($id) {
    $projects = Project::where('id',$id)->get();
    $projectss = Project::latest()->take(3)->get();
    $contact = Contact::first();

    return view('project-details',compact('projects','projectss','contact'));
})->name('project-details');

Route::get('/projects', function () {
    $projects = Project::latest()->paginate(2);
    $projectss = Project::latest()->take(3)->get();
    $contact = Contact::first();
    return view('projects',compact('projects','projectss','contact'));
})->name('projects');

Route::get('/services-details/{id}', function ($id) {
    $services = Service::where('id',$id)->get();
    $contact = Contact::first();
    return view('services-details',compact('services','contact'));
})->name('services-details/{id}');

Route::get('/services', function () {
    $services = Service::all();
    $contact = Contact::first();
    return view('services',compact('services','contact'));
})->name('services');

Route::get('/team', function () {
    $Teams = Team::all();
    $contact = Contact::first();
    return view('team',compact('Teams','contact'));
})->name('team');

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('optimize:clear');
//     // return what you want
// });


Route::get('/dashboard', function () {
    $users = User::all();
    $totalUsers = $users->count();
    $new = News::count();
    $even = Even::count();
    $testimoial = Testimonial::count();
    $gallery = Galery::count();
    $project = Project::count();


    return view('admin.dashboard',compact('users','totalUsers','new','even','testimoial','gallery','project'));
})->middleware(['auth', 'verified'])->name('dashboard');

// routes/web.php


Route::post('/submit-form', [InfoController::class, 'store'])->name('submit-form');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
