<?php

namespace Oasis\Http\Controllers;

use Oasis\Career;
use Oasis\Post;
use Oasis\Team;
use Oasis\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
