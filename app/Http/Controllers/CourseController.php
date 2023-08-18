<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function add(Request $request)
    {
        // $request;
        // if ($request->isMethod('POST')) {
        // }
        return view('admin.add_course');
    }

    public function listCourse(Request $request)
    {
        return view('admin.list_course');
    }
}
