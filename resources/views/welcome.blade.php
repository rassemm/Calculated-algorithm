<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sicam-agri</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
      <meta name="description" content="#">
      <meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="#">
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="../../../../css.css?family=Mada:300,400,500,600,700" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('/bower_components/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
      <!-- flag icon framework css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">
      <!--SVG Icons Animated-->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/SVG-animated/svg-weather.css')}}">
      <!-- Menu-Search css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/menu-search/css/component.css')}}">
      <!-- Horizontal-Timeline css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/dashboard/horizontal-timeline/css/style.css')}}">
      <!-- amchart css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/dashboard/amchart/css/amchart.css')}}">
      <!-- Calender css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/widget/calender/pignose.calendar.min.css')}}">
      <!-- flag icon framework css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/flag-icon/flag-icon.min.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <!--color css-->

      <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.cs')}}s">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/linearicons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/simple-line-icons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/ionicons.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
      
      @toastr_css


  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
           @include('Dach.nav')
            <!-- Sidebar chat start -->
            @include('Dach.sid') 
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                   @include('Dach.liste') 
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Dashboard</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                               
                                
                                        
                                            @yield('content')
                                            {{-- <div class="card">
                                                <div class="card-block">
                                                    <h5>Reset Order</h5>
                                                </div>
                                                <div class="card-block reset-table p-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr class="text-uppercase">
                                                                    <th>Image</th>
                                                                    <th>Product Name</th>
                                                                    <th>Product Code</th>
                                                                    <th>Status</th>
                                                                    <th>Purchased on</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a href="#!"><img class="img-responsive" src="assets/images/widget/prod1.jpg" alt="chat-user"></a>
                                                                    </td>
                                                                    <td>Leisure Suit Casual</td>
                                                                    <td>3BSD59</td>
                                                                    <td><button type="button" class="btn btn-success btn-round">Pending</button></td>
                                                                    <td>27 Sep 2015</td>
                                                                    <td>$99.00</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!"><img class="img-responsive" src="assets/images/widget/prod4.jpg" alt="chat-user"></a>
                                                                    </td>
                                                                    <td>Leisure Suit Casual</td>
                                                                    <td>3BSD59</td>
                                                                    <td><button type="button" class="btn btn-primary btn-round">Process</button></td>
                                                                    <td>27 Sep 2015</td>
                                                                    <td>$99.00</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!"><img class="img-responsive" src="assets/images/widget/prod2.jpg" alt="chat-user"></a>
                                                                    </td>
                                                                    <td>Leisure Suit Casual</td>
                                                                    <td>3BSD59</td>
                                                                    <td><button type="button" class="btn btn-warning btn-round">Failed</button></td>
                                                                    <td>27 Sep 2015</td>
                                                                    <td>$99.00</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="#!"><img class="img-responsive" src="assets/images/widget/prod3.jpg" alt="chat-user"></a>
                                                                    </td>
                                                                    <td>Leisure Suit Casual</td>
                                                                    <td>3BSD59</td>
                                                                    <td><button type="button" class="btn btn-primary btn-round">Process</button></td>
                                                                    <td>27 Sep 2015</td>
                                                                    <td>$99.00</td>
                                                                    <td>2</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div> 
                                        <!-- Reset Order End -->

                                    </div>
                                </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
@jquery
@toastr_js
@toastr_render
      <!-- themify-icons line icon -->
<script type="text/javascript" src="{{asset('bower_components/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/popper.js/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<!-- Calender js -->
<script type="text/javascript" src="{{asset('bower_components/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/widget/calender/pignose.calendar.min.js')}}"></script>

<script src="{{asset('bower_components/c3/js/c3.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/classie/js/classie.js')}}"></script>
<!-- knob js -->
<script src="{{asset('assets/pages/chart/knob/jquery.knob.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/widget/jquery.sparkline.js')}}"></script>
<!-- Rickshow Chart js -->
<script src="{{asset('bower_components/d3/js/d3.js')}}"></script>
<script src="{{asset('bower_components/rickshaw/js/rickshaw.js')}}"></script>
<!-- Morris Chart js -->
<script src="{{asset('bower_components/raphael/js/raphael.min.js')}}"></script>
<script src="{{asset('bower_components/morris.js/js/morris.js')}}"></script>
<!-- Float Chart js -->
<script src="{{asset('assets/pages/chart/float/jquery.flot.js')}}"></script>
<script src="{{asset('assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/pages/chart/float/jquery.flot.pie.js')}}"></script>
    <!-- Horizontal-Timeline js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/horizontal-timeline/js/main.js')}}"></script>
<!-- amchart js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/amcharts.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/serial.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/light.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/pages/dashboard/amchart/js/custom-amchart.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<!-- data-table js -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{asset('bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('assets/pages/data-table/js/data-table-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
<!-- pcmenu js -->
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mousewheel.min.js')}}"></script>
</body>

</html>
