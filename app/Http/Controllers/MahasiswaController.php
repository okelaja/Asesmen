<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MahasiswaController extends Controller
{
    public $mahasiswa;
    public function __construct()
    {
        $this->mahasiswa = new Mahasiswa();
    }
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    public function create()
    {
        $data = Mahasiswa::all();
        return view('master.create',compact('data'));
    }

  
    public function store(Request $request)
    {
        $rules = [
            'kode' => 'required|max:20|min:3|unique:mahasiswa,kode',
            'umur' => 'required|max:4|',
            'nama' => 'required|max:20|min:3|unique:mahasiswa,nama',
            'alamat' => 'required|max:20|min:3|',
            'kota' => 'required|max:20|min:3|',
            'telepon' => 'required|max:20|min:3|unique:mahasiswa,telepon'

        ];
        
        $messages = [
            'required' => ':attribute gak boleh kosong maseeeh',
            'max' => ':attribute maximal 20',
            'min' => ':attribute maximal 3',
            'unique' => ':attribute sudah ada'
        ];
        

        $this->validate($request, $rules, $messages);

        $this->mahasiswa->kode = $request->kode;
        $this->mahasiswa->nama = $request->nama;
        $this->mahasiswa->umur = $request->umur;
        $this->mahasiswa->alamat = $request->alamat;
        $this->mahasiswa->kota = $request->kota;
        $this->mahasiswa->telepon = $request->telepon;
        
        $this->mahasiswa->save();

        Alert::success('Success', 'Data Sudah di tambahkan');
        return redirect()->route('mahasiswa');
    }


    public function show( $id)
    {
        $data = Mahasiswa::findorfail($id);
        return view('mahasiswa.show',compact('data'));
    }


    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('data'));   
    }

    public function update(Request $request, string $id)
    {
        $update = Mahasiswa::findorfail($id);
        
        $rules = [

            'kode' => 'required|max:20|min:3|unique:penerbit,kode',
            // 'umur' => 'required|max:4|',
            // 'nama' => 'required|max:20|min:3',
            // 'alamat' => 'required|max:20|min:3',
            // 'kota' => 'required|max:20|min:3',
            // 'telepon' => 'required|max:20|min:3'
        ];
        
        $messages = [
            'required' => ':attribute gak boleh kosong maseeeh',
            'max' => ':attribute maximal 20',
            'min' => ':attribute minimal 3',
            'unique' => ':attribute sudah ada'
        ];
        

        // $this->validate($request, $rules, $messages);


        $update->kode = $request->kode;
        $update->nama = $request->nama;
        $update->umur = $request->umur;
        $update->alamat = $request->alamat;
        $update->kota = $request->kota;
        $update->telepon = $request->telepon;

        $update->save();

        Alert::success('Successfull', 'Data Anda Berhasil Di Update');

        return redirect()->route('mahasiswa');
    }


    public function destroy($id)
    {
        $delete = Mahasiswa::findOrFail($id);

        $delete->delete();
        
        Alert::success('Successfull', 'Data Anda Berhasil Di Hapus');

        
        return redirect()->route('mahasiswa');
    }
}
