<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = mahasiswa::where('nim', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('jurusan', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = mahasiswa::orderBy('nim', 'desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('kelamin', $request->kelamin);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('kelas', $request->kelas);
        Session::flash('status', $request->status);
    


        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            
            // 'foto' => 'required|mimes:jpeg.jpg.png.gif',
        ], [
            'nim.required' => 'NIM wajib diisi',
            'nim.numeric' => 'NIM wajib dalam angka',
            'nama.required' => 'Nama wajib diisi',
            'kelamin.required' => 'Harap isi form kelamin',
            'jurusan.required' => 'Jurusan wajib diisi',
            'kelas.required' => 'Harap isi form kelas',
            'status.required' => 'Status wajib diisi',

        ]);



        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'status' => $request->status,

        ];



        mahasiswa::create($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil menambahkan data');
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
        $data = mahasiswa::where('nim', $id)->first();
        return view('mahasiswa.edit')->with('data', $data);
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
        $request->validate([
            'nama' => 'required',
            'kelamin' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'status' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'kelamin.required' => 'Opsi kelamin harap diisi',
            'jurusan.required' => 'Opsi jurusan wajib diisi',
            'kelas.required' => 'Opsi kelas harap diisi',
            'status.required' => 'Opsi status wajib diisi',
        ]);
        

        $data = [
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'status' => $request->status,
        ];
        mahasiswa::where('nim', $id)->update($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mahasiswa::where('nim', $id)->delete();
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan delete data');
    }
}