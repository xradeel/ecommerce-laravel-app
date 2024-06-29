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
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create an Account</h4>
                    <form action="{{ route('admin.register') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" name="email" placeholder="Your email" type="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">First Name</label>
                            <input class="form-control" name="first_name" placeholder="Your first name" type="text">
                            @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Last Name</label>
                            <input class="form-control" name="last_name" placeholder="Your last name" type="text">
                            @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <div class="row gx-2">
                                <div class="col-4">
                                    <input class="form-control" name="country_code" value="+92" type="text"
                                        readonly>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" name="phone" placeholder="Phone" type="text">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Create password</label>
                            <input class="form-control" name="password" placeholder="Password" type="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 mt-4">
                            <p class="small text-center text-muted">By signing up, you confirm that you’ve read and
                                accepted our User Notice and Privacy Policy.</p>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100"> Register </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                    document.write(new Date().getFullYear())
                </script> ©, Evara - HTML Ecommerce Template .
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
