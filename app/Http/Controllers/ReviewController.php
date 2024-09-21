<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    public function index(){
        return view('review');
    }

    public function store(StoreReviewRequest $request) {
        DB::transaction(function () use ($request) {
            $filePath = null;

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $filePath = $file->store('uploads', 'public');
            }

            User::create([
                'name' => $request->validated()['name'],
                'email' => $request->validated()['email'],
                'project_description' => $request->validated()['project_description'],
                'agreed' => $request->validated()['agreed'] ? 1 : 0,
                'file_path' => $filePath,
            ]);
        });
        session()->flash('success');

        return redirect()->route('success')->with('success', 'Review submitted successfully!');

    }
}
