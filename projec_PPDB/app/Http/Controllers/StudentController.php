<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

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
        $schools = Http::get('https://akmalweb.my.id/api/daftar_smp.php')->json();
        return view('auth.register', compact('schools'));
    }

    public function authRegister(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'nisn' => 'required|unique:users,nisn',
                'kelamin' => 'required',
                'nama' => 'required',
                'asal_sekolah' => 'required',
                'email' => 'required|email:dns|',
                'no_hp' => 'required',
                'no_hp_ayah' => 'required',
                'no_hp_ibu' => 'required',
            ],
            [
                'nisn.unique' => 'nisn telah di pakai'
            ]
        );
        User::create([
            'nisn' => $request->nisn,
            'kelamin' => $request->kelamin,
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'asal_sekolah_text' => $request->asal_sekolah_text,
            'email' => $request->email,
            'password' => Hash::make($request->nisn),
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
            'role' => 'user',

        ]);
        return redirect()->route('pdf')->with('');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function authLogin(Request $request)
    {
        $check = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($check)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'Berhasil Login');
        }
        return redirect()->back()->with('error-login', 'Invalid username or password!');
    }
    public function indexes()
    {
        $student = Student::where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.index', compact('student'));
    }
    public function pdf()
    {
        $user = User::latest()->first();
        return view('dashboard.pdf', compact('user'));
    }
    public function pembayaran()
    {
        $bank = Http::get('https://akmalweb.my.id/api/payment/')->json();
        $admin = Student::all();
        $student = Student::where('user_id', '=', Auth::user()->id)->first();
        return view('dashboard.pembayaran', compact('bank','student','admin'));
    }
    public function transaksiPembayaran(Request $request)
    {

        $request->validate([
            'nama_bank' => 'required',
            'nama_pemilik' => 'required',
            'nominal' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',

        ]);


        $image = $request->file('foto');
        $imgname = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('/assets/img/' . $image->getClientOriginalName()))) {
            $destination = public_path('/assets/img/');

            $image->move($destination, $imgname);
            $upload = $imgname;
        } else {
            $upload = $image->getClientOriginalName();
        }
        Student::create([
            'nama_bank' => $request->nama_bank,
            'nama_bank_text' => $request->nama_bank_text,
            'nama_pemilik' => $request->nama_pemilik,
            'nominal' => $request->nominal,
            'foto' => $upload,
            'user_id' => Auth::user()->id,
            'status' => 0,
        ]);
        return redirect()->back()->with('success', 'berhasil mengisi form');
    }
    public function editPembayaran(Request $request, $id)
    {

        $request->validate([
            'nama_bank' => 'required',
            'nama_pemilik' => 'required',
            'nominal' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg',

        ]);


        $image = $request->file('foto');
        $imgname = time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('/assets/img/' . $image->getClientOriginalName()))) {
            $destination = public_path('/assets/img/');

            $image->move($destination, $imgname);
            $upload = $imgname;
        } else {
            $upload = $image->getClientOriginalName();
        }
        Student::where('id', $id)->update([
            'nama_bank' => $request->nama_bank,
            'nama_bank_text' => $request->nama_bank_text,
            'nama_pemilik' => $request->nama_pemilik,
            'nominal' => $request->nominal,
            'foto' => $upload,
            'user_id' => Auth::user()->id,
            'status' => 0,
        ]);
        return redirect()->back()->with('success', 'berhasil mengisi form');
    }
    public function validasi($id)
    {
        Student::where('id', '=', $id)->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function tolak($id)
    {
        Student::where('id', '=', $id)->update([
            'status' => 2,
        ]); 
        return redirect()->back();
    }

    public function detail($id)
    {
        $student = User::where('id','=', $id)->first();
        return view('dashboard.detail',compact('student'));
    }
    public function lihat($id)
    {
        $student = Student::where('id','=', $id)->first();
        return view('dashboard.lihat',compact('student'));
    }
    public function error(){
        return view('dashboard.error');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
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
