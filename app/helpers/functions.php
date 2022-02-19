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


?>