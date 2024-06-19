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
                <h2 class="content-title">Sellers list</h2>
                <div>
                    <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Seller</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Registered</th>
                                    <th class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89d949d9996978acac8cacab89d80999588949dd69b9795">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Mary Monasa</h6>
                                                <small class="text-muted">Seller ID: #129</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cca1a3a2ada0a5bfad8ca9b4ada1bca0a9e2afa3a1">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>11.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Jonatan Ive</h6>
                                                <small class="text-muted">Seller ID: #400</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8b5aab2b7b0b698bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90f5fcf5f1feffe2a2a0a2a2d0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Albert Pushkin</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff8c90929a90919abf9286929e9693d19c9092">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>20.11.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alexandra Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aecbc2cbcfc0c1dc9c9e9c9ceecbd6cfc3dec2cb80cdc1c3">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar3.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43262f26222d2c317173717103263b222e332f266d202c2e">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-danger">Inactive</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar4.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Alex Pushkina</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3a2afa6bb83a4aea2aaafedacb1a4">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar1.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c2920292d22233e7e7c7e7e0c29342d213c2029622f2321">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%">
                                        <a href="#" class="itemside">
                                            <div class="left">
                                                <img src="assets/imgs/people/avatar2.jpg" class="img-sm img-avatar" alt="Userpic">
                                            </div>
                                            <div class="info pl-3">
                                                <h6 class="mb-0 title">Eleanor Pena</h6>
                                                <small class="text-muted">Seller ID: #439</small>
                                            </div>
                                        </a>
                                    </td>
                                    <td><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe9b929b9f90918cccceccccbe9b869f938e929bd09d9193">[email&#160;protected]</a></td>
                                    <td><span class="badge rounded-pill alert-success">Active</span></td>
                                    <td>08.07.2022</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pagination-area mt-15 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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