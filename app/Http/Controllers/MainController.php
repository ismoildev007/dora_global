<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brend;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
     public function partnerships()
     {
        return view('front.partnerships');
     }
     public function services()
     {
         $services = Service::latest()->take(3)->get();
        return view('front.services', compact(
            'services',
        ));
     }
    public function singleServices($service)
    {
        $service = Service::find($service);
        return view('front.singleServices')->with('service', $service);
    }
    public function blog()
    {
        $blogs = Blog::latest()->take(6)->get();
        return view('front.blog', compact(
            'blogs',
        ));
    }

    public function career()
    {
        return view('front.career');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function portfolio()
    {
        $portfolios = Portfolio::latest()->take(9)->get();
        $brends = Brend::all();
        return view('front.portfolio', compact(
            'portfolios',
            'brends',
        ));
    }

    public function projectDetail()
    {
    return view('front.projectDetail');
}
    public function blogDetail($blog)
    {
        $blog = Blog::find($blog);
        return view('front.blogDetail')->with('blog', $blog);
    }
}

