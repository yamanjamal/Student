<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Session;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

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
        // $h=Subject::whereHas('Sessions',function($query) {
        //     return $query->whereHas('Records',function($query) {
        //         return dd($query->appear) ;
        //     });
        // });


        return view('home');

    }
}
