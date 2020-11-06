<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use Response;
class PhotographerController extends Controller
{
    public function listPhotographers(){
        $photographers = Photographer::all();
        return Response::json($photographers,200);
    }
    public function getPhotographer($id){
        $photographer = Photographer::find($id);
        return Response::json($photographer,200);

    }
}
