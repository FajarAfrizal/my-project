<!doctype html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body style=" background-image: linear-gradient(to right, #263dc0, #162a60, #130153);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(../assets/imgs/gedung.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Login</h3>
                                </div>

                            </div>
                            <form action="{{ route('auth.login') }}" class="signin-form" method="post">
                              @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif  @csrf
                                
                                @if (session('error-login'))
                                    <div class="btn btn-danger">
                                        <p>NIS atau Password Salah</p>
                                    </div>
                                @endif
                                @if (session('notAllowed'))
                                    <div class="btn btn-danger">
                                        <h3>Login Terlebih dahulu</h3>
                                    </div>
                                @endif
                                
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Email</label>
                                    <input type="text" class="form-control" placeholder="Masukan Email"
                                        name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukan Password"
                                        name="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"77d8c5793b2c7d43","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
