<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        return view(
            'welcome'
        );
    }

    public function product()
    {
        return view(
            'product'
        );
    }

    public function store()
    {
        return view('store');
    }

    public function contact()
    {
        print 'contact';
    }

}
