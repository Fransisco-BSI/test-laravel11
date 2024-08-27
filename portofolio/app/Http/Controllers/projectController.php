<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function tambah_project(Request $request)
    {
        project::create(
            [
                'judul' => $request->input('judul'),
                'isi' => $request->input('isi')
            ]
        );
        return redirect('/project');
    }
}
