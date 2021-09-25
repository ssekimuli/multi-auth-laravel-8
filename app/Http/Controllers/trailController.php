<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trailController extends Controller
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
	
   public function dash(){

   	return view('admin/adhome');
   }

   public function student(){

   	return view('student/sthome');
   }

   public function teacher(){

   	return view('teacher/thome');
   }

   public function detail(){

    return view('detail');
   }
}
