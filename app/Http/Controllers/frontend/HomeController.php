<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        // Lấy tin với is_breaking_news = 1
        $heroSlider = News::with(['category'])
        ->where('is_breaking_news', 1)
        ->where('status', 1)
        ->where('is_approved', 1)
        ->orderBy('id', 'DESC')->take(7)
        ->get();

        // Sắp xếp theo id với DESC
        $recentNews = News::with(['category'])
        ->where('status', 1)
        ->where('is_approved', 1)
        ->orderBy('id', 'DESC')
        ->take(9)
        ->get();

        // Sắp xếp theo views với DESC
        $mostViewedPosts = News::with(['category'])
        ->where('status', 1)
        ->where('is_approved', 1)
        ->orderBy('views', 'DESC')
        ->take(5)
        ->get();
        ;

        $categorySection = [];

        return view('frontend.home',compact(
        'heroSlider',
        'recentNews',
        'categorySection',
        'mostViewedPosts'));
    }


    public function news(request $request){
        $news = News::query();
        $news->when($request->has('category') && !empty($request->category), function($query) use ($request){
            $query->whereHas('category', function($query) use ($request){
                $query->where('slug', $request->category);
            });
        });

        $news->when($request->has('search'), function($query) use ($request) {
            $query->where(function($query) use ($request){
                $query->where('title', 'like', '%' .$request->search. '%')
                ->orWhere('content', 'like', '%' .$request->search. '%');

            })->orWhereHas('category', function($query) use ($request){
                $query->where('name', 'like', '%'.$request->search. '%');
            });
        });

        // $news = $news->ativeEntries()->paginate(4);
        $news = News::activeEntries()->paginate(4);


        $recentNews = News::with(['category'])
        ->activeEntries()
        ->orderBy('id', 'DESC')
        ->take(4)
        ->get();

        $categories = Category::where(['status' => 1])->get();

        return view('frontend.news', compact(
            'news',
            'recentNews',
            'categories'
        ));
    }
}
