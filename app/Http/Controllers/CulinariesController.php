<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culinaries;
use Illuminate\Support\Facades\DB;

class CulinariesController extends Controller
{
    public function index() {
        $culinaries = Culinaries::all();
        $areas = DB::table('culinaries')->select('area')->distinct()->get();
        return view('culinary.culinary', ['culinaries' => $culinaries, 'area' => $areas]);
    }

    public function getDetail($id) {
        $culinary = Culinaries::with('reviews')->findOrFail($id);
        
        return view('culinary.culinaryDetail', ['culinary' => $culinary]);
    }
}

