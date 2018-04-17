<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\BlogSupercategory;

class BlogFrontendController extends Controller
{
    public function index()
    {
    	$posts = Blogpost::select('img','category_id','published_at','name','excerpt','cta_link','slug')->where('status', '=', 3)->orderBy('created_at', 'desc')->get();
        $supercategories = BlogSupercategory::all();
        
        return view('blog', compact('posts','supercategories'));
    }

    public function show(Request $request, $param)
    {
    	$segment = $request->segment(1);
    	$content = Blogpost::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();
        // dd($content->order);
   		$otherContents = Blogpost::where('id', '!=', $param)
                ->where('slug', '!=', $param)
                ->where('category_id', '=', $content->category_id)
                ->where('status', '=', 3)
                ->offset($content->order-2)
                ->limit(3)
                ->orderBy('order', 'asc')
                ->get();
        
        if($otherContents->count() === 0){
            $otherContents = Blogpost::where('id', '!=', $param)
                ->where('slug', '!=', $param)
                ->where('status', '=', 3)
                ->limit(3)
                ->orderBy('created_at', 'asc')
                ->get();    
        }
        
        return view('detail', compact('content', 'otherContents','segment'));
    }

    public function filterCategory(Request $request, $param)
    {
        $segment = $request->segment(2);
        $posts = Blogpost::join('blogcat', 'blogposts.category_id', '=', 'blogcat.id')
            ->join('blogsupercat', 'blogcat.supercat_id', '=', 'blogsupercat.id')
            ->select('blogposts.img','blogposts.category_id','blogposts.published_at','blogposts.name','blogposts.excerpt','blogposts.cta_link','blogposts.slug')
            ->where('status', '=', 3)
            ->where('blogsupercat.name', '=', $param)
            ->get();
        $supercategories = BlogSupercategory::all();

        return view('blog', compact('posts','supercategories','segment'));        

        
        
    }
}
