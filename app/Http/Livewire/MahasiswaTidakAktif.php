<?php

namespace App\Http\Livewire;

use App\Models\MahasiswaModel;
use Livewire\WithPagination;
use Livewire\Component;

class MahasiswaTidakAktif extends Component
{
    use WithPagination;

    // Theme untuk bootstrap pagination
    protected $paginationTheme = 'bootstrap';

    // Init search livewire laravel
    public $search = '';

    public function render()
    {
        // Mengambil semua data mahasiswa yang hanya tidak aktif dan pencarian berdasarkan nama, jenis kelamin, jurusan, status
        $data_mahasiswa_tidak_aktif = MahasiswaModel::where('status', 'tidak aktif')
            ->where(function ($query) {
                $query->orWhere('nama', 'like', '%' . $this->search . '%')
                    ->orWhere('jenis_kelamin', 'like', '%' . $this->search . '%')
                    ->orWhere('jurusan', 'like', '%' . $this->search . '%')
                    ->orWhere('status', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        return view('livewire.mahasiswa-tidak-aktif', ['mahasiswa_tidak_aktif' => $data_mahasiswa_tidak_aktif]);
    }
}
