<?php

namespace App\Http\Controllers;

use App\Exports\SumberDanaExport;
use App\Models\Pendanaan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PendanaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pendanaan::paginate('20');
        // dd($data);
        return view('admin.page.pendanaan.index', compact('data'));
    }
    public function admprodiIndex()
    {
        $data = Pendanaan::paginate('20');
        // dd($data);
        return view('admprodi.page.pendanaan.index', compact('data'));
    }
    public function kaprodiIndex()
    {
        $data = Pendanaan::paginate('20');

        return view('kaprodi.page.pendanaan.index', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'admprodi.page.pendanaan.form',
            [
                'url' => 'simpan-pendanaan',
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Pendanaan::insert([
            'id' => $request->id,
            'sumber_dana' => $request->sumber_dana,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
            'keterangan' => $request->keterangan,
            'id_pt_unit' => $request->id_pt_unit,

        ]);

        if ($input) {
            return redirect('pendanaan')->with('pesan', 'Data berhasil disimpan');
        } else {
            echo "<script>
            alert('Data gagal diinput, masukkan kebali data dengan benar');
            window.location = '/admprodi.page.pendanaan.index';
            </script>";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editData'] = Pendanaan::find($id);
        return view('admprodi.page.pendanaan.form_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dana = Pendanaan::find($id);
        $update = $dana->update([
            'sumber_dana' => $request->sumber_dana,
            'jumlah' => $request->jumlah,
            'bukti' => $request->bukti,
            'keterangan' => $request->keterangan,
            'id_pt_unit' => $request->id_pt_unit,
        ]);
        if ($update) {
            return redirect('pendanaan')->with('pesan', 'Data berhasil disimpan');
        } else {
            echo "<script>
                alert('Data gagal diinput, masukkan kembali data dengan benar');
                window.location = '/admprodi.page.pendanaan.index';
                </script>";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dana = Pendanaan::findOrFail($id); // Ganti dengan model dan nama tabel yang sesuai
        $dana->delete();

        return redirect()->route('pendanaan')->with('success', 'Data Pendanaan berhasil dihapus');
    }

    public function download()
    {
        return Excel::download(new SumberDanaExport, 'Sumber Dana Prodi.xlsx');
    }
}
