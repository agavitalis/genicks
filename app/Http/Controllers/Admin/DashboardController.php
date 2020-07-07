<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $story_count = 20;
        $user_count = 50;
        $gallery_count = 60;

        return view('admin.dashboard',compact('story_count','user_count','gallery_count'));
    }
}
