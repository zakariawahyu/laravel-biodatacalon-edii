<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class ProfilUserController extends Controller
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

        return view('user.profil.index', compact('users'));
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
        //
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
        User::where('id', $id)->update([
            'posisi_dilamar' => $request->posisidilamar,
            'nama_lengkap' => $request->name,
            'no_ktp' => $request->noktp,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jeniskelamin,
            'agama' => $request->agama,
            'gol_darah' => $request->gol_darah,
            'status' => $request->status,
            'alamat_ktp' => $request->alamat_ktp,
            'alamat_tinggal' => $request->alamat_tinggal,
            'no_telp' => $request->no_telp,
            'orang_terdekat' =>$request->orang_terdekat,
            'skill' => $request->skill,
            'bersedia_penempatan' => $request->bersedia_penempatan,
            'penghasilan_diharapkan' => $request->gaji
        ]);

        return redirect('user/profil');
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
