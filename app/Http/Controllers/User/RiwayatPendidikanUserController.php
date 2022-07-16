<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class RiwayatPendidikanUserController extends Controller
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

        $pendidikan = DB::table('riwayat_pendidikan')
                ->join('users', 'riwayat_pendidikan.users_id','=','users.id')
                ->select('users.*', 'riwayat_pendidikan.*')
                ->where('users.id', '=', session('id'))
                ->get();

        return view('user.riwayatpendidikan.index', compact('pendidikan', 'users'));
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
        DB::table('riwayat_pendidikan')->insert([
          'jenjang_pend_terakhir' => $request->jenjang_pendidikan,
          'users_id' => session('id'),
          'nama_instansi' => $request->nama_institusi,
          'jurusan' => $request->jurusan,
          'tahun_lulus' => $request->tahun_lulus,
          'ipk' => $request->ipk
          
    ]);
        return redirect()->route('user.riwayatpendidikan.index');
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
