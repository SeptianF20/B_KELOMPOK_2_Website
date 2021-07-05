<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $users = DB::table('users')->get();
      return view('backend/pengguna.index', compact('users'));
  }

  public function create()
  {
    $user = null;
    $admin_lecturer = "Menambahkan";
    return view('backend/penguna.create', compact('users','admin_lecturer'));
  }

  public function store(Request $request)
  {
    User::create($request->all());
    return redirect()->route('pengguna.index')
                    ->with('success','Data Pendidikan berhasil ditambahkan.');
  }

  public function edit(User $user)
  {
    $admin_lecturer = "Mengubah";
    return view('backend/pengguna.create', compact('users','admin_lecturer'));
  }

  public function update(User $user,Request $request)
  {
    $uses->update($request->all());
    return redirect()->route('pengguna.index')
                    ->with('success','Data Pendidikan berhasil diperbaharui.');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect()->route('pengguna.index')
                    ->with('success','Data Pendidikan berhasil dihapus.');
  }
}
