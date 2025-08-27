<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CourseController extends Controller
{
    //
    public function AddCourse(Request $req)
    {
        $formFields = $req->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer|min:1',
            'level' => 'required|string|in:beginner,intermediate,advanced',
        ]);

        // If you had an image field, you would handle the file upload here
        // if ($req->hasFile('image')) {
        //     $formFields['image'] = $req->file('image')->store('course-images', 'public');
        // }

        Courses::create($formFields);

        return back()->with([
            'message' => 'Course added successfully!',
            'type' => 'success'
        ]);
    }

    public function GetCourses(){
        $courses = Courses::all();
        return view('admin.pages.add-batches', compact('courses'));
    }


     public function GetCoursesUser(){
        $courses = Courses::all();
        return view('admin.pages.add-user', compact('courses'));
    }
}