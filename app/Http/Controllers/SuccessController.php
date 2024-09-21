<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function index()
    {
        if (!session()->has('success')) {
            return redirect()->route('review.index');
        }

        session()->forget('success');

        return view('success');
    }
}
