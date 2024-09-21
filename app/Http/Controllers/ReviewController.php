<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\User;
use Dotenv\Util\Str;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    // TODO: stricter validation
    public function store(StoreReviewRequest $request) {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('uploads', 'public');
        }

        User::create([
            'name' => $request->validated()['name'],
            'email' => $request->validated()['email'],
            'project_description' => $request->validated()['project_description'],
            'agreed' => $request->validated()['agreed'] ? 1 : 0,
            'file_path' => $filePath ?? null,
        ]);

        return redirect()->route('review.index')->with('success', 'Review submitted successfully!');
    }
}
