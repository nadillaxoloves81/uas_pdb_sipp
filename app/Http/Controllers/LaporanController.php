<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Nagari;
use Illuminate\Support\Carbon;

class LaporanController extends Controller
{
    public function pendudukProduktif()
    {
        $tgl_sekarang = date('Y-m-d');
        $tgl1 = date('Y-m-d', strtotime('-15 years', strtotime($tgl_sekarang)));
        $tgl2 = date('Y-m-d', strtotime('-64 years', strtotime($tgl1)));

        $pendudukProduktifs = Penduduk::whereBetween('tanggal_lahir', [$tgl2, $tgl1])->orderBy('tanggal_lahir')->get();

        return view('laporan.pendudukProduktif', compact('pendudukProduktifs'));
    }

    public function cetakPendudukProduktif()
    {
        $tgl_sekarang = date('Y-m-d');
        $tgl1 = date('Y-m-d', strtotime('-15 years', strtotime($tgl_sekarang)));
        $tgl2 = date('Y-m-d', strtotime('-64 years', strtotime($tgl1)));

        $pendudukProduktifs = Penduduk::whereBetween('tanggal_lahir', [$tgl2, $tgl1])->orderBy('tanggal_lahir')->get();

        return view('laporan.cetakPendudukProduktif', compact('pendudukProduktifs'));
    }

    public function pendudukLevelPendidikan()
    {
        $jumlahPenduduks = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->join('level_pendidikan', 'level_pendidikan.id', '=', 'penduduk.level_pendidikan_id')
            ->selectRaw('count(penduduk.id) as total')
            ->where('level_pendidikan.nama', '=', 'Tidak Sekolah')
            ->orWhere('level_pendidikan.nama', '=', 'SD')
            ->orWhere('level_pendidikan.nama', '=', 'SMP/SLTP')
            ->groupBy('nagari.id')
            ->get();

        $total = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->join('level_pendidikan', 'level_pendidikan.id', '=', 'penduduk.level_pendidikan_id')
            ->selectRaw('count(penduduk.id) as total')
            ->where('level_pendidikan.nama', '=', 'Tidak Sekolah')
            ->orWhere('level_pendidikan.nama', '=', 'SD')
            ->orWhere('level_pendidikan.nama', '=', 'SMP/SLTP')
            ->count();

        return view('laporan.pendudukPendidikan', compact('jumlahPenduduks'), compact('total'));
    }

    public function cetakPendudukLevelPendidikan()
    {
        $jumlahPenduduks = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->join('level_pendidikan', 'level_pendidikan.id', '=', 'penduduk.level_pendidikan_id')
            ->selectRaw('count(penduduk.id) as total')
            ->where('level_pendidikan.nama', '=', 'Tidak Sekolah')
            ->orWhere('level_pendidikan.nama', '=', 'SD')
            ->orWhere('level_pendidikan.nama', '=', 'SMP/SLTP')
            ->groupBy('nagari.id')
            ->get();

        $total = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->join('level_pendidikan', 'level_pendidikan.id', '=', 'penduduk.level_pendidikan_id')
            ->selectRaw('count(penduduk.id) as total')
            ->where('level_pendidikan.nama', '=', 'Tidak Sekolah')
            ->orWhere('level_pendidikan.nama', '=', 'SD')
            ->orWhere('level_pendidikan.nama', '=', 'SMP/SLTP')
            ->count();

        return view('laporan.cetakPendudukPendidikan', compact('jumlahPenduduks'), compact('total'));
    }

    public function pendudukNagari()
    {
        $nagaris = Nagari::orderBy('nama')->get();
        $pendudukNagaris = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama as nagari', 'penduduk.nama', 'penduduk.nik', 'penduduk.jenis_kelamin')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id');

        $i = 0;
        foreach ($nagaris as $nagari) {
            $i++;
            $pendudukNagaris->orWhere('nagari.id', '=', $i);
        }

        $results = $pendudukNagaris->get();

        return view('laporan.pendudukNagari', compact('results'), compact('nagaris'));
    }

    public function cetakPendudukNagari()
    {
        $nagaris = Nagari::orderBy('nama')->get();
        $pendudukNagaris = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama as nagari', 'penduduk.nama', 'penduduk.nik', 'penduduk.jenis_kelamin')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id');

        $i = 0;
        foreach ($nagaris as $nagari) {
            $i++;
            $pendudukNagaris->orWhere('nagari.id', '=', $i);
        }

        $results = $pendudukNagaris->get();

        return view('laporan.cetakPendudukNagari', compact('results'), compact('nagaris'));
    }

    public function pendudukPerNagari(Request $request)
    {
        $namaNagari = Nagari::findOrFail($request->nagari);
        $nagaris = Nagari::orderBy('nama')->get();
        $results = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama as nagari', 'penduduk.nama', 'penduduk.nik', 'penduduk.jenis_kelamin')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->where('nagari.id', '=', $request->nagari)
            ->get();

        return view('laporan.pendudukPerNagari', [
            'results' => $results,
            'nagaris' => $nagaris,
            'namaNagari' => $namaNagari
        ]);
    }

    public function cetakPendudukPerNagari($id)
    {
        $namaNagari = Nagari::findOrFail($id);
        $nagaris = Nagari::orderBy('nama')->get();
        $results = Nagari::join('jorong', 'jorong.nagari_id', '=', 'nagari.id')
            ->select('nagari.nama as nagari', 'penduduk.nama', 'penduduk.nik', 'penduduk.jenis_kelamin')
            ->join('kartu_keluarga', 'kartu_keluarga.jorong_id', '=', 'jorong.id')
            ->join('penduduk', 'penduduk.kartu_keluarga_id', '=', 'kartu_keluarga.id')
            ->where('nagari.id', '=', $id)
            ->get();

        return view('laporan.cetakPendudukPerNagari', [
            'results' => $results,
            'nagaris' => $nagaris,
            'namaNagari' => $namaNagari
        ]);
    }
}