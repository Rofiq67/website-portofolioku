<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanController extends Controller
{
    function index()
    {
        $datahalaman = halaman::orderBy('judul', 'asc')->get();
        return view('dashboard.pengaturan.index')->with('datahalaman', $datahalaman);
    }


    function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key'=>'_halaman_about'],['meta_value'=>$request->_halaman_about]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_interest'],['meta_value'=>$request->_halaman_interest]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_sertifikat'],['meta_value'=>$request->_halaman_sertifikat]);

        return redirect()->route('pengaturan.index')->with('success','Berhasil update data pengaturan halaman');
    }
}
