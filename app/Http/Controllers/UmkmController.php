<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\DB;

class UmkmController extends Controller
{
    public function index() {
        $umkms = Umkm::all();
        $areas = DB::table('umkms')->select('area')->distinct()->get();
        return view('umkm.umkm', ['umkms' => $umkms, 'area' => $areas]);
    }
    
    public function getDetail($id) {
        $umkm = Umkm::with('reviews')->findOrFail($id);
        
        return view('umkm.umkmDetail', ['umkm' => $umkm]);
    }

    public function filter() {
        
    }
}
