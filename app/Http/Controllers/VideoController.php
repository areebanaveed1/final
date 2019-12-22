<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function upload(Request $request)
    {

        if(Request::hasFile('file')){

            $file = Request::file('file');
            $filename = $file->getClientOriginalName();
            $path = public_path().'/uploads/';
            return $file->move($path, $filename);
        }

    }
}
