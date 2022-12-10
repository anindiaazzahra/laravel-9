<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    // mendapatkan semua kategori
    public function getAllCategory()
    {
        $dataCategory = DB::select('select * from categories');
        // dd($dataCategory);
        return view('index', compact(['dataCategory']));
    }
}
