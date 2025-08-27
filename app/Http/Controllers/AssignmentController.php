<?php

namespace App\Http\Controllers;

use App\Models\Assignments;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    public function uploadAssignment(Request $req)
    {
        // Validate the request data
        $formFields = $req->validate([
            'topic' => 'required|string|min:3|max:255',
            'marks' => 'required|integer|min:5|max:100',
            'batch' => 'required|string',
            'deadline' => 'required|date',
            'type' => 'required|string',
            'file' => 'required|file|mimes:jpg,jpeg,pdf,doc,docx,xls,txt,png|max:10000',
            'desc' => 'required|string|min:5|max:1000',
        ]);

        // store file in storage
        $formFields['file'] = $req->file('file')->store('assignments','public');

        Assignments::create($formFields);

        // Handle file upload and assignment creation logic here

        // return redirect()->back()->with('success', 'Assignment uploaded successfully!');  
    }
}