<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreMataKuliahRequest;
use App\Http\Requests\UpdateMataKuliahRequest;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index () {
        return view ('course.index', [
            'dataMataKuliah' => Matakuliah::all()
        ]);
    }

    public function create (Matakuliah $matakuliah, Request $requestMatakuliah) {
        $data = $requestMatakuliah -> all();
        $matakuliah->create($data);
        return redirect('/matakuliah');
    } 

    public function delete(Matakuliah $matakuliah){
        $matakuliah->delete();
        return back();
    }
}
