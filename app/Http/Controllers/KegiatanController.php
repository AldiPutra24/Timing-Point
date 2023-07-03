<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Kegiatan;
use Illuminate\Http\Request;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->id();
        $kegiatans = Kegiatan::where('user_id', $user)->get();
        return view('dashbroad.dashbroad',compact('kegiatans'),["title"=>'dashbroad']);
    }
    public function tampilisi()
    {
        return view('dashbroad.isitugas1',["title"=>'isitugas']);
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
        // dd($request->all());
        $DataKegiatan = $request -> validate([
            'mata_kuliah'=> 'required|max:255',
            'tugas'=>'required',
            'tenggat' =>'required',
            'media' =>'required',
            'status' =>'required'
        ]);
        $DataKegiatan['user_id'] = auth()->id();
        DB::table('kegiatans')->insert($DataKegiatan);

        return back()->with('success', 'Keren Semua Data berhasil diinputkan!!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        $users = DB::table('users')->get();

        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}