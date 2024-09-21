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
            'email' => 'required|email',
            'project_description' => 'required|string',
            'agree' => 'required|boolean',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'project_description' => $request->project_description,
            'agreed' => $request->agree ? 1 : 0,
        ]);

        return redirect()->route('review.index')->with('success', 'Review submitted successfully!');
    }
}
