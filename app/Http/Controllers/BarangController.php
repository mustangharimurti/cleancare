<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\MySqlConnection;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BarangsExport;
use App\Models\Barang;
use App\Models\Position;


class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = 'Services - Deby Cleaning Service';
        $barang = Barang::all();
        confirmDelete();
        return view('barang.index', compact('pageName', 'barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageName = 'tambah barang';
        $barang = Barang::all();
        $position = Position::all();

        return view('barang.create', compact('pageName', 'position'));
    }

    public function show(string $id)
    {
        $pageName = 'Pesanan Detail';

        $barang = collect(DB::select('
        select * barangs.id as barang_id, positions.nama as position_nama
        from barangs
        left joins positions on barangs.position_id = positions.id where barangs.id = ?', [$id]))->first();

        return view('barang.show', compact('pageName', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
        // 'Nama' => 'required',
        // 'No. hp' => 'required|numeric',
        'alamat' => 'required',
        ], $messages);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = New Barang;
        $positions = New Position;
        $barang->Nama = $request->nama;
        $barang->NoHP = $request->nohp;
        $barang->Alamat = $request->alamat;
        $barang->position_id = $request->position;
        $barang->save();

        Alert::success('Added Successfully', 'Employee Data Added Successfully.');

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $pageName = 'Edit barang';

        // ELOQUENT
        $barang = Barang::find($id);
        $position = Position::all();
        return view('barang.edit', compact('pageName', 'barang', 'position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nohp' => 'required|numeric',
            'alamat' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->Nama = $request->nama;
        $barang->NoHP = $request->nohp;
        $barang->Alamat = $request->alamat;
        $barang->position_id = $request->position;
        $barang->save();

        Alert::success('Changed Successfully', 'Employee Data Changed Successfully.');

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT

        Barang::find($id)->delete();

        Alert::success('Deleted Successfully', 'barang Deleted Successfully.');

        return redirect()->route('barang.index');

    }
    public function exportExcel()
    {
        return Excel::download(new BarangsExport, 'barangs.xlsx');
    }
}
