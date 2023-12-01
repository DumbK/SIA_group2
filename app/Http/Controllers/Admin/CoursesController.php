<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::orderby('id', 'asc')
                        ->paginate(10);

        return view('admin.courses.index',[
            'pagetitle' => 'Courses',
            'title' => 'Admin Courses',
            'courses' => $courses
        ]);
    }
    public function create()
    {
        return view('admin.courses.create',[
            'pagetitle' => 'Dashboard',
            'title' => 'Admin Dashboard'
        ]);
    }

    public function view(Request $request)
    {
        $courses = Course::find($request->id);

        return view('admin.courses.view', [
            'pagetitle' => 'View',
            'title' => 'View | Admin',
            'courses' => $courses
        ]);
    }
}