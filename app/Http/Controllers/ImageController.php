<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
    if ($request->hasFile('input_img')) {
        if($request->file('input_img')->isValid()) {
            try {
                $file = $request->file('input_img');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('input_img')->move("fotoupload", $name);
            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
    
            }
        }
    }
}
}
