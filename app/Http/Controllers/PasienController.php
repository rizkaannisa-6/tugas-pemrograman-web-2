<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pasien.index', [
            'title' => 'Pasien',
            'pasiens' => Pasien::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create', ['title' => 'Create Pasien']);   ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'no_rekam_medis' => 'required|numeric|digits:6',
        'nama_pasien' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'no_telepon' => 'required|numeric|digits:12',
        'golongan_darah' => 'required',
    ],
    [
        'no_rekam_medis.required' => 'No Rekam Medis wajib diisi',
        'no_rekam_medis.numeric' => 'No Rekam Medis wajib berupa angka',
        'no_rekam_medis.digits' => 'No Rekam Medis harus memiliki 6 digit',
        'nama_pasien.required' => 'Nama Pasien wajib diisi',
        'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
        'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'no_telepon.required' => 'No Telepon wajib diisi',
        'no_telepon.numeric' => 'No Telepon wajib berupa angka',
        'no_telepon.digits' => 'No Telepon harus memiliki 12 digit',
        'golongan_darah.required' => 'Golongan Darah wajib diisi',
    ]);


    Pasien::create($validated);
    return to_route('pasien.index')->withSuccess('Data pasien berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
            return view('pasien.edit', [
            'title' => 'Edit Pasien',
            'pasien' => $pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $validated = $request->validate([
        'no_rekam_medis' => 'required|numeric|digits:6',
        'nama_pasien' => 'required',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'no_telepon' => 'required|numeric|digits:12',
        'golongan_darah' => 'required',
    ],
    [
        'no_rekam_medis.required' => 'No Rekam Medis wajib diisi',
        'no_rekam_medis.numeric' => 'No Rekam Medis wajib berupa angka',
        'no_rekam_medis.digits' => 'No Rekam Medis harus memiliki 6 digit',
        'nama_pasien.required' => 'Nama Pasien wajib diisi',
        'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
        'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi',
        'alamat.required' => 'Alamat wajib diisi',
        'no_telepon.required' => 'No Telepon wajib diisi',
        'no_telepon.numeric' => 'No Telepon wajib berupa angka',
        'no_telepon.digits' => 'No Telepon harus memiliki 12 digit',
        'golongan_darah.required' => 'Golongan Darah wajib diisi',
    ]);

    $pasien->update($validated);
    return to_route('pasien.index')->withSuccess('Data pasien berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return to_route('pasien.index')->withSuccess('Data pasien berhasil dihapus');
    }
}
