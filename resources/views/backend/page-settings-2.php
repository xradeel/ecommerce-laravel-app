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
                <h2 class="content-title">Site settings </h2>
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
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Website name</h5>
                                            <p class="text-muted" style="max-width:90%">
                                                Supported languages of all pages including each product lorem ipsum dolor sit amet, consectetur adipisicing</p>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label class="form-label">Home page title</label>
                                                <input class="form-control" type="text" name="" placeholder="Type here">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Access</h5>
                                            <p class="text-muted" style="max-width:90%">Give access of all pages including each product lorem ipsum dolor sit amet,
                                                consectetur adipisicing</p>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" checked="" name="mycheck_a1" type="radio">
                                                <span class="form-check-label"> All registration is enabled </span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio">
                                                <span class="form-check-label"> Only buyers is enabled </span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio">
                                                <span class="form-check-label"> Only buyers is enabled </span>
                                            </label>
                                            <label class="mb-2 form-check">
                                                <input class="form-check-input" name="mycheck_a1" type="radio">
                                                <span class="form-check-label"> Stop new shop registration </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Notification</h5>
                                            <p class="text-muted" style="max-width:90%">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing something about this</p>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" value="" id="mycheck_notify" checked>
                                                <label class="form-check-label" for="mycheck_notify">
                                                    Send notification on each user registration
                                                </label>
                                            </div>
                                            <div class="mb-3">
                                                <input class="form-control" placeholder="Text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row border-bottom mb-4 pb-4">
                                        <div class="col-md-5">
                                            <h5>Currency</h5>
                                            <p class="text-muted" style="max-width:90%"> Lorem ipsum dolor sit amet, consectetur adipisicing something about this</p>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3" style="max-width: 200px">
                                                <label class="form-label">Main currency </label>
                                                <select class="form-select">
                                                    <option>US Dollar</option>
                                                    <option>EU Euro</option>
                                                    <option>RU Ruble</option>
                                                    <option>UZ Som</option>
                                                </select>
                                            </div>
                                            <div class="mb-3" style="max-width: 200px">
                                                <label class="form-label">Supported curencies</label>
                                                <select class="form-select">
                                                    <option>US dollar</option>
                                                    <option>RUBG russia</option>
                                                    <option>INR india</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Save all changes</button> &nbsp;
                                    <button class="btn btn-light rounded font-md" type="reset">Reset</button>
                                </form>
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