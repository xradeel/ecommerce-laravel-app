<!DOCTYPE HTML>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/imgs/theme/favicon.svg') }}">
    <link href="{{ asset('backend/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>

        <section class="content-main mt-40">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sign in</h4>
                    @if (session()->has('error'))
                        <div class="alert alert-danger">
                            <p>{{ session()->get('error') }}</p>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('/admin/login') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" name="email" placeholder="Username or email" type="text">
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="password" placeholder="Password" type="password">
                        </div>
                        <div class="mb-3">
                            <a href="{{ url('/admin/register') }}" class="float-end font-sm text-muted">Forgot
                                password?</a>
                        </div>
                        <div class="mb-4 mt-5">
                            <button type="submit" class="btn btn-primary w-100"> Login </button>
                        </div>
                    </form>
                    <p class="text-center mb-4">Don't have account? <a href="{{ url('/admin/register') }}">Sign up</a>
                    </p>
                </div>
            </div>
        </section>
        <footer class="main-footer text-center" style="position: relative">
            <p class="font-xs">
                <script>
                    document.write(new Date().getFullYear())
                </script> ©, Muhammad Adeel.
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="{{ asset('backend/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/vendors/jquery.fullscreen.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}" type="text/javascript"></script>
</body>



</html>
