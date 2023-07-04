<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashbroad.harian',[
            "title"=>'harian'
        ]);
    }
    public function indexlanjut()
    {
        return view('dashbroad.harian-lanjut',[
            "title"=>'harian',"hari"=>'wednesday'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $DataKegiatan = $request -> validate([
        //     'tugas'=> 'required|max:255'
        // ]);
        // dd($request->all());
        // $DataKegiatan['user_id'] = auth()->id();
        // // $DataKegiatan['hari'] = 'rabu';

        // DB::table('tugas')->insert($DataKegiatan);
        // return $DataKegiatan;
        // // return back()->with('success', 'Keren Semua Data berhasil diinputkan!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tugas $tugas)
    {
        //
    }
}