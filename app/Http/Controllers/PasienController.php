<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Obat;
use App\Models\periksa;
use App\Models\DetailPeriksa;

class PasienController extends Controller
{
    public function pasien()
    {

        $dokter = auth()->user();


        if ($dokter->role !== 'dokter') {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses sebagai dokter.');
        }


        $periksas = Periksa::with(['pasienModels.user', 'dokter'])
            ->where('id_dokter', $dokter->id)  // Mengambil pemeriksaan berdasarkan id dokter yang login
            ->get();

        return view('layouts.pemeriksaan', compact('periksas'));
    }

    public function edit($id)
    {

        $periksa = Periksa::with(['pasienModels.user', 'dokter', 'detailPeriksa.obat'])
            ->where('id_dokter', auth()->id())
            ->findOrFail($id);
        $obats = Obat::all();

        // Hitung total harga obat
        $biayaPeriksa = $periksa->biaya_periksa ?? 0;

        $totalHargaObat = 0;
        foreach ($periksa->detailPeriksa as $detail) {
            if ($detail->obat) {
                $totalHargaObat += $detail->obat->harga;
            }
        }


        $totalHarga = $biayaPeriksa + $totalHargaObat;

        // Siapkan array ID obat yang dipilih untuk pre-select di form
        $selectedObatIds = [];
        foreach ($periksa->detailPeriksa as $detail) {
            if ($detail->obat) {
                $selectedObatIds[] = $detail->obat->id;
            }
        }

        return view('layouts.edit_periksa', compact('periksa', 'obats', 'totalHarga', 'selectedObatIds'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'catatan' => 'required|string',
            'obat_ids' => 'required|array',
            'obat_ids.*' => 'exists:obats,id',
            'biaya_periksa' => 'required|numeric|min:0',
        ]);

        $periksa = Periksa::where('id_dokter', auth()->id())->findOrFail($id);

        // Hitung ulang total di server agar harga tidak bisa dipalsukan dari klien.
        $obats = Obat::whereIn('id', $request->obat_ids)->get();
        $totalHargaObat = $obats->sum('harga');
        $jumlahObat = $obats->count();
        $biayaPeriksa = (float) $request->biaya_periksa;

        DB::transaction(function () use ($periksa, $request, $obats, $totalHargaObat, $jumlahObat, $biayaPeriksa) {
            $periksa->update([
                'tgl_periksa'     => $request->tanggal,
                'catatan'         => $request->catatan,
                'biaya_periksa'   => $biayaPeriksa,
                'totalHarga'      => $biayaPeriksa + $totalHargaObat,
                'total_obat'      => $jumlahObat,
                'status'          => 'sudah diperiksa',
                'waktu_diperiksa' => now(),
            ]);

            // Hapus detail lama (agar tidak duplikat)
            $periksa->detailPeriksa()->delete();

            // Simpan ulang ke detail_periksas
            foreach ($obats as $obat) {
                DetailPeriksa::create([
                    'id_periksa' => $periksa->id,
                    'id_obat'    => $obat->id,
                    'jumlah'     => 1, // Bisa disesuaikan jika ada input jumlah
                    'subtotal'   => $obat->harga,
                ]);
            }
        });

        return redirect()->route('pasien.index')->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }




    public function show($id)
    {
        $periksa = periksa::with(['pasienModels.user', 'dokter', 'detailPeriksa'])->findOrFail($id);
        return view('layouts.periksa', compact('periksa'));
    }
}
