<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submission; // <-- tempat yang benar

class FormController extends Controller {
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'file' => 'required|file|max:2048'
        ]);
    
        $path = $request->file('file')->store('files');

        // Simpan ke database
        Submission::create([
            'name' => $request->name,
            'email' => $request->email,
            'file_path' => $path
        ]);
    
        return back()->with([
            'success' => 'Form submitted successfully!',
            'name' => $request->name,
            'email' => $request->email,
            'file' => $path
        ]);
    }

    public function list()
    {
        $submissions = Submission::all();
        return view('list', compact('submissions'));
    }
}
