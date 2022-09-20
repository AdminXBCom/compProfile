<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;


class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $service = Service::all();
        $portfolio = Portfolio::all();

        
        return view('home.index', compact(
            'slider',
            'about',
            'service',
            'portfolio',
        ));
    }

    public function about()
    {
        $about = About::all();
        return view('home.about', compact('about'));
    }

    public function services()
    {
        $service = Service::all();
        return view('home.service', compact('service'));
    }

    public function portfolio()
    {
        $portfolio = Portfolio::all();
        return view('home.portfolio', compact('portfolio'));
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function contact()
    {
        return view('home.contact');
    }
}
