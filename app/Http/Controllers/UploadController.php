<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $validateData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');

        $save = new File;

        $save->name = $name;
        $save->path = $path;
        $save->save();

        return redirect('upload')->with('status', 'File has been uploaded');
    }
}
