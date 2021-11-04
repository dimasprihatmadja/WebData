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
		$data = DB::table('tb_inputdata')
		->select(
			DB::raw('jenis_kelamin as jenis_kelamin'),
			DB::raw('count(*) as number')
		)
			->groupBy('jenis_kelamin')
			->get();
		$array[] = ['Jenis_kelamin', 'Number'];
		foreach ($data as $key => $value) {
			$array[++$key] = [$value->jenis_kelamin, $value->number];
		}
		//wil adat
		$data2 = DB::table('tb_inputdata')
		->select(
			DB::raw('wilayah_adat as wilayah_adat'),
			DB::raw('count(*) as number2')
		)
			->groupBy('wilayah_adat')
			->get();
		$array2[] = ['Wilayah_adat', 'Jumlah'];
		foreach ($data2 as $key2 => $value2) {
			$array2[++$key2] = [$value2->wilayah_adat, $value2->number2];
		}
		//ASAL KABUPATEN
		$data3 = DB::table('tb_inputdata')
		->select(
			DB::raw('asal_kabupaten as asal_kabupaten'),
			DB::raw('count(*) as number3')
		)
			->groupBy('asal_kabupaten')
			->get();
		$array3[] = ['Asal_kabupaten', 'Jumlah'];
		foreach ($data3 as $key3 => $value3) {
			$array3[++$key3] = [$value3->asal_kabupaten, $value3->number3];
		}
		//suku
		$data4 = DB::table('tb_inputdata')
		->select(
			DB::raw('suku as suku'),
			DB::raw('count(*) as number4')
		)
			->groupBy('suku')
			->get();
		$array4[] = ['Suku', 'Jumlah'];
		foreach ($data4 as $key4 => $value4) {
			$array4[++$key4] = [$value4->suku, $value4->number4];
		}
		return view('grafikdepan')
		->with('jenis_kelamin', json_encode($array))
			->with('wilayah_adat', json_encode($array2))
			->with('asal_kabupaten', json_encode($array3))
			->with('suku', json_encode($array4));
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

}
