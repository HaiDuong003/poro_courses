<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    //
    public function detailCourse()
    {
        return view('interface.detail_course');
    }
    public function listCourses()
    {
        return view('interface.list_course');
    }
}
