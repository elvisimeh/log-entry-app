<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Log;

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
      $hour_24 = date('Y-m-d H:i:s', strtotime('+24 hours'));
      $hour_1 = date('Y-m-d H:i:s', strtotime('+1 hours'));
      $log_24=Log::where('created_at','>=',$hour_24)->get();
      $log_1=Log::where('created_at','>=',$hour_1)->get();
      $log_all=Log::all()->groupBy('project','severity');
        return view('home', compact('log_24','log_1','log_all'));
    }

    
}
