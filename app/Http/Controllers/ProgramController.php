<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        
    //upload image
    $image = $request->file('banner');
    $image->storeAs('/blogs', $image->hashName());

    Program::create([
        'banner'     => $image->hashName(),
        'title'     => $request->title,
        'story'   => $request->story,
        'incoming_donation'   => $request->incoming_donation
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
        $programId = Program::find($id);
        // dd($programId);
        return view('edit', compact('programId'));

        return back()->with('success','Berhasil Diupdate');
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

          //get data Blog by ID
    $blog = Program::findOrFail($id);

    if($request->file('image') == "") {

        $blog->update([
            'title'     => $request->title,
            'story'     => $request->story,
            'incoming_donation'   => $request->incoming_donation
        ]);

    } else {

        //hapus old image
        \Storage::disk('local')->delete('/blogs/'.$blog->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $blog->update([
            'banner'     => $image->hashName(),
            'title'     => $request->title,
            'story'   => $request->story,
            'incoming_donation'   => $request->incoming_donation
        ]);

        return redirect()->route('program.index');

    }

    return back();


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

        return back();

    }
}
