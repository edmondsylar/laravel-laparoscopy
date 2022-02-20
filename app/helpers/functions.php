<?php

use Illuminate\Support\Facades\DB;

    function module_rating_by_usage(){

        return 'module';
    }

    function _course($id){

        $course = DB::select('select * from courses where id = :id limit=1', ['id'=> $id]);

        // return the course data 
        return $course;
    }

    function __this_attempt($id){
        // get the attempt information.
            // we need to get the following.
            // 1. attempt
            // 2. course
            // 3.course_module

        
        $attempt = DB::select('select * from attempts where id = :id', ['id'=>$id]);
        $course = DB::select('select * from courses where id=:id', ['id'=>$attempt[0]->course_id]);

        $data = [
            'attempt'=>$attempt[0],
            'course'=>$course[0]
        ];

        return $data;


    }


?>