<?php

namespace App\Http\Controllers;

use App\Category;
use App\Models\Categories;
use App\Models\NewsletterContents;
use App\Models\Sectioncalls;
use App\Models\Services;
use App\Work;
use Illuminate\Http\Request;
use App\Models\Sliders;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($locale)
    {
        $langs = ['tr', 'en'];
        if (in_array($locale, $langs)) {
            Session::put('locale', $locale);
        } else {
            Session::put('locale', 'tr');
        }
        return redirect()->back();
    }
}
