<?php

namespace App\Http\Controllers;

use App\Models\PracticeSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attempt;
use App\Models\courses;
use App\Models\course_module;

class UserContent extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('user_content.recorded_sessions')
            ->with('veiw_name', 'User Sessions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // now here we are going to first create our session|Attempt.
        $_ = Attempt::create([
            'session_name' => $request->input('session_name'),
            'description' => $request->input('description'),
            'course_id' => $request->input('course'),
            // 'course_module' => $request->input(''),
            'created_by' => Auth::user()->id
        ]);

        if ($_->save()) {
            // code...
            return redirect('/user_sessions/'.$_->id);
        };
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $session = Attempt::find($id);
        $course = courses::find($session->id);
        $modules = course_module::where('course_id', $id)->get();


        // return [$course, $modules];
        return view('practice.session')
            ->with('modules', $modules)
            ->with('session', $session)
            ->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
