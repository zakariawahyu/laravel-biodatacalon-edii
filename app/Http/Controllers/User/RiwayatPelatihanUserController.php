<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class RiwayatPelatihanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
                ->select('users.*')
                ->where('users.id', '=', session('id'))
                ->first();

        $pelatihan = DB::table('riwayat_pelatihan')
                ->join('users', 'riwayat_pelatihan.users_id','=','users.id')
                ->select('riwayat_pelatihan.*')
                ->where('riwayat_pelatihan.users_id', '=', session('id'))
                ->get();

        return view('user.riwayatpelatihan.index', compact('pelatihan', 'users'));
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
        DB::table('riwayat_pelatihan')->insert([
          'nama_pelatihan' => $request->nama_pelatihan,
          'users_id' => session('id'),
          'sertifikat' => $request->sertifikat,
          'tahun_riwayat_pelatihan' => $request->tahun_pelatihan
          
    ]);
        return redirect()->route('user.riwayatpelatihan.index');
    
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
