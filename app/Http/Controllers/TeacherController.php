<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Student;
use App\Models\User;

class TeacherController extends Controller
{
    public function getBatchStudents($batchId)
{
    $students = User::where('batch_assigned', $batchId)
        ->where('role', 'student')
        ->where('batch_assigned', '!=', 0)
        ->get();
    return response()->json($students);
}

public function dashboard()
{
    $batches = Batch::all();
    return view('teachers.Dashboard', compact('batches'));
}

public function attendance()
{
    $batches = Batch::all();
    return view('teachers.attendance', compact('batches'));
}
}