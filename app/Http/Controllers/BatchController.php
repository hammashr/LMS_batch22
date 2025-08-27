<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    //
    public function AddBatch(Request $req)
    {
        $formFields = $req->validate([
            'batch_name' => 'required|string|max:255',
            'course' => 'required|exists:courses,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'capacity' => 'required|integer|min:1',
            'status' => 'required|string|in:active,inactive',
            'teacher_assigned' => 'required|exists:users,id'
        ]);

        // Create the batch
        Batch::create($formFields);

        return back()->with([
            'message' => 'Batch added successfully!',
            'type' => 'success'
        ]);
    }



    public function GetRelevantBatches(Request $req )
    {
        // $batches = Batches::where('course_id', $courseId)->get();
        // return response()->json($batches);
        $course_id = $req->query('course_id');
        $batches = Batch::where('course', $course_id)->get();
        return response()->json($batches);
    }


    public function getTeacher(){
        $teachers = User::where('role', 'teacher')->get();
        return response()->json($teachers);
    }


    public function getMyBatches(){
        // ma chahta hun ka $user_id ma wo id ay jo user id ha 
        $user_id = Auth::user()->id;
        $batches = Batch::where('teacher_assigned', $user_id)->get();
        return response()->json($batches);
    }
}