<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all()->count();
        return view('home.home',compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function data()
     {
        $alumni = Alumni::where('user_id', '=', Auth::user()->id)->first();

        return view('alumni.index', compact('alumni'));
     }

     public function allData()
     {
        $alumni = Alumni::all();
        return view('home.allData', compact('alumni'));
     }
    public function login()
    {
        return view('auth.login');
    }
    public function authLogin(Request $request)
    {
        $check = $request->validate([
            'nis' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($check)) {
            $request->session()->regenerate();
            return redirect()->intended('alumni')->with('success', 'Berhasil Login');
        }
        return redirect()->back()->with('error-login', 'Invalid username or password!');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function authRegister(Request $request)
    {
       
        $request->validate(
            [
                'nis' => 'required|unique:users,nis|max:8|min:7',
                'email' => 'required|email:dns|unique:users,email',
                'password' => 'required'
            ],
            [
                'nis.unique' => 'nis telah di pakai',
                'email.unique' => 'email telah dipakai'
            ]
        );
        User::create([
            'nis' => $request->nis,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',

        ]);
        return redirect()->route('login')->with('');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function create()
     {
        return view('alumni.create');
     }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required|min:1|max:3',
            'status_bekerja' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);


        $image = $request->file('image');
        $imgname = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('assets/alumni/') . $image->getClientOriginalName())) {
            $destination = public_path('assets/alumni/');

            $image->move($destination, $imgname);
            $upload = $imgname;
        } else {
            $upload = $image->getClientOriginalName();
        }
        Alumni::create([
            'nama' => $request->nama,
            'jurusan'  => $request->jurusan,
            'angkatan' =>  $request->angkatan,
            'status_bekerja'  => $request->status_bekerja,
            'bekerja'  => $request->bekerja,
            'twitter'  => $request->twitter,
            'instagram'  => $request->instagram,
            'facebook'  => $request->facebook,
            'linkedlin'  => $request->linkedlin,
            'image'  => $upload,
            'user_id' => Auth::user()->id

        ]);
        if (Auth::user()->role == 'user'){
            return redirect()->route('data')->with('success', 'berhasil mengisi form');
        }
        return redirect()->route('admin.data')->with('success', 'berhasil mengisi form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni, $id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jurusan' => 'required',
            'angkatan' => 'required|min:1|max:3',
            'status_bekerja' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg',
        ]);


        $image = $request->file('image');
        $imgname = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('assets/alumni/') . $image->getClientOriginalName())) {
            $destination = public_path('assets/alumni/');

            $image->move($destination, $imgname);
            $upload = $imgname;
        } else {
            $upload = $image->getClientOriginalName();
        }
        Alumni::where('id', '=', $id )->update([
            'nama' => $request->nama,
            'jurusan'  => $request->jurusan,
            'angkatan' =>  $request->angkatan,
            'status_bekerja'  => $request->status_bekerja,
            'bekerja'  => $request->bekerja,
            'twitter'  => $request->twitter,
            'instagram'  => $request->instagram,
            'facebook'  => $request->facebook,
            'linkedlin'  => $request->linkedlin,
            'image'  => $upload,
            'user_id' => Auth::user()->id

        ]);
        if (Auth::user()->role == 'user'){
            return redirect()->route('data')->with('success', 'berhasil mengisi form');
        }
        return redirect()->route('admin.data')->with('success', 'berhasil mengisi form');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni, $id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();
        return redirect()->route('data')->with('success', 'deleted');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function adminData()
    {
        $alumni = Alumni::all();
        return view('admin.admin', compact('alumni'));
    }
}
