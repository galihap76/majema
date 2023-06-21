<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MahasiswaModel;

class Dashboard extends Component
{
    public function render()
    {
        $total_semua_mahasiswa = MahasiswaModel::count();
        $total_mahasiswa_aktif = MahasiswaModel::where('status', '=', 'aktif')->count();
        $total_mahasiswa_tidak_aktif = MahasiswaModel::where('status', '=', 'tidak aktif')->count();

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
