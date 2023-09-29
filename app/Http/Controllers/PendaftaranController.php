<?php

namespace App\Http\Controllers;

use App\Models\MasterPasien;
use App\Models\MasterPelayanan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use App\Http\Requests\UserStore;
use PDF;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::with('pasien', 'pelayanan')->get();
        return view('users.index', compact('data'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(UserStore $request)
    {
        $input = $request->validated();

        $pasien = MasterPasien::create([
            'nama_pasien' => $input['nama_pasien'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'tanggal_lahir' => $input['tanggal_lahir'],
        ]);

        $pelayanan = MasterPelayanan::create([
            'jenis_pelayanan' => $input['jenis_pelayanan'],
            'spesialis' => $input['spesialis'],
            'jenis_pembayaran' => $input['jenis_pembayaran'],
        ]);

        $pendaftaran = Pendaftaran::create([
            'nama_pasien' => $input['nama_pasien'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'jenis_pelayanan' => $input['jenis_pelayanan'],
            'spesialis' => $input['spesialis'],
            'jenis_pembayaran' => $input['jenis_pembayaran'],
        ]);

        return redirect()->route('user.index')->withSuccess('Pendaftaran Sukses');
    }
    public function processForm(Request $request)
    {
        $nama_pasien = $request->input('nama_pasien');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $jenis_pelayanan = $request->input('jenis_pelayanan');
        $jenis_pembayaran = $request->input('jenis_pembayaran');
        return view('display', compact('nama_pasien', 'jenis_kelamin', 'tanggal_lahir', 'jenis_pelayanan', 'jenis_pembayaran'));
    }


    // public function generatePDF()
    // {
    //     $data = Pendaftaran::with('pasien', 'pelayanan')->get();

    //     $pdf = PDF::loadView('pdf.tabel_pdf', compact('data'));

    //     return $pdf->stream('tabel_data.pdf');
    // }

    public function edit($id)
    {
        $data = Pendaftaran::find($id);
        return view('users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_pelayanan' => 'required',
            'spesialis' => 'required',
            'jenis_pembayaran' => 'required',
        ]);

        $input = $request->all();

        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->update([
            'nama_pasien' => $input['nama_pasien'],
            'jenis_kelamin' => $input['jenis_kelamin'],
            'tanggal_lahir' => $input['tanggal_lahir'],
            'jenis_pelayanan' => $input['jenis_pelayanan'],
            'spesialis' => $input['spesialis'],
            'jenis_pembayaran' => $input['jenis_pembayaran'],
        ]);

        return redirect()->route('user.index')->withSuccess('Data berhasil diupdate');
    }


    public function destroy($id)
    {
        Pendaftaran::destroy($id);

        return redirect()->route('user.index')->withSuccess('Data berhasil dihapus');
    }
}
