<br>
<body style="font-family: sans-serif" onload="window.print()">    
<br>
    <center><b>TANDA BUKTI PENDAFTARAN</b></center>
    <center><b>SMK Wikrama Bogor TP. 2023-2024</b></center>
    <br>
    <center>
    <table width="50%" border="0" >
        <tr>
            <td colspan="3" style="padding: 10px 0;"></td>
        </tr>
        <tr>
            <td colspan="3" style="background-color: lightgray"><b>I. BIODATA CALON PESERTA DIDIK</b></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px 0;"></td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>TANGGAL DAFTAR</b></td>
            <td width="3%">:</td>
            <td>{{ \Carbon\Carbon::parse($user->created_at)->format('j F, Y')}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NOMOR SELEKSI</b></td>
            <td width="3%">:</td>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NAMA LENGKAP</b></td>
            <td width="3%">:</td>
            <td>{{$user->nama}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NISN</b></td>
            <td width="3%">:</td>
            <td>{{$user->nisn}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>ASAL SEKOLAH</b></td>
            <td width="3%">:</td>
            <td>@if ($user['asal_sekolah'] == 'lainnya')
                {{ $user->asal_sekolah_text }}
            @else
                {{ $user->asal_sekolah }}
            
            @endif</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>EMAIL</b></td>
            <td width="3%">:</td>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP</b></td>
            <td width="3%">:</td>
            <td>{{$user->no_hp}}</td>
        </tr>
        
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ayah</b></td>
            <td width="3%">:</td>
            <td>{{$user->no_hp_ayah}}</td>
        </tr>
        <tr>
            <td width="30%" style="font-size: 13px"><b>NO HP Ibu</b></td>
            <td width="3%">:</td>
            <td>{{$user->no_hp_ibu}}</td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 10px 0;"></td>
        </tr>
        <tr>
            <td colspan="3" style="background-color: lightgray"><b>II. INFORMASI DAN PERSYARATAN</b></td>
        </tr>
        <tr>
            <td colspan="3" style="padding: 8px 0;"></td>
        </tr>
        <tr>
            <td colspan="3"><b>A. Akun Anda</b></td>
        </tr>
        <tr>
            <td colspan="3">Akses : <a style="font: blue; text-decoration: none;" href="http://127.0.0.1:8000/login">http://127.0.0.1:8000/login </a>, login gunakan</td>
        </tr>
        <tr>
            <td colspan="3">Username : {{$user->email}}</td>
        </tr>
        <tr>
      
            <td colspan="3">Password : {{$user->nisn}}</td>
        </tr>
        <tr>
            <td colspan="3">Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor.</td>
        </tr>
    </table>
    </center>
</body>
