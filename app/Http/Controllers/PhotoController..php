<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController. extends Controller
{
    public function show($id)
    {
        $photo = Photo::findOrFail($id);

        return view('photos.show', compact('photo'));
    }
}

Route::get('/photo/{id}',
    [PhotoController::class, 'show']);

