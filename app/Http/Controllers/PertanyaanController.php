<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pertanyaan;


class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTanya = Pertanyaan::latest()->get();
        return view('admin/daftar_pertanyaan', compact('dataTanya'));
    }

    public function eindex()
    {
        $dataTanya = Pertanyaan::latest()->get();
        return view('beranda/pertanyaan', compact('dataTanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beranda/tanyaHoax');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ngambar = time().'.'.$request->gambar->extension();
        $request->file('gambar')->storeAs('public',$ngambar);

        Pertanyaan::create([
            'nama' => $request->nama,
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'gambar' => $ngambar 
        ]);

        return redirect('pertanyaan'); 
    }

    public function estore(Request $request)
    {
        $ngambar = time().'.'.$request->gambar->extension();
        $request->file('gambar')->storeAs('public',$ngambar);

        Pertanyaan::create([
            'nama' => $request->nama,
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
            'nama_penjawab' => $request->nama_penjawab,
            'gambar' => $ngambar 
        ]);

        return redirect('daftar_pertanyaan'); 
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
        $data['daftar_pertanyaan'] = Pertanyaan::find($id);
        return view('admin/jawabPertanyaan', $data);
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
        $this->validate($request,[
            'jawaban' => 'required',
            
        ]);

        $daftar_pertanyaan = Pertanyaan::find($id);
        $daftar_pertanyaan->jawaban = $request->jawaban;
        

        $daftar_pertanyaan->save();
        return redirect('daftar_pertanyaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::destroy($id);
        return redirect('daftar_pertanyaan');
    }
}
