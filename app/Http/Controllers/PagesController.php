<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Welcome to Laravel !!";
      //return view('pages.index', compact('title')); also write
      return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        /*this is for single value pass
        $data = array(
            'title' => 'Services'
        );
        return view('pages.services')->with($data);*/
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'Web Development']
        );
        return view('pages.services')->with($data);
    }

    public function extersice(){
        return view('pages.extersice');
    }
}
