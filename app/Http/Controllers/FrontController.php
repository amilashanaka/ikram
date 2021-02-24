<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('Home.home');
    }

    public function about()
    {
        return view('Home.about');
    }

    public function blog(){


        return view('Home.blog');
    }

    public function career(){


        return view('Home.career');
    }


    public function contact(){


        return view('Home.contact');
    }


    public function projects(){


        return view('Home.projects');
    }

    public function projectDetail(){


        return view('Home.projectDetail');
    }

    public function service(){


        return view('Home.service');
    }







}
