<?php

namespace App\Controllers;

class LanguageController extends BaseController
{
    public function switch($language = null) {
        // Validate language input and set the session variable
        $language = in_array($language, ['en', 'ne']) ? $language : 'ne';
        session()->set('language', $language);
        // echo "session added ". session('language');
        // Redirect to the previous page or home
        return redirect()->back();
    }
    
    // public function switch($language = 'en')
    // {
    //     // Set the chosen language in session
    //     session()->set('language', $language);

    //     // Redirect back to the previous page
    //     return redirect()->back();
    // }
}
