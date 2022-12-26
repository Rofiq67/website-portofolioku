<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use Illuminate\Http\Request;

class userviewController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = halaman::where('id', $about_id)->first();

        $interest_id = get_meta_value('_halaman_interest');
        $interest_data = halaman::where('id', $interest_id)->first();

        $sertifikat_id = get_meta_value('_halaman_sertifikat');
        $sertifikat_data = halaman::where('id', $sertifikat_id)->first();

        $exprience_data = riwayat::where('tipe', 'exprience')->get();
        $education_data = riwayat::where('tipe', 'education')->get();

        return view('userview.index')->with([
            'about' => $about_data,
            'interest' => $interest_data,
            'sertifikat' => $sertifikat_data,
            'exprience' => $exprience_data,
            'education' => $education_data,
        ]);
    }
}
