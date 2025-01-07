<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Batik;

class BatikController extends Controller
{
    public function index() {
        $batiks = Batik::all();

        return view('batik.batik', ['batiks' => $batiks]);
    }

    public function getDetail($id) {
        $batik = Batik::with('reviews')->findOrFail($id);
        
        return view('batik.batikDetail', ['batik' => $batik]);
    }
}
