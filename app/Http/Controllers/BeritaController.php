<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Berita::all();
        return view('news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

            $destination_path = 'public/images';
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $request->file('photo')->storeAs($destination_path, $name);
            $data['photo'] = $name;
        
        Berita::create($data);
        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = Berita::find($id);
        return view('news.detail', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = Berita::findOrFail($id);
        return view('news.edit', compact('news'));
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
        $data = $request->all();
        $news = Berita::find($id);
        if($request->hasFile('photo'))
        {
            if($news->photo)
        {
          Storage::delete('public/images/'. $news->photo);  
        }
            $destination_path = 'public/images';
            $image = $request->file('photo');
            $name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $name);
            $data['photo'] = $name;
        }
        $news->update($data);
        return redirect('/berita');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::find($id);
        $data->delete();
        return back();
    }
}
