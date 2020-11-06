<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Response;
class PhotoController extends Controller
{
    public function savePhoto(Request $request){
        $photo = new Photo();
        $photo->title = $request->title;
        $photo->description = $request->description;
        $photo->img = $request->img;
        $photo->date = $request->date;
        $photo->featured = $request->featured;
        $photo->save();
        return Response::json($photo,201);
    }

    public function listPhotos(){
        $photos = Photo::all();
        return Response::json($photos,200);
    }
    public function getPhoto($id){
        $photo = Photo::find($id);
        return Response::json($photo,200);

    }
}
