<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use App\Models\Culinaries;
use App\Models\Batik;
use App\Models\Review;

class ReviewController extends Controller
{
    public function storeReviewUmkm(Request $request, $umkm_id) {
        $request->validate([
            'name' => 'required|string',
            'review' => 'required|string|max:255'
        ]);
        
        $umkm = Umkm::findOrFail($umkm_id);
        $umkm->reviews()->create([
            'name' => $request->input('name'),
            'review' => $request->input('review')
        ]);

        return redirect()->route('umkm.umkmDetail', $umkm_id)->with('success', 'Komentar berhasil ditambahkan');
    }

    public function storeReviewCulinaries(Request $request, $culinaries_id) {
        $request->validate([
            'name' => 'required|string',
            'review' => 'required|string|max:255'
        ]);
        
        $culinaries = Culinaries::findOrFail($culinaries_id);
        $culinaries->reviews()->create([
            'name' => $request->input('name'),
            'review' => $request->input('review')
        ]);

        return redirect()->route('culinary.culinaryDetail', $culinaries_id)->with('success', 'Komentar berhasil ditambahkan');
    }

    public function storeReviewBatik(Request $request, $batik_id) {
        $request->validate([
            'name' => 'required|string',
            'review' => 'required|string|max:255'
        ]);
        
        $batik = Batik::findOrFail($batik_id);
        $batik->reviews()->create([
            'name' => $request->input('name'),
            'review' => $request->input('review')
        ]);

        return redirect()->route('batik.batikDetail', $batik_id)->with('success', 'Komentar berhasil ditambahkan');
    }
}

