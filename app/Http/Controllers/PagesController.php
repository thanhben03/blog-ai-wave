<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // INNER PAGES
    // Style Guide
    public function styleGuide()
    {
        return view('pages.innerPage.styleGuide');
    }

    // Blog
    public function blog()
    {
        return view('pages.innerPage.blog');
    }

    // Blog Details
    public function blogDetails()
    {
        return view('pages.innerPage.blogDetails');
    }

    // Pricing
    public function pricing()
    {
        return view('pages.innerPage.pricing');
    }

    // Contact
    public function contact()
    {
        return view('pages.innerPage.contact');
    }

    // Sign In
    public function signIn()
    {
        return view('pages.innerPage.signIn');
    }

    // Sign Up
    public function signUp()
    {
        return view('pages.innerPage.signUp');
    }

    // Team
    public function team()
    {
        return view('pages.innerPage.team');
    }

    // Terms Policy
    public function termsPolicy()
    {
        return view('pages.innerPage.termsPolicy');
    }

    // Privacy Policy
    public function privacyPolicy()
    {
        return view('pages.innerPage.privacyPolicy');
    }



    // DASHBOARD PAGES
    // Profile Details
    public function profile()
    {
        return view('pages.dashboardPage.profile');
    }

    // Notification
    public function notification()
    {
        return view('pages.dashboardPage.notification');
    }

    // chat Export
    public function chatExport()
    {
        return view('pages.dashboardPage.chatExport');
    }

    // Aappearance
    public function appearance()
    {
        return view('pages.dashboardPage.appearance');
    }

    // Plans and Billing
    public function plansBilling()
    {
        return view('pages.dashboardPage.plansBilling');
    }

    // Sessions
    public function sessions()
    {
        return view('pages.dashboardPage.sessions');
    }

    // Application
    public function application()
    {
        return view('pages.dashboardPage.application');
    }
    // ReleaseNotes
    public function releaseNotes()
    {
        return view('pages.dashboardPage.releaseNotes');
    }

    // Help and FAQ
    public function help()
    {
        return view('pages.dashboardPage.help');
    }



    // roadmap
    public function roadmap()
    {
        return view('pages.other.roadmap');
    }

    // How to Use
    public function howToUse()
    {
        return view('pages.other.howToUse');
    }
}
