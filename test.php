
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
<!--<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">-->
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/animate.css/animate.min.css">
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/flatpickr/dist/flatpickr.min.css" />
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/trumbowyg/dist/ui/trumbowyg.min.css">

<!--sweet alert css-->
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp//assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
<!--validationengine css-->
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp//assets/css/validationEngine.jquery.css" type="text/css"/>
<!--Growl flash messages css-->
<link href="http://45.33.126.69/~letsschoolerp/assets/css/jquery.growl.css" rel="stylesheet" type="text/css" />
<!-- App styles -->
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/css/app.min.css">
<!-- fancy fileupload css -->
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/css/file_upload.css">
<link rel="stylesheet" href="http://45.33.126.69/~letsschoolerp/assets/css/custom.css">
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/js/jquery.growl.js" type="text/javascript"></script>
     
        
                
                        <title>Make Payment | School</title>
    </head>

    <body data-ma-theme="cyan">
        <main class="main">
<!--            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>-->
            <header class="header">
    <div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".search">
        <div class="navigation-trigger__inner">
            <i class="navigation-trigger__line"></i>
            <i class="navigation-trigger__line"></i>
            <i class="navigation-trigger__line"></i>
        </div>
    </div>

    <div class="header__logo ">
        <h1>
            <a href="http://45.33.126.69/~letsschoolerp/sysadmin/dashboard" class="p-3">
            <img src="http://45.33.126.69/~letsschoolerp/uploads/logo_new.png" onerror="this.src='http://45.33.126.69/~letsschoolerp/uploads/logo.png'"  style="max-height:50px; max-width:70px;"/>
            <span class="hidden-sm-down">Let'sSchool</span>
            </a>
        </h1>
    </div>
        <ul class="top-nav mega-nav hidden-sm-down">
        <li class="dropdown top-nav__notifications customNavMenu float-left">
            <a class="text-center p-3 megaCusCollapse"><h4 class="text-white mb-0"><i class="zmdi zmdi-apps"></i> Menu</h4></a>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu--block megaCusMenu" role="menu">
                <div class="tab-container dropdownCus-tab">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link megaNav-link " data-toggle="tab" href="#academics-1" role="tab">Academics</a>
                        </li>
                        <li class="nav-item megaNav-link active show">
                            <a class="nav-link" data-toggle="tab" href="#feeandt-2" role="tab">Fee/Billing</a>
                        </li>
                        <li class="nav-item megaNav-link ">
                            <a class="nav-link" data-toggle="tab" href="#administration-3" role="tab">Administration</a>
                        </li>
                        <li class="nav-item megaNav-link  ">
                            <a class="nav-link" data-toggle="tab" href="#settings-4" role="tab">Settings</a>
                        </li>
                    </ul>

                    <div class="tab-content bg-white megaTabContent pt-0 pb-0">
                        <div class="tab-pane " id="academics-1" role="tabpanel">
                            <div class="card-block">
                                <ul class="nav">
                                    <div class="row" style="width:100%;">
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/student">
                                                    <i class="zmdi zmdi-face"></i> Student                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/teacher">
                                                    <i class="zmdi zmdi-account-box"></i> Teacher                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/parent">
                                                    <i class="zmdi zmdi-male-female"></i> Parent                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/classes">
                                                    <i class="zmdi zmdi-view-list"></i> Class                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/sections">
                                                    <i class="zmdi zmdi-view-list"></i> Section                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/subject">
                                                    <i class="zmdi zmdi-book"></i> Subject                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/exam">
                                                    <i class="zmdi zmdi-edit"></i> Exam                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/marks">
                                                    <i class="zmdi zmdi-filter-frames"></i> Marks-attendance                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/grade">
                                                    <i class="zmdi zmdi-view-list"></i> Exam-grade                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/class_routine">
                                                    <i class="zmdi zmdi-calendar-note"></i> Class Routine                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/religion">
                                                    <i class="zmdi zmdi-globe-alt"></i> Religion                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/manage_profile">
                                                    <i class="zmdi zmdi-key"></i> Profile                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="feeandt-2" role="tabpanel">
                            <div class="card-block">
                                <ul class="nav">
                                    <div class="row" style="width:100%;">
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/fee_category">
                                                    <i class="zmdi zmdi-view-list"></i> Fee Category                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/fee">
                                                    <i class="zmdi zmdi-money"></i> Create Fee Rules                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/invoice">
                                                    <i class="zmdi zmdi-card"></i> Transactions                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/inward">
                                                    <i class="zmdi zmdi-card"></i> Inward                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/outward">
                                                    <i class="zmdi zmdi-card"></i> Outward                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/student_ledger">
                                                    <i class="zmdi zmdi-card"></i> Student Ledger                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/student_register">
                                                    <i class="zmdi zmdi-card"></i> Student Register                                                </a>
                                            </li>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/transactions">
                                                    <i class="zmdi zmdi-money-box"></i>                                                 </a>
                                            </li>
                                        </div> -->
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="administration-3" role="tabpanel">
                            <div class="card-block">
                                <ul class="nav">
                                    <div class="row" style="width:100%;">
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/book">
                                                    <i class="zmdi zmdi-book"></i> Book                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/transport">
                                                    <i class="zmdi zmdi-bus"></i> Transport                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/dormitory">
                                                    <i class="zmdi zmdi-balance"></i> Dormitory                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/noticeboard">
                                                    <i class="zmdi zmdi-filter-frames"></i> Noticeboard                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="settings-4" role="tabpanel">
                            <div class="card-block">
                                <ul class="nav">
                                    <div class="row" style="width:100%;">
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/system_settings">
                                                    <i class="zmdi zmdi-brightness-5"></i> System Settings                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/configuration">
                                                    <i class="zmdi zmdi-edit"></i> Configuration                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/manage_language">
                                                    <i class="zmdi zmdi-flag"></i> Manage Language                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/backup_restore">
                                                    <i class="zmdi zmdi-long-arrow-up"></i><i class="zmdi zmdi-long-arrow-down"></i> Backup Restore                                                </a>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="nav-item">
                                                <a class="nav-link " href="http://45.33.126.69/~letsschoolerp/sysadmin/sms_settings">
                                                    <i class="zmdi zmdi-email"></i> Sms Settings                                                </a>
                                            </li>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
        <form class="search text-center">
        <div class="search__inner">
                        </div>
    </form>
    <ul class="top-nav">
        <!-- <li class="dropdown top-nav__notifications">
            <a href="" class="p-3" data-toggle="dropdown" title=" Select Language"><span class=" hidden-sm-down"> Select Language</span> <span class="hidden-xl-up"><i class="zmdi zmdi-flag"></i></span> &nbsp;<b class="caret"></b></a>

            <div class="dropdown-menu dropdown-menu-right">
                 <div class="listview listview--hover">
                    <div class="listview__scroll scrollbar-inner">
                                                    <a class="listview__item" href="http://45.33.126.69/~letsschoolerp/multilanguage/select_language/english">
                                English                                                                       &nbsp; &nbsp;  <b class="text-info"><i class="zmdi zmdi-check-circle"></i></b> 
                                                            </a>                               
                                                    <a class="listview__item" href="http://45.33.126.69/~letsschoolerp/multilanguage/select_language/Hindi">
                                Hindi                                                            </a>                               
                                                    <a class="listview__item" href="http://45.33.126.69/~letsschoolerp/multilanguage/select_language/Test_Language">
                                Test Language                                                            </a>                               
                                            </div>

                    <div class="p-1"></div>
                </div>
            </div>
        </li> -->
        
        <li class="dropdown top-nav__notifications">
            <a href="" class="p-3" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="listview listview__header"><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i> Admin Panel</div>
                                <div class="user__info" data-toggle="dropdown">
                    <a href="http://45.33.126.69/~letsschoolerp/">
                        <img class="user__img" src="http://45.33.126.69/~letsschoolerp/assets/img/icons_big/admin.png" style="max-height:100px; max-width:100px;"/>
                    </a>
                    <div>
                        <div class="user__name text-capitalize">Mr. Admin</div>
                    </div>
                </div>
                                                <a class="dropdown-item" href="http://45.33.126.69/~letsschoolerp/sysadmin/manage_profile">
                    <i class="zmdi zmdi-face"></i> &nbsp;Profile                </a>
                <a class="dropdown-item" href="http://45.33.126.69/~letsschoolerp/sysadmin/change_password">
                    <i class="zmdi zmdi-key"></i> &nbsp;Change Password                </a>
                <a class="dropdown-item" href="http://45.33.126.69/~letsschoolerp/logout">
                    <i class="zmdi zmdi-lock"></i> &nbsp;Logout                </a>
            </div>
        </li>
    </ul>
</header>                        <section class="content content--full">
                <header class="">
    <div class="row">
        <!-- <div class="col-md-9 text-left content__title">
            <h1></h1>
        </div> -->
        <div class="col-md-3">
                    </div>
    </div>

    <script type="text/javascript">
     
                
</script> 
</header>                <div class="row">
                    <div class="col-md-12">
                        <form class="validatable" target="_top" id="makePaymentFormSubmit" method="post">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="card-block__title headingCustomBorder text-info"><i class="zmdi zmdi-info-outline zmdi-hc-fw"></i> Fee Info ($)</h3>
                        <div class="card-block feeMakePaymentTabContent pt-0">
                            <div class="card-block pl-0 pr-0">
                                <table id="paidInvoiceDataTable" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Category</th>
                                            <th>Fee</th>
                                            <th>Late Fee</th>
                                            <th>Total Fee</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                <tr id="paidcollapseDetailTR1">
                                                    <td class="details-control collpaseTableTD1" data-toggle="collapse" data-parent="#accordionExample" href="#paidcollapseDetail1" aria-expanded="true"></td>
                                                    <td>Library Fee</td>
                                                    <td>$ 1000.00                                                    </td>
                                                    <td>$ 50.00                                                                                                                <input type="hidden" class="fee_category_id1" name="fee_category_id[]" value="1">
                                                        <span class="hidden-xl-down feeAmountValue1">1000</span>
                                                        <input type="hidden" class="feeAmount1" name="feeAmount[]" value="0">
                                                        <input type="hidden" class="latefeeAmount1" name="latefeeAmount[]" value="50">
                                                                                                            </td>
                                                    <td>$ 1050.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-0" colspan="6">
                                                        <div id="paidcollapseDetail1" class="collapse makeP" aria-expanded="true">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="btn-group monthlyButtons" id="1"><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn1 pcat1 makePaymentBtn"  data-target="1"  data-category="1">January</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn2 pcat1 makePaymentBtn"  data-target="2"  data-category="1">February</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn3 pcat1 makePaymentBtn"  data-target="3"  data-category="1">March</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn4 pcat1 makePaymentBtn"  data-target="4"  data-category="1">April</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn5 pcat1 makePaymentBtn"  data-target="5"  data-category="1">May</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn6 pcat1 makePaymentBtn"  data-target="6"  data-category="1">June</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn7 pcat1 makePaymentBtn"  data-target="7"  data-category="1">July</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn8 pcat1 makePaymentBtn"  data-target="8"  data-category="1">August</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn9 pcat1 makePaymentBtn"  data-target="9"  data-category="1">September</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn10 pcat1 makePaymentBtn"  data-target="10"  data-category="1">October</button><button type="button" class="btn btn-secondary to_be_paid waves-effect monhtly pbtn11 pcat1 makePaymentBtn"  data-target="11"  data-category="1">November</button><button type="button" class="btn btn-secondary to_be_paid waves-effect monhtly pbtn12 pcat1 makePaymentBtn"  data-target="12"  data-category="1">December</button></div>                                                                                                                                                        
                                                                        <input type="hidden" class="number_of_month1" name="number_of_month[]" value="0">
                                                                        <input type="hidden" class="number_of_outdated_amount1" name="number_of_outdated_amount[]" value="">
                                                                                                                                            </div>
                                                                </div>
                                                                                                                                <div class="row mt-5 ">
                                                                    <div class="col-sm-6 form-group">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="hidden" id="wave_offValue1" name="wave_offValue[]" value="0" class="custom-control-input">

                                                                            <input type="checkbox" id="wave_off1" name="wave_off[]" value="1"   class="custom-control-input" onclick="wave_off_cat(1)">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Wave Off</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-6 form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_fee_forCategory calaulated_total_fee1"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Late Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_late_fee_forCategory calaulated_total_late_fee1"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                                <input type="hidden" class="payForMonth1" name="payForMonth[]" value="">
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <script>
                                                    $(".collpaseTableTD1").on('click',function (event) {
                                                        $("#paidcollapseDetailTR1").addClass("shown")
                                                        var clickover = $(event.target);
                                                        var _opened = $("#paidcollapseDetail1").hasClass("show");
                                                        if (_opened === true) {
                                                            $("#paidcollapseDetailTR1").removeClass("shown");
                                                        }else{
                                                            $("#paidcollapseDetailTR1").addClass("shown"); 
                                                        }
                                                    })
                                                </script>
                                            </div>
                                            <input type="hidden" name="submitedFeeId[]" value="13">
                                                                                            <tr id="paidcollapseDetailTR2">
                                                    <td class="details-control collpaseTableTD2" data-toggle="collapse" data-parent="#accordionExample" href="#paidcollapseDetail2" aria-expanded="true"></td>
                                                    <td>Annual Exam Fee</td>
                                                    <td>$ 8000.00                                                    </td>
                                                    <td>$ 450.00                                                                                                                <input type="hidden" class="fee_category_id2" name="fee_category_id[]" value="2">
                                                        <span class="hidden-xl-down feeAmountValue2">8000</span>
                                                        <input type="hidden" class="feeAmount2" name="feeAmount[]" value="0">
                                                        <input type="hidden" class="latefeeAmount2" name="latefeeAmount[]" value="450">
                                                                                                            </td>
                                                    <td>$ 8450.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-0" colspan="6">
                                                        <div id="paidcollapseDetail2" class="collapse makeP" aria-expanded="true">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                                                                                                    <div class="btn-group yearlyButtons"> 
                                                                                <button  type="button" class="btn btn-danger waves-effect ybtn ycat2 makePaymentBtn"  onclick="yearlySelection(2)" data-color="danger">April</button>
                                                                            </div>
                                                                                                                                                        
                                                                        <input type="hidden" class="number_of_month2" name="number_of_month[]" value="0">
                                                                        <input type="hidden" class="number_of_outdated_amount2" name="number_of_outdated_amount[]" value="">
                                                                                                                                            </div>
                                                                </div>
                                                                                                                                <div class="row mt-5 ">
                                                                    <div class="col-sm-6 form-group">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="hidden" id="wave_offValue2" name="wave_offValue[]" value="0" class="custom-control-input">

                                                                            <input type="checkbox" id="wave_off2" name="wave_off[]" value="1"   class="custom-control-input" onclick="wave_off_cat(2)">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Wave Off</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-6 form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_fee_forCategory calaulated_total_fee2"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Late Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_late_fee_forCategory calaulated_total_late_fee2"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                                <input type="hidden" class="payForMonth2" name="payForMonth[]" value="">
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <script>
                                                    $(".collpaseTableTD2").on('click',function (event) {
                                                        $("#paidcollapseDetailTR2").addClass("shown")
                                                        var clickover = $(event.target);
                                                        var _opened = $("#paidcollapseDetail2").hasClass("show");
                                                        if (_opened === true) {
                                                            $("#paidcollapseDetailTR2").removeClass("shown");
                                                        }else{
                                                            $("#paidcollapseDetailTR2").addClass("shown"); 
                                                        }
                                                    })
                                                </script>
                                            </div>
                                            <input type="hidden" name="submitedFeeId[]" value="10">
                                                                                            <tr id="paidcollapseDetailTR3">
                                                    <td class="details-control collpaseTableTD3" data-toggle="collapse" data-parent="#accordionExample" href="#paidcollapseDetail3" aria-expanded="true"></td>
                                                    <td>test fee</td>
                                                    <td>$ 10000.00                                                    </td>
                                                    <td>$ 1000.00                                                                                                                <input type="hidden" class="fee_category_id5" name="fee_category_id[]" value="5">
                                                        <span class="hidden-xl-down feeAmountValue5">10000</span>
                                                        <input type="hidden" class="feeAmount5" name="feeAmount[]" value="0">
                                                        <input type="hidden" class="latefeeAmount5" name="latefeeAmount[]" value="1000">
                                                                                                            </td>
                                                    <td>$ 11000.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-0" colspan="6">
                                                        <div id="paidcollapseDetail3" class="collapse makeP" aria-expanded="true">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                                                                                                    <div class="btn-group yearlyButtons"> 
                                                                                <button  type="button" class="btn btn-danger waves-effect ybtn ycat5 makePaymentBtn"  onclick="yearlySelection(5)" data-color="danger">June</button>
                                                                            </div>
                                                                                                                                                        
                                                                        <input type="hidden" class="number_of_month5" name="number_of_month[]" value="0">
                                                                        <input type="hidden" class="number_of_outdated_amount5" name="number_of_outdated_amount[]" value="">
                                                                                                                                            </div>
                                                                </div>
                                                                                                                                <div class="row mt-5 ">
                                                                    <div class="col-sm-6 form-group">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="hidden" id="wave_offValue5" name="wave_offValue[]" value="0" class="custom-control-input">

                                                                            <input type="checkbox" id="wave_off5" name="wave_off[]" value="1"   class="custom-control-input" onclick="wave_off_cat(5)">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Wave Off</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-6 form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_fee_forCategory calaulated_total_fee5"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Late Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_late_fee_forCategory calaulated_total_late_fee5"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                                <input type="hidden" class="payForMonth5" name="payForMonth[]" value="">
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <script>
                                                    $(".collpaseTableTD3").on('click',function (event) {
                                                        $("#paidcollapseDetailTR3").addClass("shown")
                                                        var clickover = $(event.target);
                                                        var _opened = $("#paidcollapseDetail3").hasClass("show");
                                                        if (_opened === true) {
                                                            $("#paidcollapseDetailTR3").removeClass("shown");
                                                        }else{
                                                            $("#paidcollapseDetailTR3").addClass("shown"); 
                                                        }
                                                    })
                                                </script>
                                            </div>
                                            <input type="hidden" name="submitedFeeId[]" value="15">
                                                                                            <tr id="paidcollapseDetailTR4">
                                                    <td class="details-control collpaseTableTD4" data-toggle="collapse" data-parent="#accordionExample" href="#paidcollapseDetail4" aria-expanded="true"></td>
                                                    <td>Test Fee New 'jkj</td>
                                                    <td>$ 1000.00                                                    </td>
                                                    <td>$ 1.00                                                                                                                <input type="hidden" class="fee_category_id6" name="fee_category_id[]" value="6">
                                                        <span class="hidden-xl-down feeAmountValue6">1000</span>
                                                        <input type="hidden" class="feeAmount6" name="feeAmount[]" value="0">
                                                        <input type="hidden" class="latefeeAmount6" name="latefeeAmount[]" value="1">
                                                                                                            </td>
                                                    <td>$ 1001.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="p-0" colspan="6">
                                                        <div id="paidcollapseDetail4" class="collapse makeP" aria-expanded="true">
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="btn-group monthlyButtons" id="6"><button type="button" class="btn btn-success waves-effect monhtly pbtn1 pcat6 makePaymentBtn" disabled data-target="1"  data-category="6">January</button><button type="button" class="btn btn-success waves-effect monhtly pbtn2 pcat6 makePaymentBtn" disabled data-target="2"  data-category="6">February</button><button type="button" class="btn btn-success waves-effect monhtly pbtn3 pcat6 makePaymentBtn" disabled data-target="3"  data-category="6">March</button><button type="button" class="btn btn-success waves-effect monhtly pbtn4 pcat6 makePaymentBtn" disabled data-target="4"  data-category="6">April</button><button type="button" class="btn btn-success waves-effect monhtly pbtn5 pcat6 makePaymentBtn" disabled data-target="5"  data-category="6">May</button><button type="button" class="btn btn-success waves-effect monhtly pbtn6 pcat6 makePaymentBtn" disabled data-target="6"  data-category="6">June</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn7 pcat6 makePaymentBtn"  data-target="7"  data-category="6">July</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn8 pcat6 makePaymentBtn"  data-target="8"  data-category="6">August</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn9 pcat6 makePaymentBtn"  data-target="9"  data-category="6">September</button><button type="button" class="btn btn-danger to_be_paid waves-effect monhtly pbtn10 pcat6 makePaymentBtn"  data-target="10"  data-category="6">October</button><button type="button" class="btn btn-secondary to_be_paid waves-effect monhtly pbtn11 pcat6 makePaymentBtn"  data-target="11"  data-category="6">November</button><button type="button" class="btn btn-secondary to_be_paid waves-effect monhtly pbtn12 pcat6 makePaymentBtn"  data-target="12"  data-category="6">December</button></div>                                                                                                                                                        
                                                                        <input type="hidden" class="number_of_month6" name="number_of_month[]" value="0">
                                                                        <input type="hidden" class="number_of_outdated_amount6" name="number_of_outdated_amount[]" value="">
                                                                                                                                            </div>
                                                                </div>
                                                                                                                                <div class="row mt-5 ">
                                                                    <div class="col-sm-6 form-group">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="hidden" id="wave_offValue6" name="wave_offValue[]" value="0" class="custom-control-input">

                                                                            <input type="checkbox" id="wave_off6" name="wave_off[]" value="1"   class="custom-control-input" onclick="wave_off_cat(6)">
                                                                            <span class="custom-control-indicator"></span>
                                                                            <span class="custom-control-description">Wave Off</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-sm-6 form-group">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_fee_forCategory calaulated_total_fee6"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <b>Total Late Fee : </b>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <span class="calaulated_total_late_fee_forCategory calaulated_total_late_fee6"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                                <input type="hidden" class="payForMonth6" name="payForMonth[]" value="">
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <script>
                                                    $(".collpaseTableTD4").on('click',function (event) {
                                                        $("#paidcollapseDetailTR4").addClass("shown")
                                                        var clickover = $(event.target);
                                                        var _opened = $("#paidcollapseDetail4").hasClass("show");
                                                        if (_opened === true) {
                                                            $("#paidcollapseDetailTR4").removeClass("shown");
                                                        }else{
                                                            $("#paidcollapseDetailTR4").addClass("shown"); 
                                                        }
                                                    })
                                                </script>
                                            </div>
                                            <input type="hidden" name="submitedFeeId[]" value="22">
                                                                                </tbody>
                                </table>
                                                                <div class="price-table__item price-table__item--popular mt-4">
                                <header class="price-table__header bg-cyan mb-0">
                                    <div class="price-table__title text-center">Payment Summery</div>
                                </header>

                                <!-- hidden fields-->
                                <input type="hidden" name="student_id" value="5">
                                <input type="hidden" name="submitedFeetitle" value="6">
                                <input type="hidden" id="totalDuratoinAmount" value="0">
                                <input type="hidden" id="totalDuratoinLateFeeAmount" value="0">
     
                                <div class="card-block">
                                    <div class="custom_error"></div>
                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <div class="">
                                                <label>Payment Mode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <div class="form-group">
                                                <select name="payment_mode" id="payment_mode" class="form-control validate[required]">
                                                    <option value="cash">Cash</option> 
                                                    <option value="cheque">Cheque</option> 
                                                    <option value="other">Other</option> 
                                                </select>
                                                <i class="form-group__bar"></i>
                                                <div id="error_pay_for_month"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row d-none checkNumberBox">
                                        <div class="col-md-4 mt-3">
                                            <div class="">
                                                <label>Cheque No.</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <div class="form-group">
                                                <input class="form-control validate[required]" name="chequenumber" id="chequenumber" placeholder="">
                                                <i class="form-group__bar"></i>
                                                <div id="error_chequenumber"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row d-none otherPaymentMBox">
                                        <div class="col-md-4 mt-3">
                                            <div class="">
                                                <label>Enter Mode</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <div class="form-group">
                                                <input class="form-control validate[required]" name="other_mode" id="other_mode" placeholder="">
                                                <i class="form-group__bar"></i>
                                                <div id="error_other_mode"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="">
                                                <label>Fee</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                $ <span class="paybleFee">0</span>
                                                <input class="paybleFee" type="hidden" name="submitedFeeAmount" id="submitedLateFeeAmount" value="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="">
                                                <label>Late Fee</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                $ <span class="paybleLateFeeTotal" id="countLateFee">0</span>
                                                <input class="paybleLateFeeTotal" type="hidden" name="submitedLateFeeAmount" id="submitedLateFeeAmount" value="0">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="">
                                                <label>Total Amount To Be Paid</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <div class="form-group">
                                                $ <span class="paybleFeeTotal">0</span>
                                                <input class="paybleFeeTotal" type="hidden" name="submitedTotalAmount" id="submitedTotalAmount" value="0">
                                                <i class="form-group__bar"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row commentBox">
                                        <div class="col-md-4 mt-3">
                                            <div class="">
                                                <label>Comment</label>
                                            </div>
                                        </div>
                                        <div class="col-md-8 text-left">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" name="payComment" id="payComment" placeholder=""></textarea>
                                                <i class="form-group__bar"></i>
                                                <div id="error_payComment"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <button type="submit" id="add-action" class="btn btn-info active waves-effect">Pay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="card-block__title headingCustomBorder text-info"><i class="zmdi zmdi-info-outline zmdi-hc-fw"></i> Student Info</h3>

                        <div class="card profile studentInfo">
                            <div class="profile__img">
                                <img class="img-circle" src="http://45.33.126.69/~letsschoolerp/uploads/student_image/5.jpg" alt="">
                            </div>

                            <div class="profile__info">
                                <p class="pt-4">Pawan Chouhan </p>

                                <ul class="icon-list">
                                    <li><i class="zmdi zmdi-card"></i> s542</li>
                                    <li><i class="zmdi zmdi-phone"></i> 959</li>
                                    <li><i class="zmdi zmdi-email"></i> pawan.chouhan26@pawanchouhan.com</li>
                                    <li><i class="zmdi zmdi-pin"></i> Indore, Dewas, India.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Red -->
                                <div class="tab-container tab-container">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <li class="nav-item text-left">
                                            <a class="nav-link active" data-toggle="tab" href="#studentGeneralTab" role="tab">General</a>
                                        </li>
                                        <li class="nav-item text-left">
                                            <a class="nav-link" data-toggle="tab" href="#studentClassTab" role="tab">Calss & Section</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content p-0">
                                        <div class="tab-pane active fade show" id="studentGeneralTab" role="tabpanel">
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Name : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Pawan Chouhan                                                     </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Father Name : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Pawan                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Student Code : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        s542                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Student Category : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        General                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Gender : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        male                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Joining Date : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        10/13/2017                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="studentClassTab" role="tabpanel">
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Class : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        10th                                                     </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <b>Section : </b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Section C                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>    
            </div>
        </div>
    </div>
</div>
<script>
    //form submission
    $('#studentPaymentForm').on('submit', function(e){   
        e.preventDefault();
        var valid = $(this).validationEngine('validate');
        if(valid==true){
            var form = new FormData($(this)[0]);
            form.append('udf2', '00238de3a400fea8f86d0b53fb191cc2');
            $.ajax({
                url: 'http://45.33.126.69/~letsschoolerp/sysadmin/makePaymentRequest',
                data: form,
                processData:false,
                contentType:false,
                type:'POST',
                cache:false,
                success:function(response){
                    var response = $.parseJSON(response);
                    if(response.status ==  true){
                        $('.remove_val').remove();
                            location.replace('http://45.33.126.69/~letsschoolerp/make_payment/'+response.student_id);
                    }else{
                        $('.remove_val').remove();
                        if(response.data != ''){
                            var errorFocus = '';
                            var errors = response.data;
                            $.each(errors, function(key, value){
                                if(value!=''){
                                    errorFocus = key;
                                }
                                $('#error_'+key).closest('div').append('<div class="text text-danger remove_val">'+value+'</div>');
                            });
                            $('#'+errorFocus).focus();
                        }  
                    }
                }
            });
        }
    });

    //comment box visible in other payment mode
    var previousPayment_mode = $("select[name=payment_mode]").val();
    $("#payment_mode").on("change", function(e){
        e.preventDefault();
        var curPayment_mode = $(this).val();
        // if(curPayment_mode=='other'){
        //     $('.commentBox').removeClass('d-none');
        // }else{
        //     $('.commentBox').removeClass('d-none').addClass('d-none');
        // }

        if(curPayment_mode=='cheque'){
            $('.checkNumberBox').removeClass('d-none');
        }else{
            $('.checkNumberBox').removeClass('d-none').addClass('d-none');
        }

        if(curPayment_mode=='other'){
            $('.otherPaymentMBox').removeClass('d-none');
        }else{
            $('.otherPaymentMBox').removeClass('d-none').addClass('d-none');
        }
    });

    //form submission
    $('#makePaymentFormSubmit').on('submit', function(e){   
        e.preventDefault();
        var valid = $(this).validationEngine('validate');
        if(valid==true){
            var form = new FormData($(this)[0]);
            form.append('udf2', '00238de3a400fea8f86d0b53fb191cc2');
            $.ajax({
                url: 'http://45.33.126.69/~letsschoolerp/sysadmin/makePaymentFormSubmit',
                data: form,
                processData:false,
                contentType:false,
                type:'POST',
                cache:false,
                success:function(response){
                    var response = $.parseJSON(response);
                    if(response.status ==  true){
                        var transactionId = response.txnid;//response.payment_transaction_id;
                        var payment_receipt = 'http://45.33.126.69/~letsschoolerp/sysadmin/payment_receipt'+'/'+transactionId;
                        var download_receipt = 'http://45.33.126.69/~letsschoolerp/sysadmin/invoice_download'+'/'+response.payment_transaction_id;
                        var redirect_url = 'http://45.33.126.69/~letsschoolerp/sysadmin/inward';
                        swal({
                            html:'<div class="alert alert-success" role="alert"><h4 class="alert-heading">Great!</h4><p class="mb-0">'+response.message+'</p></div><a href="'+payment_receipt+'" class="btn btn-secondary waves-effect">View Receipt</a>&nbsp;&nbsp;<a id="download_receipt" href="'+download_receipt+'" class="btn btn-info"><i class="zmdi zmdi-download"></i> Download Receipt</a>&nbsp;<a href="'+redirect_url+'" class="btn btn-secondary waves-effect">Close</a>',
                            // timer: 50000,
                            showConfirmButton : false,
                        }).then(
                          function () {
                          },
                          // handling the promise rejection
                          function (dismiss) {
                            // if (dismiss === 'timer') {
                            //     location.replace('http://45.33.126.69/~letsschoolerp/sysadmin/inward');
                            // }
                          }
                        )
                    }else{
                        $('.remove_val').remove();
                        if(response.data != ''){
                            var errorFocus = '';
                            var errors = response.data;
                            $.each(errors, function(key, value){
                                if(value!=''){
                                    errorFocus = key;
                                }
                                $('#error_'+key).closest('div').append('<div class="text text-danger remove_val">'+value+'</div>');
                            });
                            $('#'+errorFocus).focus();
                        }  
                    }
                }
            });
        }
    });

    function get_count(){
        var sum = 0;
        var late_fee = 0;
        $('.calaulated_total_fee_forCategory').each(function()
        {
            var payment_value = $(this).text();
            if(payment_value!=''){
                sum += parseInt($(this).text());
            }
        });

        $('.calaulated_total_late_fee_forCategory').each(function()
        {
            var payment_value = $(this).text();
            if(payment_value!=''){
                late_fee += parseInt($(this).text());
            }
        });

        $('.paybleFee').text(sum).val(sum);
        $('.paybleLateFeeTotal').text(late_fee).val(late_fee);
        var total_fee = sum+late_fee;
        $('.paybleFeeTotal').text(total_fee).val(total_fee);
    }

    //wave off to reduce late fee
    var wave_off_cat = function(feeCatId){
        if($('#wave_off'+feeCatId).is(":checked")){
            var calaulated_total_fee = $('.feeAmount'+feeCatId).val();
            var calaulated_total_late_fee = $('.latefeeAmount'+feeCatId).val();
            var calculated_total_month = $('.number_of_month'+feeCatId).val();
            var current_paybleFee = $('.paybleFee').val();            
            if(current_paybleFee==''){
                current_paybleFee=0;
            }
            var current_paybleLateFeeTotal = $('.paybleLateFeeTotal').val();
            if(current_paybleLateFeeTotal==''){
                current_paybleLateFeeTotal=0;
            }

            if(calculated_total_month!=0)
            {
                var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+feeCatId).html(calculated_total_month*calaulated_total_fee);
                var reduced_total_late_fee = $('.calaulated_total_late_fee'+feeCatId).html(0);

                $('.paybleFee').val(current_paybleFee+(calculated_total_month*calaulated_total_fee));
                $('.paybleFee').html(current_paybleFee+(calculated_total_month*calaulated_total_fee));

                $('.paybleLateFeeTotal').html(current_paybleLateFeeTotal+0);
                $('.paybleLateFeeTotal').html(current_paybleLateFeeTotal+0);
            }

        }
        else if($('#wave_off'+feeCatId).is(":not(:checked)")){
            var calaulated_total_fee = $('.feeAmount'+feeCatId).val();
            var calaulated_total_late_fee = $('.latefeeAmount'+feeCatId).val();
            var calculated_total_month = $('.number_of_month'+feeCatId).val();
            var number_of_outdated_amount = $('.number_of_outdated_amount'+feeCatId).val();
            var current_paybleFee = $('.paybleFee').val();
            var current_paybleLateFeeTotal = $('.paybleLateFeeTotal').val();

            if(calculated_total_month!=0)
            {
                var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+feeCatId).html(calculated_total_month*calaulated_total_fee);
                var reduced_total_late_fee = $('.calaulated_total_late_fee'+feeCatId).html(calaulated_total_late_fee*number_of_outdated_amount);

                $('.paybleFee').val(current_paybleFee+(calculated_total_month*calaulated_total_fee));
                $('.paybleFee').html(current_paybleFee+(calculated_total_month*calaulated_total_fee));

                $('.paybleLateFeeTotal').html(current_paybleLateFeeTotal+reduced_total_late_fee);
                $('.paybleLateFeeTotal').html(current_paybleLateFeeTotal+reduced_total_late_fee);
            }
        }
        get_count();
    }
    
    $('.monthlyButtons button').on('click', function(){
            var len = $(this).siblings('.btn.btn-success').length;
            var total = $(this).attr('data-target');
            var data_category = $(this).attr('data-category');
            if(total-len == 1 && $(this).parent().find('.makePaymentBtn.selectedBtn-color').length==1)
            {
                $('.pcat'+data_category).removeClass('selected selectedBtn-color text-white');
                $('.pcat'+data_category+' i').remove();
                $('.calaulated_total_fee'+data_category).html(0);
                $('.calaulated_total_late_fee'+data_category).html(0);
            }else
            {
                var j=0;
                var k=0;
                $('.feeAmount'+data_category).val($('.feeAmountValue'+data_category).text());
                $('.pcat'+data_category).removeClass('selected selectedBtn-color text-white');
                $('.pcat'+data_category+' i').remove();
                for(var i = 1;i <= total; i++)
                {
                    if(!$('.pcat'+data_category+'.pbtn'+i).hasClass('btn-success'))
                    {
                        if($('.pbtn'+i).hasClass('btn-danger'))
                        {
                            k++;
                        }

                        // if($('.pcat'+data_category+'.pbtn'+i).hasClass('selected')){
                        //     if($('.monthlyButtons#'+data_category+' .selected').length==1){
                        //         $('.pcat'+data_category+'.pbtn'+i).removeClass('selected selectedBtn-color text-white');
                        //         $('.pcat'+data_category+'.pbtn'+i+' i').remove();
                        //     }
                        // }else{
                            $('.pcat'+data_category+'.pbtn'+i).addClass('selected');
                            $('.pcat'+data_category+'.pbtn'+i).addClass('selectedBtn-color');
                            $('.pcat'+data_category+'.pbtn'+i).addClass('text-white');
                        // }                      

                        $('.pcat'+data_category+'.pbtn'+i).prepend('<i class="zmdi zmdi-check" aria-hidden="true"></i> ');
                    }
                    j++;
                }
                $('.number_of_month'+data_category).val(Math.abs(len-j));
                $('.number_of_outdated_amount'+data_category).val(k);
                // if($('.monthlyButtons#'+data_category+' .selected').length==1){
                //     if($('.pcat'+data_category).hasClass('selected')){
                //         $('.pcat'+data_category).removeClass('selected selectedBtn-color text-white');
                //         $('.pcat'+data_category+' i').remove();

                //         $('.calaulated_total_fee'+data_category).val(0);
                //         $('.calaulated_total_late_fee'+data_category).val(0);
                //     }
                // }           

                if($('#wave_off'+data_category).is(":checked")){
                    var calaulated_total_fee = $('.feeAmount'+data_category).val();
                    var calaulated_total_late_fee = $('.latefeeAmount'+data_category).val();
                    var calculated_total_month = $('.number_of_month'+data_category).val();

                    if(calculated_total_month!=0)
                    {
                        var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+data_category).html(calculated_total_month*calaulated_total_fee);
                        var reduced_total_late_fee = $('.calaulated_total_late_fee'+data_category).html(0);
                    }

                }
                else if($('#wave_off'+data_category).is(":not(:checked)")){
                    var calaulated_total_fee = $('.feeAmount'+data_category).val();
                    var calaulated_total_late_fee = $('.latefeeAmount'+data_category).val();
                    var calculated_total_month = $('.number_of_month'+data_category).val();
                    var number_of_outdated_amount = $('.number_of_outdated_amount'+data_category).val();

                    if(calculated_total_month!=0)
                    {
                        var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+data_category).html(calculated_total_month*calaulated_total_fee);
                        var reduced_total_late_fee = $('.calaulated_total_late_fee'+data_category).html(calaulated_total_late_fee*number_of_outdated_amount);
                    }
                }
                $('.latefeeAmount'+data_category).val(calaulated_total_late_fee);
            }
            get_count();
    });
    
    var yearlySelection = function(feeCatId){
        var color = $('.yearlyButtons button').attr('data-color');
        $('.ycat'+feeCatId+'.ybtn i').remove();
        if($('.ycat'+feeCatId).hasClass('selected')){
            $('.feeAmount'+feeCatId).val(0);
            $('.ycat'+feeCatId+'.ybtn').removeClass('selected selectedBtn-color text-white');
        }else{
            $('.feeAmount'+feeCatId).val($('.feeAmountValue'+feeCatId).text());
            $('.ycat'+feeCatId+'.ybtn').addClass('selected selectedBtn-color text-white');
            $('.ycat'+feeCatId+'.ybtn').prepend('<i class="zmdi zmdi-check" aria-hidden="true"></i> ');    
        }   
        

        $('.number_of_month'+feeCatId).val(1);
        if(color=='danger'){
            $('.number_of_outdated_amount'+feeCatId).val(1);
        }else{
            $('.number_of_outdated_amount'+feeCatId).val();
        }

        if($('#wave_off'+feeCatId).is(":checked")){
            var calaulated_total_fee = $('.feeAmount'+feeCatId).val();
            var calaulated_total_late_fee = $('.latefeeAmount'+feeCatId).val();
            var calculated_total_month = $('.number_of_month'+feeCatId).val();
            var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+feeCatId).html(calculated_total_month*calaulated_total_fee);
            var reduced_total_late_fee = $('.calaulated_total_late_fee'+feeCatId).html(0);
        }else if($('#wave_off'+feeCatId).is(":not(:checked)")){
            var calaulated_total_fee = $('.feeAmount'+feeCatId).val();
            var calaulated_total_late_fee = $('.latefeeAmount'+feeCatId).val();
            var calculated_total_month = $('.number_of_month'+feeCatId).val();
            var number_of_outdated_amount = $('.number_of_outdated_amount'+feeCatId).val();
            
            var calaulated_total_fee_with_late_fee = $('.calaulated_total_fee'+feeCatId).html(calculated_total_month*calaulated_total_fee);

            var reduced_total_late_fee = $('.calaulated_total_late_fee'+feeCatId).html(calaulated_total_late_fee*number_of_outdated_amount);
        }

        if($('.ycat'+feeCatId).hasClass('selected')){
            
        }else{
            $('.calaulated_total_fee'+feeCatId).html(0);
            $('.calaulated_total_late_fee'+feeCatId).html(0);
        }
        get_count();
    }
</script>                    </div>
                </div>      
                <footer class="footer hidden-xs-down ">
    <p>© Let'sSchool. All rights reserved.</p>
</footer>

<!-- Javascript -->
<!-- Vendors -->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/tether/dist/js/tether.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/moment/min/moment.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<!-- Date Picker-->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/flatpickr/dist/flatpickr.min.js"></script>
<!--sweet alert js-->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
<!--text Editor-->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/trumbowyg/dist/trumbowyg.min.js"></script>
<!-- Vendors: Data tables -->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<!-- App functions and actions -->
<script src="http://45.33.126.69/~letsschoolerp/assets/js/app.min.js"></script>
<!--fancy file upload js-->
<script src="http://45.33.126.69/~letsschoolerp/assets/js/file_upload.js"></script>
<!--select2 js-->
<script src="http://45.33.126.69/~letsschoolerp/assets/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
<!--validationengine js-->
<script src="http://45.33.126.69/~letsschoolerp//assets/validation/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>
<script src="http://45.33.126.69/~letsschoolerp//assets/validation/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<!--custom js-->
<script src="http://45.33.126.69/~letsschoolerp/assets/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        // binds form submission and fields to the validation engine
        jQuery(".validatable").validationEngine('attach', {promptPosition : "bottomLeft", autoPositionUpdate : true});
        
        //flashmessage hide
        setTimeout(function() {
          $('.flashmsg').fadeOut('slow');
        }, 2000); // <-- time in milliseconds
        
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
        
        $("#file-7").change(function(){
            readURL(this);
        });

        $('input[type=file]').change(function(e){
          $in=$(this);
          $('#selectedFileName').html($in.val());
        });
    });

    // Confirmation to switch current session from selected old session
    $('#closeOldSesson').on('click',function (e) {
        e.preventDefault();
        swal({
            title: 'Are you sure?',
            text: "You want to switch on current session.",
            type: 'warning',
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-success',
            confirmButtonText: 'Yes, close it!',
            cancelButtonClass: 'btn btn-secondary',
        }).then(function () {
          window.location.replace('http://45.33.126.69/~letsschoolerp/sysadmin/configuration/old_session/empty');
        });
    });

// Notice info
var noticeInfo = function(modal_name,noticeId)
{
    var form = new FormData();
    form.append('udf2', '00238de3a400fea8f86d0b53fb191cc2');
    form.append('notice_id', noticeId);
    form.append('modal', modal_name);
    $.ajax({
        url:'http://45.33.126.69/~letsschoolerp/sysadmin/load_modal/'+modal_name,
        data: form,
        type:'POST',
        contentType:false,
        processData:false,
        cache:false,
        beforeSend:function(){

        },
        success:function(response){
            var response = $.parseJSON(response);
            $('#modal-default').remove();
            $('body').append(response.data);
            $('#modal-default').modal('show');
        },
        complete:function(){

        }
    })
    }
</script>
            </section>
        </main>
    </body>
    
<!-- Delete Modal COMMON IN ALL PAGES-->
<div class="modal fade" id="modal-delete" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title pull-left text-white"><i class="zmdi zmdi-delete"></i> Delete</h5>
                <button type="button" class="btn btn-link text-white" data-dismiss="modal"><span class="card-title"> <i class="zmdi zmdi-close"></i></span> </button>
                
            </div>
            <div class="modal-body">
                Are you sure you want to delete this?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                <a id="delete_link" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal COMMON IN ALL PAGES-->
<div class="modal fade" id="modal-edit" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title pull-left text-white text-capitalize" id="modal-tablesLabel">&nbsp;</h5>
                <button type="button" class="btn btn-link text-white" data-dismiss="modal"><span class="card-title"> <i class="zmdi zmdi-close"></i></span> </button>
            </div>
            <div class="modal-body myscroll" id="modal-body">
                loading data..
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                <button class="btn btn-info editModal" onclick="custom_print('frame1')">Print</button>
            </div>
        </div>
    </div>
</div>

<script>
function modal(param1 ,param2 ,param3,param4)
{
    var frameheight = '400';
    if(param1=='mark_paid'){
        frameheight = '225';
    }  
    document.getElementById('modal-body').innerHTML = 
        '<iframe id="frame1" src="http://45.33.126.69/~letsschoolerp/modal/popup/'+param1+'/'+param2+'/'+param3+'/'+param4+'" width="100%" height="'+frameheight+'" frameborder="0"></iframe>';

    document.getElementById('modal-tablesLabel').innerHTML = param1.replace(/_/g," ");
        if(param1=='view_receipt'){
            $('.modal-dialog').addClass('modal-lg');
        }
        if(param1=='edit_class'){
            document.getElementsByClassName('modal-footer')[0].style.visibility = 'hidden';
        }
        if(param1.indexOf('edit') > -1){
           document.getElementsByClassName('editModal')[0].style.visibility = 'hidden';
        }else{
            document.getElementsByClassName('editModal')[0].style.visibility = 'visible';
        }
        if(param1=='mark_paid'){
            document.getElementsByClassName('editModal')[0].style.visibility = 'hidden';
        }
}

function modal_delete(param1)
{       
    document.getElementById('delete_link').href = param1;
}

/////////////PRINT A DIV FUNCTION////////////////

function custom_print(div_id)
{
    /*var mywindow = window.open('', 'my div', 'height=400,width=600');
    mywindow.document.write(document.getElementById(div_id).contentWindow.document.body.innerHTML);
    mywindow.print();
    mywindow.close();
    return true;*/

    var frm = document.getElementById(div_id).contentWindow;
    frm.focus();// focus on contentWindow is needed on some ie versions
    frm.print();
    return false;
}

</script>
 
</html>