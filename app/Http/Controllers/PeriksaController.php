<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\daftar_poliModel;
use App\Models\periksa;

class PeriksaController extends Controller
{
    //
    public function index()
    {
        $pasien = auth()->user()->pasienModels;

        if (!$pasien) {
            return redirect('/dokter')->with('error', 'Akun ini belum memiliki data pasien.');
        }

        $pasienId = $pasien->id;
        $dokters = User::where('role', 'dokter')->get();
        $daftars = daftar_poliModel::all();
        $periksas = Periksa::with('dokter', 'pasienModels.user', 'daftarPoli.jadwal.poli')
            ->where('id_pasien', $pasienId)
            ->get();
        return view('layouts.list_dokter', compact('dokters', 'daftars', 'periksas'));
    }

    public function lihatDetailPeriksa($id)
    {
        $pasien = auth()->user()->pasienModels;

        if (!$pasien) {
            return redirect('/dokter')->with('error', 'Akun ini belum memiliki data pasien.');
        }

        $pasienId = $pasien->id;

        $periksa = periksa::with('dokter', 'pasienModels.user') // load user dari pasien
            ->where('id_pasien', $pasienId)
            ->findOrFail($id);

        return view('layouts.detail_periksa', compact('periksa'));
    }
}
