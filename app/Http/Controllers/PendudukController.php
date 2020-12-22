<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Models\KartuKeluarga;
use App\Models\Penduduk;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduks = Penduduk::all();
        return view('penduduk.index', compact('penduduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no')->get();
        $level_pendidikans = LevelPendidikan::orderBy('nama')->get();
        $pekerjaans = Pekerjaan::orderBy('nama')->get();
        $kewarganegaraans = Kewarganegaraan::orderBy('nama')->get();
        
        return view('penduduk.create', [
            'kartu_keluargas' => $kartu_keluargas,
            'level_pendidikans' => $level_pendidikans,
            'pekerjaans' => $pekerjaans,
            'kewarganegaraans' => $kewarganegaraans,
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
        $validateData = $request->validate([
            'kartu_keluarga_id' => 'required',
            'nama' => 'required',
            'nik' => 'required|size:16',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        Penduduk::create($validateData);
        Alert::success('Berhasil', "Data penduduk bernama $request->nama berhasil disimpan");
        return redirect()->route('penduduk.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        // dd($penduduk->nama);
        return view('penduduk.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no')->get();
        $level_pendidikans = LevelPendidikan::orderBy('nama')->get();
        $pekerjaans = Pekerjaan::orderBy('nama')->get();
        $kewarganegaraans = Kewarganegaraan::orderBy('nama')->get();
        $penduduk = Penduduk::findOrFail($id);
        $kartu_keluarga_id = KartuKeluarga::findOrFail($penduduk->kartu_keluarga_id);
        // var_dump($kartu_keluarga_id);
        
        return view('penduduk.edit', [
            'kartu_keluargas' => $kartu_keluargas,
            'level_pendidikans' => $level_pendidikans,
            'pekerjaans' => $pekerjaans,
            'kewarganegaraans' => $kewarganegaraans,
            'penduduk' => $penduduk,
            'kartu_keluarga_id' => $kartu_keluarga_id,
        ]);
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
        $validateData = $request->validate([
            'kartu_keluarga_id' => 'required',
            'nama' => 'required',
            'nik' => 'required|size:16',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'level_pendidikan_id' => 'required',
            'pekerjaan_id' => 'required',
            'status_pernikahan' => 'required',
            'status_keluarga' => 'required',
            'kewarganegaraan_id' => 'required',
            'ayah' => 'required',
            'ibu' => 'required',
        ]);

        $penduduk = Penduduk::findOrFail($id);
        $penduduk->update($validateData);
        Alert::success('Berhasil', "Data penduduk bernama $request->nama berhasil di update");
        return redirect()->route('penduduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        Alert::success('Berhasil', "Penduduk bernama $penduduk->nama berhasil di hapus");
        return redirect()->route('penduduk.index');
    }
}
