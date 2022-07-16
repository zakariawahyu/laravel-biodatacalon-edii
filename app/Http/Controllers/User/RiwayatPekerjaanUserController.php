<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class RiwayatPekerjaanUserController extends Controller
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

        $pekerjaan = DB::table('riwayat_pekerjaan')
                ->join('users', 'riwayat_pekerjaan.users_id','=','users.id')
                ->select('users.*', 'riwayat_pekerjaan.*')
                ->where('riwayat_pekerjaan.users_id', '=', session('id'))
                ->get();

        return view('user.riwayatpekerjaan.index', compact('pekerjaan', 'users'));
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
        DB::table('riwayat_pekerjaan')->insert([
          'nama_perusahaan' => $request->nama_perusahaan,
          'users_id' => session('id'),
          'posisi_terakhir' => $request->posisi_terakhir,
          'pendapatan_terakhir' => $request->pendapatan_terakhir,
          'tahun_riwayat_pekerjaan' => $request->tahun,
        
          
    ]);
        return redirect()->route('user.riwayatpekerjaan.index');
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
