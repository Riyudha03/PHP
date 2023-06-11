<?php namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('warning', 'Login terlebih dahulu!');
        }

        // Ambil data buku dari database
        $bukuModel = new BukuModel();
        $data['buku'] = $bukuModel->findAll();

        // Tampilkan view
        return view('buku/index', $data);
    }

    // Metode tambah buku
    public function create()
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('warning', 'Login terlebih dahulu!');
        }

        // Tampilkan form tambah buku
        return view('buku/create');
    }

    // Metode simpan buku
    public function store()
    {
        // Validasi input
        $validationRules = [
            'judul'        => 'required',
            'penulis'      => 'required',
            'penerbit'     => 'required',
            'tahun_terbit' => 'required|greater_than[1800]|less_than[2024]',
        ];
        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data buku ke database
        $bukuModel = new BukuModel();
        $bukuModel->save([
            'judul'        => $this->request->getPost('judul'),
            'penulis'      => $this->request->getPost('penulis'),
            'penerbit'     => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
        ]);

        // Redirect ke halaman daftar buku
        return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan!');
    }

    // Metode hapus buku
    public function delete($id)
    {
        // Cek apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('warning', 'Login terlebih dahulu!');
        }

        // Hapus buku dari database
        $bukuModel = new BukuModel();
        $bukuModel->delete($id);

        // Redirect ke halaman daftar buku
        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus!');
    }
}
