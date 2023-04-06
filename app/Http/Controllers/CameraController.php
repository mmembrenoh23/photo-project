<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CameraController extends Controller
{
    public function index() {
        return view('camera');
    }

    public function store(Request $request) {
        $image = $request->image;
        $folderPath = "uploads/";

        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type =  $image_type_aux[1];
        
        $image_base64 = base64_decode($image_parts[1]);
        $filename = uniqid() . '.png';

        $file = $folderPath . $filename;

        Storage::put($file, $image_base64);

        dd("image uploaded ". $filename);
    }
}
