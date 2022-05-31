<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramRequest;
use App\Models\Donation;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs= Program::all();
        return view('program', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahprogram');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramRequest $request)
    {
        
    //upload image
    $image = $request->file('banner');
    $image->storeAs('/blogs', $image->hashName());

    Program::create([
        'banner'     => 'blogs/'.$image->hashName(),
        'nama_panti'     => $request->nama_panti,
        'deskripsi'   => $request->deskripsi,
        'lokasi'   => $request->lokasi,
        'kontak'   => $request->kontak,
        'nomor_rekening'   => $request->nomor_rekening,
        'target_donation'   => $request->target_donation
    ]);

    

    return redirect()->route('program.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programId = Program::find($id);
        
        $programs = Donation::where('program_id', '=', $programId->id)->get();

        return view('detailprogram', compact( 'programId','programs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programId = Program::find($id);
        return view('edit', compact('programId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramRequest $request, $id)
    {
          //get data Blog by ID
    $blog = Program::findOrFail($id);
    // dd($blog->banner);
    $image = $request->file('banner');
    $attr = $request->all();

    if (request()->file('banner')) {
        \Storage::delete($blog->banner);
        $banner = $request->file('banner')->storeAs('/blogs',$image->hashName());
    } else {
        $banner = $blog->banner;
    }

    $attr['banner'] = $banner;
    
    $blog->update($attr);

    // if($request->file('image') == "") {

    //     $blog->update([
    //         'nama_panti'     => $request->nama_panti,
    //         'deskripsi'   => $request->deskripsi,
    //         'lokasi'   => $request->lokasi,
    //         'kontak'   => $request->kontak,
    //         'nomor_rekening'   => $request->nomor_rekening,
    //         'target_donation'   => $request->target_donation
    //     ]);

    // } else {

    //     //hapus old image
    //     Storage::disk('local')->delete('/blogs/'.$blog->image);

    //     //upload new image
    //     $image = $request->file('image');
    //     $image->storeAs('public/blogs', $image->hashName());

    //     $blog->update([
    //         'banner'     => $image->hashName(),
    //         'nama_panti'     => $request->nama_panti,
    //         'deskripsi'   => $request->deskripsi,
    //         'lokasi'   => $request->lokasi,
    //         'kontak'   => $request->kontak,
    //         'nomor_rekening'   => $request->nomor_rekening,
    //         'target_donation'   => $request->target_donation
    //     ]);

    //     return redirect()->route('program.index');

    // }


    Alert::success('Data diedit', 'Berhasil mengedit data');
    return redirect()->route('program.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programs=Program::findOrFail($id);
        $programs->delete();

        Alert::success('Data Terhapus', 'Berhasil menghapus data');
        return back();

    }
}
