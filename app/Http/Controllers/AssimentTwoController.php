<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssimentTwoController extends Controller
{
    public function index(){
        return view('dashboard.index');
        
    }

    public function chart(){
        return view('dashboard.chart');
        
    }

    public function view404(){
        return view('dashboard.404');
        
    }
    public function blank(){
        return view('dashboard.blank');
        
    }
    public function buttons(){
        return view('dashboard.buttons');
        
    }
    public function element(){
        return view('dashboard.element');
        
    }
    public function form(){
        return view('dashboard.form');
        
    }
    public function singin(){
        return view('dashboard.singin');
        
    }
    public function singup(){
        return view('dashboard.singup');
        
    }
    public function table(){
        return view('dashboard.table');
        
    }
    public function typography(){
        return view('dashboard.typography');
        
    }

    public function widget(){
        return view('dashboard.widget');
        
    }

}
