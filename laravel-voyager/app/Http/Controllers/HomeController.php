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

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Sliders::where('status', 1)->get();
        $sliders = $sliders->translate(app()->getLocale());

        $services = Services::where('status', 1)->get();
        $services = $services->translate(app()->getLocale());

        $calls = Sectioncalls::where('status', 1)->where('id', 1)->first();

        $categories = Categories::where('status', 1)->get();
        $categories = $categories->translate(app()->getLocale());

        $works = Work::where('status', 1)->get();
        $works = $works->translate(app()->getLocale());

        $newsletter_contents = NewsletterContents::all();
        $newsletter_contents = $newsletter_contents->translate(app()->getLocale());

        return view('home.index', compact('sliders', $sliders, 'services', $services, 'calls', $calls, 'categories', $categories, 'works', $works, 'newsletter_contents', $newsletter_contents));
    }
}
