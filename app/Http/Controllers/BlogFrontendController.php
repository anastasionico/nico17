<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;

class BlogFrontendController extends Controller
{
    public function index()
    {
    	$blogs = Blogpost::orderBy('created_at', 'asc')->get();
    	return view('blog', compact('blogs'));
    }

    public function show(Request $request, $param)
    {
    	$segment = $request->segment(1);
    	$content = Blogpost::where('id', $param)
            ->orWhere('slug', $param)
            ->firstOrFail();
   		$otherContents = Blogpost::where('id', '!=', $param)
                    ->where('slug', '!=', $param)
                    ->limit(3)
                    ->orderBy('created_at', 'desc')
                    ->get();
        return view('detail', compact('content', 'otherContents','segment'));
    }
}
