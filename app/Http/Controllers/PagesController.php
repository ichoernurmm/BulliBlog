<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        if (auth()->check()) {
            return redirect('/home');
        }

        $title = 'Bulli Travelers';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'About us';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
