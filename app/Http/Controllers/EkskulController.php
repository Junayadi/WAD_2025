<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekskul;

class EkskulController extends Controller
{
    public function index()
    {
        $data = Ekskul::all();
        return view('ekskul.index', compact('data'));
    }
}
