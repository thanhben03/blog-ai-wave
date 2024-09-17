<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\toolsController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

// Tool's
Route::prefix('tools')->name('tools.')->group(function () {
    Route::controller(toolsController::class)->group(function () {
        Route::get('text-generator', 'text')->name('text.generator');
        Route::get('image-generator', 'imageGenerator')->name('image.generator');
        Route::get('code-generator', 'code')->name('code.generator');
        Route::get('video-generator', 'video')->name('video.generator');
        Route::get('email-generator', 'email')->name('email.generator');
        Route::get('audio-generator', 'audio')->name('audio.generator');
        Route::get('website-generator', 'website')->name('web.generator');
        Route::get('image-editor', 'iamgeEditor')->name('image.editor');
        Route::get('edu-feedback', 'eduFeedback')->name('edu.feedback');
    });
});

Route::controller(PagesController::class)->name('pages.')->group(function () {
    // Pages
    // Inner Pages
    Route::get('style-guide', 'styleGuide')->name('style.guide');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blog.details');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('contact', 'contact')->name('contact');
    Route::get('sign-in', 'signIn')->name('sign-in');
    Route::get('sign-up', 'signUp')->name('sign-up');
    Route::get('team', 'team')->name('team');
    Route::get('terms-policy', 'termsPolicy')->name('terms.policy');
    Route::get('privacy-policy', 'privacyPolicy')->name('privacy.policy');
    // Dashboard Pages
    Route::get('profile-details', 'profile')->name('profile');
    Route::get('notification', 'notification')->name('notification');
    Route::get('chat-export', 'chatExport')->name('chat.export');
    Route::get('appearance', 'appearance')->name('appearance');
    Route::get('plans-billing', 'plansBilling')->name('plans.billing');
    Route::get('sessions', 'sessions')->name('sessions');
    Route::get('application', 'application')->name('application');
    Route::get('release-notes', 'releaseNotes')->name('release.notes');
    Route::get('help', 'help')->name('help');

    // Pages End
    Route::get('roadmap', 'roadmap')->name('roadmap');
    Route::get('how-to-use', 'howToUse')->name('how.to.use');
});
