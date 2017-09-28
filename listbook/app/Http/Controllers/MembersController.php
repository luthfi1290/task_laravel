<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book,App\User,Auth;
use Session;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cek = Book::where('author_id',Auth::user()->id)->get();
        return view('members.index',compact('cek'));
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
    public function store(Request $request)
    {
        $cek = Book::where('author_id',Auth::user()->id)->get();
        if( count($cek) <= 1){
        $file = $request->file('cover');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '-' . $request->title . '.' . $extension;
        $request->file('cover')->storeAs('public/cover',$filename);

        $books = new Book();
        $books->title = $request->title;
        $books->description = $request->description;
        $books->author_id = Auth::user()->id;
        $books->cover = $filename;
        $books->save();
        }

        return redirect()->route('home',compact('cek'));
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
