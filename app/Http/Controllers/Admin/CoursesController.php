<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function create()
    {
        return view('admin.courses.create',[
            'pagetitle' => 'Dashboard',
            'title' => 'Admin Dashboard'
        ]);
    }

    public function view(Request $request)
    {
    $courses = Courses::find($request->id);

        return view('admin.courses.view', [
            'pagetitle' => 'View',
            'title' => 'View | Admin',
            'courses' => $courses
    ]);
    }
}