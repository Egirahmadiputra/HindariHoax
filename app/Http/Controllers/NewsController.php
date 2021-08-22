<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Humas_foh;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataHoax = Humas_foh::latest()->get();
        return view('admin/humas_foh', compact('dataHoax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tambahData');
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


        Humas_foh::create([
            'judul_hoax' => $request->judul_hoax,
            'detail_hoax' => $request->detail_hoax,
            'gambar_hoax' => $nHoax,
            'judul_fakta' => $request->judul_fakta,
            'detail_fakta' => $request->detail_fakta,
            'gambar_fakta' => $nFakta,
            'bukti' => $request->bukti 
        ]);

        return redirect('humas_foh'); 
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
        $data['humas_foh'] = Humas_foh::find($id);
        return view('admin/editData', $data);
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
            'judul_hoax' => 'required',
            'detail_hoax' => 'required',
            'judul_fakta' => 'required',
            'detail_fakta' => 'required',
            'bukti' => 'required',
            
        ]);

        $humas_foh = Humas_foh::find($id);
        $humas_foh->judul_hoax = $request->judul_hoax;
        $humas_foh->detail_hoax = $request->detail_hoax;
        $humas_foh->judul_fakta = $request->judul_fakta;
        $humas_foh->detail_fakta = $request->detail_fakta;
        $humas_foh->bukti = $request->bukti;
        

        $humas_foh->save();
        return redirect('humas_foh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Humas_foh::destroy($id);
        return redirect('humas_foh');
    }
}
