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
                <h2 class="content-title">Transactions </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-9">
                            <header class="border-bottom mb-4 pb-4">
                                <div class="row">
                                    <div class="col-lg-5 col-6 me-auto">
                                        <input type="text" placeholder="Search..." class="form-control">
                                    </div>
                                    <div class="col-lg-2 col-6">
                                        <select class="form-select">
                                            <option>Method</option>
                                            <option>Master card</option>
                                            <option>Visa card</option>
                                            <option>Paypal</option>
                                        </select>
                                    </div>
                                </div>
                            </header>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Paid</th>
                                            <th>Method</th>
                                            <th>Date</th>
                                            <th class="text-end"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>#456667</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/1.png" alt="Payment">
                                                    <span class="text text-muted">Amex</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment">
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment">
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment">
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#887780</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment">
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#344556</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment">
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment">
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment">
                                                    <span class="text text-muted">Master card</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#998784</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment">
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#556667</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment">
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#098989</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment">
                                                    <span class="text text-muted">Paypal</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>#134768</b></td>
                                            <td>$294.00</td>
                                            <td>
                                                <div class="icontext">
                                                    <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment">
                                                    <span class="text text-muted">Visa</span>
                                                </div>
                                            </td>
                                            <td>16.12.2022, 14:21</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <aside class="col-lg-3">
                            <div class="box bg-light" style="min-height:80%">
                                <h6 class="mt-15">Transaction Details</h6>
                                <hr>
                                <h6 class="mb-0">Suplier:</h6>
                                <p>TemplateMount</p><br>
                                <h6 class="mb-0">Date:</h6>
                                <p>December 19th, 2022</p><br>
                                <h6 class="mb-0">Billing address</h6>
                                <p>1901 Thornridge Cir. Shiloh, Hawaii 81063</p><br>
                                <h6 class="mb-0">VAT ID:</h6>
                                <p>54741654160</p><br>
                                <h6 class="mb-0">Email:</h6>
                                <p><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="176462676778656357726f767a677b723974787a">[email&#160;protected]</a></p><br>
                                <h6 class="mb-0">Item purchased:</h6><br>
                                <p>
                                    <a href="#"> Adidas Air Jordan <i class="icons material-icons md-launch"></i> </a>
                                    <br>
                                    <a href="#"> Great product <i class="icons material-icons md-launch"></i> </a>
                                </p>
                                <br>
                                <p>Payment: PayPal</p>
                                <p class="h4">$457.14</p>
                                <hr>
                                <a class="btn btn-light" href="#"> Download receipe </a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <div class="pagination-area mt-30 mb-50">
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