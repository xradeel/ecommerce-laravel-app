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
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <?php require("components/side-bar.php") ?>

    <main class="main-wrap">
        <?php require("components/header.php") ?>
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Profile setting </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">
                            <nav class="nav nav-pills flex-lg-column mb-4">
                                <a class="nav-link active" aria-current="page" href="#">General</a>
                                <a class="nav-link" href="#">Moderators</a>
                                <a class="nav-link" href="#">Admin account</a>
                                <a class="nav-link" href="#">SEO settings</a>
                                <a class="nav-link" href="#">Mail settings</a>
                                <a class="nav-link" href="#">Newsletter</a>
                            </nav>
                        </aside>
                        <div class="col-lg-9">
                            <section class="content-body p-xl-4">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row gx-3">
                                                <div class="col-6  mb-3">
                                                    <label class="form-label">First name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <div class="col-6  mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control" type="email" placeholder="example@mail.com">
                                                </div>
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control" type="tel" placeholder="+1234567890">
                                                </div>
                                                <div class="col-lg-12  mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control" type="text" placeholder="Type here">
                                                </div>
                                                <div class="col-lg-6  mb-3">
                                                    <label class="form-label">Birthday</label>
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                        </div>
                                        <aside class="col-lg-4">
                                            <figure class="text-lg-center">
                                                <img class="img-lg mb-3 img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User Photo">
                                                <figcaption>
                                                    <a class="btn btn-light rounded font-md" href="#">
                                                        <i class="icons material-icons md-backup font-md"></i> Upload
                                                    </a>
                                                </figcaption>
                                            </figure>
                                        </aside>
                                    </div>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </form>
                                <hr class="my-5">
                                <div class="row" style="max-width:920px">
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                            <h6>Password</h6>
                                            <small class="text-muted d-block" style="width:70%">You can reset or change your password by clicking here</small>
                                        </article>
                                    </div>
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                            <h6>Remove account</h6>
                                            <small class="text-muted d-block" style="width:70%">Once you delete your account, there is no going back.</small>
                                        </article>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>


</html>