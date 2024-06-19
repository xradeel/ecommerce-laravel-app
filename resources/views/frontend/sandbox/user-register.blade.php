<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/imgs/theme/favicon.svg">
    <link rel="stylesheet" href="frontend/css/maind134.css?v=3.4">
</head>

<body>
    <main class="main">
        <section class="pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h3 class="mb-30">Create an Account</h3>
                                </div>
                                <p class="mb-50 font-sm">
                                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy
                                </p>
                                <form id="registration-form" method="post">
                                    <div class="form-group">
                                        <input type="text" required="" name="username" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required="" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="password" name="password" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input required="" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password">
                                    </div>
                                    <p style="color: red; display: none;" id="pass_error">Passwords do not match.</p>
                                    <div class="login_footer form-group">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox" name="agree" id="agree" value="1">
                                                <label class="form-check-label" for="agree"><span>I agree to terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                        <a href="{{ url('/privacy-policy') }}"><i class="fi-rs-book-alt mr-5 text-muted"></i>Learn more</a>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="register" class="btn btn-fill-out btn-block hover-up" name="register">Submit &amp; Register</button>
                                    </div>
                                </form>
                                <div class="divider-text-center mt-15 mb-15">
                                    <span> or</span>
                                </div>
                                <ul class="btn-login list_none text-center mb-15">
                                    <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                    <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                </ul>
                                <div class="text-muted text-center">Already have an account? <a href="{{ url('/login') }}">Sign in now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</body>



</html>