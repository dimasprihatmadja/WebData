<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function index()
    {
        //gender
        // $data = DB::table('tb_inputdata')
        // ->select(
        //     DB::raw('jenis_kelamin as jenis_kelamin'),
        //     DB::raw('count(*) as number')
        // )
        //     ->groupBy('jenis_kelamin')
        //     ->get();
        // $array[] = ['Jenis_kelamin', 'Number'];
        // foreach ($data as $key => $value) {
        //     $array[++$key] = [$value->jenis_kelamin, $value->number];
        // }

        return view('grafikdepan');
        // ->with('jenis_kelamin', json_encode($array));
    }

    public function login()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $username = $request->get('email');
        $pass = $request->get('password');

        $check = DB::table('tb_user')->where('email', $username)->count();
        if ($check == null) {
            //return back();
            return view('login');
        } else {
            $data = DB::table('tb_user')->where('email', $username)->first();
            if (Hash::check($pass, $data->password)) {
                if ($data->role == 'superadmin') {
                    $request->session()->put("nama", $data->username);
                    $request->session()->put("role", $data->role);
                    return redirect('/superadmin');
                } elseif ($data->role == 'admin') {
                    $request->session()->put("nama", $data->username);
                    $request->session()->put("role", $data->role);
                    return redirect('/home');
                }
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function tabellaporan()
    {
        return view('tabellaporan');
    }

    public function usergrafik()
    {
        return view('usergrafik');
    }
}
