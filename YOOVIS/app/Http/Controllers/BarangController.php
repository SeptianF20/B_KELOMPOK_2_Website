<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
      $barang = DB::table('barang')->get();
      return view('backend/barang.index', compact('barang'));
    }
  
    public function create()
    {
      $barang = null;
      $admin_lecturer = "Menambahkan";
      return view('backend/barang.create', compact('barang','admin_lecturer'));
    }
  
    public function store(Request $request)
    {
      DB::table('barang')->insert([
        'nama_barang' => $request->nama,
      ]);
      return redirect()->route('barang.index')
                      ->with('success','Data Pengalaman Kerja berhasil ditambahkan.');
    }
  
    public function edit(Barang $barang)
    {
      $admin_lecturer = "Mengubah";
      return view('backend/barang.create', compact('barang','admin_lecturer'));
    }
  
    public function update(Barang $barang,Request $request)
    {
      $barang->update($request->all());
      return redirect()->route('barang.index')
                      ->with('success','Data Barang berhasil diperbaharui.');
    }
  
    public function destroy(Barang $barang)
    {
      $barang->delete();
      return redirect()->route('barang.index')
                      ->with('success','Data Barang berhasil dihapus.');
    }
}
