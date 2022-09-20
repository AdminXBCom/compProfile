<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required',
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationpath = 'image/';
        //     $imageName = date('Ymd') . "." . $image->getClientOriginalName();
        //     $image->move($destinationpath, $imageName);
        //     $input['image'] = $imageName;
        // }

        about::create($input);
        return redirect('/admin/about')->with('message','data tersimpan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required',
        ]);

        $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationpath = 'image/';
        //     $imageName = date('Ymd') . "." . $image->getClientOriginalName();
        //     $image->move($destinationpath, $imageName);
        //     $input['image'] = $imageName;
        // }else{
        //     unset($input['image']);
        // }

        $about->update($input);
        return redirect('/admin/about')->with('message','data di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect('/admin/about')->with('message', 'data berhasil di delete');
    }

}
