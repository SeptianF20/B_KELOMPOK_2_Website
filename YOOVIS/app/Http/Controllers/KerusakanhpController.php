<?php

namespace App\Http\Controllers;

use App\Models\Kerusakanhp;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

class KerusakanhpController extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan_hp = Kerusakanhp::all();

        return view('backend.kerusakanhp.index', compact('kerusakan_hp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('backend.kerusakanhp.create', compact('kerusakan_hp') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jenis_kerusakan'         => 'required',
            'harga'          => 'required',
        ]);
        //save to DB
        $kerusakan_hp = Kerusakanhp::create([
            'jenis_kerusakan'   => $request->jenis_kerusakan,
            'harga'  => $request->harga,
        ]);

        if ($kerusakan_hp) {
            //redirect dengan pesan sukses
            return redirect()->route('kerusakanhp.index');
        } else {
            //redirect dengan pesan error
            return redirect()->route('kerusakanhp.index');
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

    public function edit(Kerusakanhp $kerusakan_hp)
    {
        return view('backend.kerusakanhp.create', compact('kerusakan_hp') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Kerusakanhp $kerusakan_hp)
    {
        {
            $this->validate($request, [
                'jenis_kerusakan'         => 'required',
                'harga'                 => 'required'
            ]);

            if ($kerusakan_hp) {
                //redirect dengan pesan sukses
                return redirect()->route('kerusakanhp.index')->with(['success' => 'Data Berhasil Diupdate!']);
            }
            else {
                //redirect dengan pesan error
                return redirect()->route('kerusakanhp.index')->with(['error' => 'Data Gagal Diupdate!']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakanhp $kerusakan_hp)
    {
        {
            $kerusakan_hp->delete();
            return redirect()->route('kerusakanhp.index')
                            ->with('success','Data Barang berhasil dihapus.');
          }
    }
}
