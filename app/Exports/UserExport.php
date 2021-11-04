<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use DB;

class UserExport implements FromView
{
    public function view(): View
    {
    	$data = DB::table('tb_inputdata')->get();
        return view('user_excel', [
            'data' => $data
        ]);
    }
}