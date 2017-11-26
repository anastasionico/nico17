<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;

class BlogFrontendController extends Controller
{
    public function index()
    {
    	$posts = Blogpost::where('status', '=', 3)->orderBy('created_at', 'asc')->get();
    	return view('blog', compact('posts'));
    }

    public function show(Request $request, $param)
    {
    	$segment = $request->segment(1);
    	$content = Blogpost::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();
   		$otherContents = Blogpost::where('id', '!=', $param)
                    ->where('slug', '!=', $param)
                    ->where('status', '=', 3)
                    ->limit(3)
                    ->orderBy('created_at', 'asc')
                    ->get();
        return view('detail', compact('content', 'otherContents','segment'));
    }
}
