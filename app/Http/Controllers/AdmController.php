<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
{
    public function home(){
    	return view('admin.welcome');
    }

    public function data_Alumni_admin(){
    	$alumni = DB::table('tb_inputdata')->get();
	    return view('admin.data_alumni', ['alumni' => $alumni]);
    }

    public function grafikadmin() {
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
    	return view ('admin.grafik')
        ->with('jenis_kelamin', json_encode($array))
            ->with('wilayah_adat', json_encode($array2))
            ->with('asal_kabupaten', json_encode($array3))
            ->with('suku', json_encode($array4));
    }

    public function cetaklaporanadmin()
    {
        $data = DB::table('tb_inputdata')->get();
        return view('admin.cetaklaporanadmin', ['data'=>$data]);
    }

    public function get_province(){
               $kota=DB::table('tb_kota')->where('id_provinsi',$id)->get();
        return json_encode($kota);
    }


    public function formAlumniadmin() {
    	$provinsi = DB::table('tb_provinsi')->get();
        $kota = DB::table('tb_kota')->get();
        return view ('admin.formAlumni', ['provinsi' => $provinsi], ['aslkab' => $kota]);
    }

    public function insertdata(Request $request) {
    	$file = $request->file('foto');
         $provinsi2 = DB::table('tb_provinsi')->where('id',$request->province_id)->first();
		    $nama = $file->getClientOriginalName();
		    Storage::putFileAs('public/profil', $file, $nama);
			DB::table('tb_inputdata')->insert([
				'nama' => $request->nama_asli,
				'tempat' => $request->tempat,
		        'foto' => $nama,
				'tanggal_lahir' => $request->tanggal_lahir,
				'alamat' => $request->alamat_lgkp,
		        'jenis_kelamin' => $request->gender,
		        'asal_kabupaten' => $request->aslkab,
		        'agama' => $request->agama,
		        'suku' => $request->suku,
		        'wilayah_adat' => $request->wilayah_adat,
		        'email' => $request->email,
		        'telpon' => $request->phone,
		        'nama_lembaga' => $request->nama_lembaga,
		        'jenis' => $request->pekerjaan,
		        'tahun_masuk' => $request->tahun_msk,
		        'tahun_lulus' => $request->tahun_lls,
		        'jenjang_studi' => $request->jenjang,
		        'alamat_lembaga' => $request->alamat_lembaga,
		        'provinsi' => $provinsi2->provinsi,
		        'kabupaten' => $request->kota,
		        'jenis_pekerjaan' => $request->jenis_pekerjaan,
		        'jabatan' => $request->jabatan,
		        'nama_perusahaan' => $request->nama_perusahaan,
		        'alamat_perusahaan' => $request->alamat_perusahaan,
		        'nama_kegiatan' => $request->nama_kegiatan,
		        'tahun_kegiatan' => $request->tahun_kegiatan,
		        'tempat_kegiatan' => $request->tempat_kegiatan,
			]);
			return redirect('/data_Alumni_admin');
 
    }

    public function editalumni_admin($id){
    	$data = DB::table('tb_inputdata')->where('id',$id)->first();
        $provinsi = DB::table('tb_provinsi')->get();
    	return view('admin.editalumni_admin', ['data' => $data],['provinsi' => $provinsi]);
    }

    public function update(Request $request){
        $file = $request->file('file');
            $nama = $file->getClientOriginalName();
            Storage::putFileAs('public/profil', $file, $nama);
        DB::table('tb_inputdata')->where('id',$request->id)->update([
        	'nama' => $request->nama_asli,
            'tempat' => $request->tempat,
            'foto' => $nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat_lgkp,
            'jenis_kelamin' => $request->gender,
            'asal_kabupaten' => $request->aslkab,
            'agama' => $request->agama,
            'suku' => $request->suku,
            'wilayah_adat' => $request->wilayah_adat,
            'email' => $request->email,
            'telpon' => $request->phone,
            'nama_lembaga' => $request->nama_lembaga,
            'jenis' => $request->pekerjaan,
            'tahun_masuk' => $request->tahun_msk,
            'tahun_lulus' => $request->tahun_lls,
            'jenjang_studi' => $request->jenjang,
            'alamat_lembaga' => $request->alamat_lembaga,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kota,
            'jenis_pekerjaan' => $request->jenis_pekerjaan,
            'jabatan' => $request->jabatan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'nama_kegiatan' => $request->nama_kegiatan,
            'tahun_kegiatan' => $request->tahun_kegiatan,
            'tempat_kegiatan' => $request->tempat_kegiatan,
    ]);
    return redirect('/data_Alumni_admin');
    }

    public function deletedata($id) {
        DB::table('tb_inputdata')->where('id', $id)->delete();
        return redirect('/data_Alumni_admin');
    } 

    public function cetakpdf() {
        $data = DB::table('tb_inputdata')->get();
        $pdf = PDF::loadview('user_pdf',['data'=>$data]);
        return $pdf->download('laporan_user_pdf');
    }

    public function cetakxlsx() {
        $nama_file = 'laporan_user.xlsx';
        return Excel::download(new UserExport, $nama_file);
    }
}
