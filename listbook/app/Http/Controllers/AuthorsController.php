<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthors;
use App\User,App\Role,Auth,DB;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //->whereNotIn('id',[Auth::user()->id])->paginate('10');
        $authors = User::with('roles')->whereNotIn('id',[Auth::user()->id])->paginate('10');
        // dd($authors);
        return view('authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthors $request)
    {
      $authors = User::create($request->all());

      $memberRole = Role::where('name','member')->first();
      $authors->attachRole($memberRole);

      return redirect()->route('authors.index');
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
        // $authors = User::find($id);
        $authors = User::join('role_user','users.id','=','role_user.user_id')->find($id);
        $roles = Role::all();
        return view('authors.edit',compact('roles','authors'));
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
        // User::find($id)->update($request->except('role'));
        $authors = User::find($id);
        $authors->name = $request->name;
        $authors->email = $request->email;
        $authors->save();

        if( $request->role == 1)
        {
          $memberRole = Role::where('name','member')->first();
          $adminRole = Role::where('name','admin')->first();
          $authors->detachRole($memberRole);
          $authors->attachRole($adminRole);
        }else {
          $memberRole = Role::where('name','member')->first();
          $adminRole = Role::where('name','admin')->first();
          $authors->attachRole($memberRole);
          $authors->detachRole($adminRole);
        }

        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect()->route('authors.index');
    }
}
