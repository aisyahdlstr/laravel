<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Matkul;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = DB::table('mahasiswas')
        ->join('prodis', 'mahasiswas.prodi_id', '=', 'prodis.id')
        ->join('dosens', 'mahasiswas.dosen_id', '=', 'dosens.id')
        ->join('matkuls', 'mahasiswas.matkul_id', '=', 'matkuls.id')
        ->select('mahasiswas.nim','prodis.nama_prodi', 'dosens.nama_dosen','matkuls.nama_matkul', 'mahasiswas.nama_mhs', 'mahasiswas.tgl_lahir', 'mahasiswas.alamat_mhs')
        ->get();



        return view('pages.mahasiswa.index',[
            'mahasiswas' => $mahasiswas,
            'title' => 'Mahasiswa',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataProdi = Prodi::all();
        $dataMatkul = Matkul::all();
        $dataDosen = Dosen::all();

        return view('pages.mahasiswa.create',[
            'prodis' => $dataProdi,
            'matkuls'=> $dataMatkul,
            'dosens' => $dataDosen,
            'title' => 'Tambah Data Mahasiswa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // ngambil data nim untuk di random
        $kode = '220390';
        $var = str_split('0123456789');
        $randomvar='';
        foreach (array_rand($var, 4) as $v) {
          $randomvar .= $var[$v];
        }
        $code =  $randomvar;
        $hasil = "$kode$code";

        // return $hasil;

        $data['nim'] = $hasil;

        Mahasiswa::create($data);
        // return "sukses";
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $mahasiswa = Mahasiswa::where('nim',$nim)->first();
        return view('pages.mahasiswa.edit',[
            'title' => 'Edit Product',
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $data = $request->all();
        $mahasiswa = Mahasiswa::where('nim', $nim)->get();

        $mahasiswa->update($data);
        return redirect()->route(('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        // Mahasiswa::findOrFail($nim)->delete();
        DB::table('mahasiswas')->where('nim', $nim)->delete();
        return redirect()->back();
    }
}
