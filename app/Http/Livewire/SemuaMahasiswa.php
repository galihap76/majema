<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\MahasiswaModel;

class SemuaMahasiswa extends Component
{
    use WithPagination;

    // Public property id mahasiswa, nama, jenis kelamin, jurusan, status
    public $id_mahasiswa, $nama, $jenis_kelamin, $jurusan, $status;

    // Theme untuk bootstrap pagination
    protected $paginationTheme = 'bootstrap';

    // Init search livewire laravel
    public $search = '';

    // Method render() digunakan untuk menampilkan komponen dan mengembalikan view dengan data yang diperlukan
    public function render()
    {
        // Mengambil semua data mahasiswa dan pencarian berdasarkan nama, jenis kelamin, jurusan, status
        $data_mahasiswa = MahasiswaModel::where(function ($query) {
            $query->orWhere('nama', 'like', '%' . $this->search . '%')
                ->orWhere('jenis_kelamin', 'like', '%' . $this->search . '%')
                ->orWhere('jurusan', 'like', '%' . $this->search . '%')
                ->orWhere('status', 'like', '%' . $this->search . '%');
        })->paginate(5);

        // Mengembalikan view 'livewire.mahasiswa-component' dengan data data_mahasiswa
        return view('livewire.semua-mahasiswa', ['semua_mahasiswa' => $data_mahasiswa]);
    }

    // Method close() untuk membersihkan kolom inputan bidang nama, nim, jurusan, status jika menekan tombol cancel atau silang
    public function close()
    {
        $this->nama = null;
        $this->jenis_kelamin = null;
        $this->jurusan = null;
        $this->status = null;
    }

    // Method storeData() digunakan untuk menyimpan data mahasiswa baru ke dalam tabel
    public function storeData()
    {
        // Menyimpan data mahasiswa ke dalam tabel
        $insertTable = MahasiswaModel::create([
            'nama' => Str::lower($this->nama),
            'jenis_kelamin' => Str::lower($this->jenis_kelamin),
            'jurusan' => Str::lower($this->jurusan),
            'status' => Str::lower($this->status)
        ]);

        // Jika penyimpanan berhasil
        if ($insertTable) {

            // Menampilkan flash message store
            session()->flash('store', 'Data mahasiswa berhasil ditambahkan.');

            // Mengosongkan input nama, jenis kelamin, jurusan, status
            $this->nama = null;
            $this->jenis_kelamin = null;
            $this->jurusan = null;
            $this->status = null;

            // Menutup modal dengan menggunakan event browser
            $this->dispatchBrowserEvent('close-modal');
        }
    }

    // Method initEditData() digunakan untuk menginisialisasi data yang akan diubah
    public function initEditData($id_mahasiswa)
    {
        // Menginisialisasi data yang akan diubah
        $mahasiswa = MahasiswaModel::where('id_mahasiswa', $id_mahasiswa)->first();

        // Menetapkan nilai pada property id_mahasiswa, nama, jenis kelamin, jurusan, status
        $this->id_mahasiswa = $mahasiswa->id_mahasiswa; // -> Otomatis akan mempengaruhi where id_mahasiswa pada function editData() menggunakan livewire
        $this->nama = $mahasiswa->nama;
        $this->jurusan = $mahasiswa->jurusan;
        $this->jenis_kelamin = $mahasiswa->jenis_kelamin;
        $this->status = $mahasiswa->status;
    }

    // Method editData() digunakan untuk mengubah data mahasiswa
    public function editData()
    {
        // Mengambil data mahasiswa yang akan diubah
        $editMahasiswa = MahasiswaModel::where('id_mahasiswa', $this->id_mahasiswa)->first();

        // Jika data mahasiswa ditemukan
        if ($editMahasiswa) {

            // Mengubah nilai pada property nim, nama, dan jurusan
            $editMahasiswa->nama = Str::lower($this->nama);
            $editMahasiswa->jurusan = Str::lower($this->jurusan);
            $editMahasiswa->jenis_kelamin = Str::lower($this->jenis_kelamin);
            $editMahasiswa->status = Str::lower($this->status);

            // Jika perubahan berhasil disimpan
            if ($editMahasiswa->save()) {

                // Menampilkan flash message edit
                session()->flash('edit', 'Data mahasiswa berhasil diubah.');

                // Mengosongkan input nama, jenis kelamin, jurusan, status
                $this->nama = null;
                $this->jenis_kelamin = null;
                $this->jurusan = null;
                $this->status = null;

                // Menutup modal dengan menggunakan event browser
                $this->dispatchBrowserEvent('close-modal');
            }
        }
    }

    // Method initDeleteData() digunakan untuk menginisialisasi data yang akan dihapus
    public function initDeleteData($id_mahasiswa)
    {
        // Menginisialisasi data yang akan dihapus
        $mahasiswa = MahasiswaModel::where('id_mahasiswa', $id_mahasiswa)->first();

        // Menetapkan nilai pada property id_mahasiswa, nama, jenis kelamin, jurusan, status
        $this->id_mahasiswa = $mahasiswa->id_mahasiswa; // -> Otomatis akan mempengaruhi where id_mahasiswa pada function deleteData() menggunakan livewire
        $this->nama = $mahasiswa->nama;
        $this->jurusan = $mahasiswa->jurusan;
        $this->jenis_kelamin = $mahasiswa->jenis_kelamin;
        $this->status = $mahasiswa->status;
    }

    // Method deleteMahasiswa() digunakan untuk menghapus data mahasiswa
    public function deleteMahasiswa()
    {
        // Mengambil data mahasiswa yang akan dihapus
        $deleteMahasiswa = MahasiswaModel::where('id_mahasiswa', $this->id_mahasiswa)->first();

        // Jika penghapusan berhasil
        if ($deleteMahasiswa->delete()) {

            // Mengosongkan input nama, jenis kelamin, jurusan, status
            $this->nama = null;
            $this->jenis_kelamin = null;
            $this->jurusan = null;
            $this->status = null;

            // Menampilkan flash message delete
            session()->flash('delete', 'Data mahasiswa berhasil dihapus.');

            // Menutup modal dengan menggunakan event browser
            $this->dispatchBrowserEvent('close-modal');
        }
    }
}
