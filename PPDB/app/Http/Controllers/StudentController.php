<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    public function authRegister(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'kelamin' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'asal_sekolah_text' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_hp_ayah' => 'required',
            'no_hp_ibu' => 'required',
        ]);
        Student::create([
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'asal_sekolah_text' => $request->asal_sekolah_text,
            'email' => $request->email,
            'password' => $request->nisn,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'role' => 'user',
        ]);
        return redirect()->back()->with('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
