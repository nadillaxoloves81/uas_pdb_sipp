<?php

namespace App\Http\Controllers;
use App\Models\KartuKeluarga;
use App\Models\Jorong;
use App\Models\Penduduk;
use App\Models\LevelPendidikan;
use App\Models\Pekerjaan;
use App\Models\Kewarganegaraan;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu_keluargas = KartuKeluarga::with('jorong')->get();

        // dd($kartu_keluargas);
        return view('kartu_keluarga.index', ['kartu_keluargas' => $kartu_keluargas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jorongs = Jorong::orderBy('nama')->get();

        return view('kartu_keluarga.create', compact('jorongs'));
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
            'no' => 'required|size:16|unique:kartu_keluarga,no',
            'jorong_id' => 'required',
            'tanggal_pencatatan' => 'required',
        ]);

        KartuKeluarga::create($validateData);
        Alert::success('Berhasil', "Data Kartu Keluarga $request->no berhasil disimpan");
        return redirect()->route('kartuKeluarga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penduduks = Penduduk::where('kartu_keluarga_id', $id)->get();
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        return view('kartu_keluarga.show', compact('penduduks'), compact('kartu_keluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jorongs = Jorong::orderBy('nama')->get();
        $kartu_keluarga = KartuKeluarga::findOrFail($id);

        return view('kartu_keluarga.edit', [
            'kartu_keluarga' => $kartu_keluarga,
            'jorongs' => $jorongs
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
            'no' => 'required',
            'jorong_id' => 'required',
            'tanggal_pencatatan' => 'required',
        ]);
        
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        $kartu_keluarga->update($validateData);
        Alert::success('Berhasil', "Kartu Keluarga $request->no berhasil di update");
        return redirect()->route('kartuKeluarga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        $kartu_keluarga->delete();
        Alert::success('Berhasil', "Kartu Keluarga $kartu_keluarga->no berhasil di hapus");
        return redirect()->route('kartuKeluarga.index');
        
    }

    public function createAnggotaKeluarga($id)
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no')->get();
        $level_pendidikans = LevelPendidikan::orderBy('nama')->get();
        $pekerjaans = Pekerjaan::orderBy('nama')->get();
        $kewarganegaraans = Kewarganegaraan::orderBy('nama')->get();
        $kartu_keluarga_id = KartuKeluarga::findOrFail($id);
        // var_dump($kartu_keluarga_id->id);
        
        return view('kartu_keluarga.create-anggota', [
            'kartu_keluargas' => $kartu_keluargas,
            'level_pendidikans' => $level_pendidikans,
            'pekerjaans' => $pekerjaans,
            'kewarganegaraans' => $kewarganegaraans,
            'kartu_keluarga_id' => $kartu_keluarga_id,
        ]);
    }

    public function storeAnggotaKeluarga(Request $request)
    {
        $validateData = $request->validate([
            'kartu_keluarga_id' => 'required',
            'nama' => 'required',
            'nik' => 'required|size:16|unique:penduduk,nik',
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

        // var_dump($request);

        Penduduk::create($validateData);
        Alert::success('Berhasil', "Data penduduk bernama $request->nama berhasil disimpan");
        return redirect()->route('kartuKeluarga.show', ['id' => $request->kartu_keluarga_id]);
    }

    public function destroyAnggotaKeluarga($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        Alert::success('Berhasil', "Penduduk bernama $penduduk->nama berhasil di hapus");
        return redirect()->route('kartuKeluarga.show', ['id' => $penduduk->kartu_keluarga_id]);
    }
}
