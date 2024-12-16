<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SecureImageController extends Controller
{



public function showImage($filename)
{
    // Check if the user is authorized
    if (Auth::check()) { // or add more specific authorization logic as needed
        $path = 'private/images/' . $filename;

        if (Storage::exists($path)) {
            $file = Storage::get($path);
            $mimeType = Storage::mimeType($path);

            return response($file, 200)->header('Content-Type', $mimeType);
        }
        // Handle file not found
        abort(404);
    }

    // If unauthorized, return an error
    abort(403, 'Unauthorized access to this image.');
}
}
