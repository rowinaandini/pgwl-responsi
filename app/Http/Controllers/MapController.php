<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
public function index()
{
    $data = [
        "title" => "Peta 𝔾𝕖𝕠𝕋𝕒",
    ];

    if (auth()->check()) {
        return view('index', $data);
    } else {

    return view('index-public',$data);
    }
}
public function table()
{
    $data = [
        "title" => "table",
    ];
    return view('table', $data);
}
}
