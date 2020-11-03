<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Profiles extends Controller
{
    return response()->file(resource_path('assets/js/data/filename'));   
}
