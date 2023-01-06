@extends('layout.auth')
@section('content')
    <section id="home" class="register">
        <form action="{{ route('authLogin') }}" data-aos="fade-up" data-aos-delay="400" class="form" method="post">
            @csrf

            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('error-login'))
                    <div class="btn btn-danger">
                        <h3>Email atau Password Salah</h3>
                    </div>
                @endif
                <h1>Login</h1>
                <hr>

                <label for="nis"><b>NIS</b></label>
                <input type="number" placeholder="Enter Password" name="nis" id="psw" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" id="psw-repeat" required>
                <hr>

                <button type="submit" class="registerbtn">Login</button>
            </div>

            <div class="container signin">
                <p>don't have account <a href="{{ route('register') }}">Sign in</a>.</p>
            </div>
        </form>
    </section>
@endsection
