<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class toolsController extends Controller
{
    // text
    public function text()
    {
        return view('tools.text');
    }

    // image
    public function imageGenerator()
    {
        return view('tools.imageGenerator');
    }

    // code
    public function code()
    {
        return view('tools.code');
    }

    // video
    public function video()
    {
        return view('tools.video');
    }

    // email
    public function email()
    {
        return view('tools.email');
    }

    // audio
    public function audio()
    {
        return view('tools.text');    }

    // website
    public function website()
    {
        return view('tools.text');
    }

    // iamge- Editor
    public function  iamgeEditor()
    {
        return view('tools.iamgeEditor');
    }

    // edu-Feedback
    public function eduFeedback()
    {
        return view('tools.text');
    }
}
