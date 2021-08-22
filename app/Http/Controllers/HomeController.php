<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Home;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataHoax = Home::latest()->get();
        return view('beranda/home', compact('dataHoax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nHoax = time().'GH1.'.$request->gambar_hoax->extension();
        $request->file('gambar_hoax')->storeAs('public',$nHoax);
        $nFakta = time().'GH2.'.$request->gambar_fakta->extension();
        $request->file('gambar_fakta')->storeAs('public',$nFakta);


        Home::create([
            'judul_hoax' => $request->judul_hoax,
            'detail_hoax' => $request->detail_hoax,
            'gambar_hoax' => $nHoax,
            'judul_fakta' => $request->judul_fakta,
            'detail_fakta' => $request->detail_fakta,
            'gambar_fakta' => $nFakta,
            'bukti' => $request->bukti 
        ]);

        return redirect('/home'); 
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
        
    }
}
