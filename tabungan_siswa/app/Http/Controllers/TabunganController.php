<?php

namespace App\Http\Controllers;

use App\Models\classRoom;
use App\Models\Tabungan;
use App\Models\Rayon;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabungan = Tabungan::all()->sortBy('name');
        return view('students.index', compact('tabungan'));
    }

    public function layout()
    {
        $tabungan = Tabungan::all();
        return view('layout.main', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tabungan = Tabungan::all();
        $class = classRoom::all();
        return view('students.create', compact('tabungan', 'class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'nis' => 'required|max:8|unique:tabungans',
            'class_id' => 'required'
        ], [
            'nis.unique' => 'NIS Sudah tersedia'
        ]);
        Tabungan::create([

            'name' => $request->name,
            'nis' => $request->nis,
            'class_id' => $request->class_id
            // 'withdraw' => $request->withdraw,

        ]);
        return redirect()->route('dashboard')->with('succesCreate', 'berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show(Tabungan $tabungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function withdraw(Tabungan $tabungan, $id)
    {
        $tabungan = Tabungan::find($id);
        $class = classRoom::all();
        return view('students.withdraw')->with(compact('tabungan', 'class')) ;
    }
    public function deposit(Tabungan $tabungan, $id)
    {
        $class = classRoom::all();
        $tabungan = Tabungan::find($id);
        return view('students.deposit', compact('class', 'tabungan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function updatewd(Request $request, Tabungan $tabungan, $id)
    {
        $request->validate([
            'withdraw' => 'required',
        ]);
        if ($request->saldo < preg_replace('/[Rp. ]/','',$request->withdraw)) {
            return redirect()->back()->with('warning', 'saldo tidak cukup');
        } else {
            Tabungan::where('id', $id)->update([
                'withdraw' => preg_replace('/[Rp. ]/','',$request->withdraw),
                'saldo' => preg_replace('/[Rp. ]/','', $request->saldo) - preg_replace('/[Rp. ]/','', $request->withdraw),
                'name' => $request->name,
                'nis' => $request->nis,
                'class_id' => $request->class_id
            ]);
            return redirect()->route('dashboard')->with('succesWD', 'berhasil menambahkan');
        }
    }

    public function updatedepo(Request $request, Tabungan $tabungan, $id)
    {
        $request->validate([
            'deposit' => 'required',
        ]);

        Tabungan::where('id', $id)->update([
            'deposit' => preg_replace('/[Rp. ]/','',$request->deposit),
            'saldo' =>preg_replace('/[Rp. ]/','',$request->saldo) + preg_replace('/[Rp. ]/','', $request->deposit),
            'name' => $request->name,
            'nis' => $request->nis,
            'class_id' => $request->class_id
        ]);
        return redirect()->route('dashboard')->with('succesWD', 'berhasil menambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabungan $tabungan, $id)
    {
        $saldo = Tabungan::findOrFail($id);
        $saldo->delete();
        return redirect()->route('dashboard');
    }

    public function edit($id)
    {
        $tabungan = Tabungan::findOrFail($id);
        $class = classRoom::all();
        return view('students.edit', compact('tabungan', 'class'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'class_id' => 'required'
        ]);
        Tabungan::where('id', $id)->update([

            'name' => $request->name,
            'nis' => $request->nis,
            'class_id' => $request->class_id
        ]);
        return redirect()->route('dashboard');
    }
}
