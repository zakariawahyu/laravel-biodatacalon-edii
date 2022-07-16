<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
    return view('login', []);
  }

      public function register() {
    return view('register', []);
  }

  public function proses_register(Request $request){
    DB::table('users')->insert([
          'email' => $request->email,
          'username' => $request->username,
          'password' => bcrypt($request->pass),
          'role' => 'user'
    ]);

     return redirect('login');
  }

  public function proses_login(Request $request) {
    $username = $request->username;
    $password = $request->password;

    $login = Auth::attempt(['username' => $username, 'password' => $password]);

    if ($login) {
      $request->session()->put('role', Auth::user()->role);
      $request->session()->put('id', Auth::id());

      $level = session('role');

    if($level == 'admin') {
      $request->session()->put('role', Auth::user()->role);
      $request->session()->put('id', Auth::id());

      return redirect('admin');
      }
      elseif($level == 'user') {
        $request->session()->put('role', Auth::user()->role);
        $request->session()->put('id', Auth::id());

        return redirect('user');
      }
    }
    else {
      return redirect('login');
    }
  }

  public function logout(Request $request) {
    $request->session()->flush();
    return redirect('login');
  }
    public function index()
    {
        //
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
