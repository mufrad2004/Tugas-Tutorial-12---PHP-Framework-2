<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller {
    public function store(Request $request) {
        $path = $request->file('file')->store('files');
        return "Uploaded to: $path";
    }

    public function download($file) {
        return Storage::download("files/$file");
    }
}