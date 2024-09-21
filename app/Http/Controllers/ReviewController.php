<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    // TODO: stricter validation
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'project_description' => 'required|string|max:512',
            'agreed' => 'accepted',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:10240',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'project_description' => $request->project_description,
            'agreed' => $request->agreed ? 1 : 0,
            'file_path' => $filePath ?? null
        ]);

        return redirect()->route('review.index')->with('success', 'Review submitted successfully!');
    }
}
