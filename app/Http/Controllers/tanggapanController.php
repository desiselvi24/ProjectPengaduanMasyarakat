<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tanggapan;

class tanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanggapan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tanggapan   ::create([
    		'id_tanggapan' => $request->id_tanggapan,
    		'tgl_tanggapan' => $request->tgl_tanggapan,
            'tanggapan' => $request->tanggapan,
            'nik' => $request->nik
    	]);

        return redirect('tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = tanggapan::where('id_pengaduan', $id_pengaduan)->first();
        return view('tanggapan.edit',compact('tanggapan'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengaduan)
    {
        $this->validate($request,[
            'tgl_pengaduan' => 'required', 
            'nik' => 'required', 
            'isi_laporan' => 'required',
             'foto' =>'required', 
             'status' => 'required' 
            ]);

        $tanggapan = Tanggapan::find($id_tanggapan); 
        $tanggapan->pengaduan = $request->pengaduan; 
        $tanggapan->nik = $request->nik; 
        $tanggapan->isi_laporan = $request->isi_laporan;
        $tanggapan->foto = $request->foto; 
        $tanggapan->status = $request->status;
        $tanggapan->save(); 
        return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
