<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MahasiswaModel;

class Dashboard extends Component
{
    public function render()
    {
        // Menghitung total semua mahasiswa
        $total_semua_mahasiswa = MahasiswaModel::count();

        // Menghitung total mahasiswa yang statusnya aktif
        $total_mahasiswa_aktif = MahasiswaModel::where('status', '=', 'aktif')->count();

        // Menghitung total mahasiswa yang statusnya tidak aktif
        $total_mahasiswa_tidak_aktif = MahasiswaModel::where('status', '=', 'tidak aktif')->count();

        // Mengembalikan tampilan livewire.dashboard dengan data yang diperlukan
        return view(
            'livewire.dashboard',
            [
                'total_semua_mahasiswa' => $total_semua_mahasiswa,
                'total_mahasiswa_aktif' => $total_mahasiswa_aktif,
                'total_mahasiswa_tidak_aktif' => $total_mahasiswa_tidak_aktif
            ]
        );
    }
}
