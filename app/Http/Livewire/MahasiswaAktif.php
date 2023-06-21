<?php

namespace App\Http\Livewire;

use App\Models\MahasiswaModel;
use Livewire\WithPagination;
use Livewire\Component;

class MahasiswaAktif extends Component
{
    use WithPagination;

    // Theme untuk bootstrap pagination
    protected $paginationTheme = 'bootstrap';

    // Init search livewire laravel
    public $search = '';

    public function render()
    {
        // Mengambil semua data mahasiswa yang hanya aktif dan pencarian berdasarkan nama, jenis kelamin, jurusan, status
        $data_mahasiswa_aktif = MahasiswaModel::where('status', 'aktif')
            ->where(function ($query) {
                $query->orWhere('nama', 'like', '%' . $this->search . '%')
                    ->orWhere('jenis_kelamin', 'like', '%' . $this->search . '%')
                    ->orWhere('jurusan', 'like', '%' . $this->search . '%')
                    ->orWhere('status', 'like', '%' . $this->search . '%');
            })
            ->paginate(5);

        return view('livewire.mahasiswa-aktif', ['mahasiswa_aktif' => $data_mahasiswa_aktif]);
    }
}
