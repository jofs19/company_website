<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function AboutPage(){
        return view('user.information.about_us');
    }

    public function ContactPage(){
        return view('user.information.contact_us');
    }

    public function BRM(){
        return view('user.products.brm');
    }
}
