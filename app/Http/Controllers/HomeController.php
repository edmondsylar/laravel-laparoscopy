<?php

namespace App\Http\Controllers;

use App\Models\module;
use App\Models\PracticeSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $modules = module::all();
        $no_sessions = PracticeSession::where('created_by', Auth::user()->id)->count();
        // Str::random($length)

        //  lets make sure there are some modules in the System before its'actually used.
        return view('home')
            ->with('no_sessions', $no_sessions)
            ->with('modules', $modules);
    }
}
