<?php

namespace App\Http\Controllers;

use App\Models\UserGdrive;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserGdriveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $checker = UserGdrive::where('username',$request->username)->first();
        if ($checker === null || $checker === "") {
            return redirect('/')->with('stats', 'USERNAME ATAU PASSWORD SALAH');
            // dd("tidak terdaftar");
        } else {
            if ($checker->password === $request->password) {
                return redirect($checker->url);
            } else {
                return redirect('/')->with('stats', 'USERNAME ATAU PASSWORD SALAH');
                // dd("salah pass");
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(UserGdrive $userGdrive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserGdrive $userGdrive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserGdrive $userGdrive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserGdrive $userGdrive)
    {
        //
    }
}
