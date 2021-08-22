<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Laporan_foh;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporanHoax = Laporan_foh::latest()->get();
        return view('admin/laporanHoax', compact('laporanHoax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/laporanHoax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nSS1 = time().'G1.'.$request->gambar1->extension();
        $request->file('gambar1')->storeAs('public',$nSS1);
        $nSS2 = time().'G2.'.$request->gambar2->extension();
        $request->file('gambar2')->storeAs('public',$nSS2);


        Laporan_foh::create([
            'nama_pelapor' => $request->nama_pelapor,
            'email_pelapor' => $request->email_pelapor,
            'judul_laporan' => $request->judul_laporan,
            'detail_laporan' => $request->detail_laporan,
            'gambar1' => $nSS1,
            'gambar2' => $nSS2 
        ]);

        return redirect('/laporanHoax'); 
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Laporan_foh::destroy($id);
        return redirect('/laporanHoax');
    }
}
