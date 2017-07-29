<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Users;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userData = session('thinktub-Auth-Data');
        $userDetails = Users::where('email',$userData['email'])->first();
        return view('pages.adminDashboard')->with('userDetails',$userDetails);
    }
}
