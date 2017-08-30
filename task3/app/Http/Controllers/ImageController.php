<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Image;
use App\User;
use Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //halaman upload member
        return view('member.upload');
    }

    public function imagelist()
    {
        //halaman imagelist
        $images = Image::all();
        return view('member.list',compact('images'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {
        //ambil data
        $file = $request->file('path');
        $dt = 'upload_images/';
        $hasil = $file->move($dt,time()."_".$file->getClientOriginalName());
        
        //simpan ke database images
        $images = new Image();
        $images->title = $request->title;
        $images->path = $hasil;
        $images->user_id = Auth::user()->id;
        // dd($images->user_id);
        $images->save();

        return redirect()->route('image.imagelist');
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
        //
        $images = Image::findOrFail($id);
        return view('member.edit',compact('images'));
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
        //
        $images = Image::findOrFail($id);
        $images->title = $request->title;
        $images->save();

        return redirect()->route('image.imagelist');
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
        $images = Image::findOrFail($id);
        // $image_path = public_path("{{$images->path}}");
    
        // if (Image::exists($image_path)) {
        //     //File::delete($image_path);
        //     unlink($image_path);
        // }
        unlink(public_path("$images->path"));
        $images->delete();
        return redirect()->route('image.imagelist');
    }
}
