<?php

namespace App\Http\Controllers\Localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class LocalizationController extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        // store the lang in session so that the middleware can register it
        session()->put('lang', $lang);
        return redirect()->back();
    }
}
