@extends('layout.auth')
@section('content')
    <section id="home" class="register">
        <form action="{{ route('authRegister')}}" data-aos="fade-up" data-aos-delay="400" class="form" method="post">
            @csrf
            <div class="container">
                <h1>Register</h1>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>

                <label for="nis"><b>NIS</b></label>
                <input type="number" placeholder="nis" name="nis" id="nis" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" id="psw-repeat" required>
                <hr>

                <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
                <p>Already have an account? <a href="{{ route('login')}}">Sign in</a>.</p>
            </div>
        </form>
    </section>
@endsection
