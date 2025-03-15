<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    { 
        // dd ($request->input('name'));
        $users = DB::table('users')
        ->when($request->input('name'), function($query, $name){
            return $query->where('name', 'like', '%'.$name.'%');
        })
        ->orderBy('name', 'desc')
        ->paginate(10);
       

         
          return view('pages.user.index' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
   
       */


   
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           return view('pages.user.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data berhasil di hapus');
    }
}




