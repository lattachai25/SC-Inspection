<?php

namespace App\Http\Controllers;
use Auth;
use DB;

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

        return view('home');
    }
    public static function userShow()
    {
        $auth_id = Auth::user()->id;

        $position = DB::table('users')
        // ->select('users.*')
        ->select('position.*','users.*')
        ->join('position','users.position','=','position.id_position')
        ->where('users.id', '=', $auth_id)
        ->get();

        return $position;
    }
}
