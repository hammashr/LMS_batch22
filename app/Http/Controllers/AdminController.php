<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class AdminController extends Controller
{
    //
    public function AddUser(Request $req)
    {

        $formFields = $req->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'course_assigned' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'gender' => 'required|string|max:10',
            'batch_assigned' => 'required|string|max:255',
        ]);
        // return view('admin.pages.add-user');
        $formFields['image'] = $req->file('image')->store('user_images', 'public');
        $formFields['password'] = bcrypt($formFields['password']);

        // send the data to the database
        User::create($formFields);
        return back()->with('message', 'User added successfully!');

    }
}