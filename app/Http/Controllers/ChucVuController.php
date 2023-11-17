<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function index()
    {
        return view('chuc_vu');
    }

    public function getData()
    {
        $data   = ChucVu::select('id', 'ten_chuc_vu', 'tinh_trang',)
                         ->get(); // get là ra 1 danh sách
        return response()->json([
            'chuc_vu'  =>  $data,
        ]);
    }
}
