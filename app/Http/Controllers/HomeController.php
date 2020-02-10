<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Grade;
use App\User;
use App\Category;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::whereId(Auth::user()->id)->first();
        $grade = Grade::whereId($user->grade_id)->first();
        $category = Category::whereId($user->category_id)->first();
        
        return view('home', [
            'user' => $user,
            'grade' => $grade,
            'category' => $category
        ]);
    }
}
