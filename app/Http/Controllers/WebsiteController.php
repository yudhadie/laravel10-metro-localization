<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $content = Content::limit(6)->get();
        return view('website.home',[
            'contents' => $content,
        ]);
    }
}
