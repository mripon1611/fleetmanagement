@extends('template')

@section('maincontents')

<!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Authentication Modal</h4>
                                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing
                                                            elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item"  style="float: left;">
                                                            <a href="../index.html"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="auth-modal.html#!">Authentication</a>
                                                        </li>
                                                        <li class="breadcrumb-item"  style="float: left;"><a href="auth-modal.html#!">Modal</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <!-- Normal sign in card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Normal Sign in</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Normal Login Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#sign-in">Normal Sign
                                                                in</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Normal sign in card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Social Sign in card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Social Sign in</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Social Login Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#sign-in-social">Social
                                                                Sign in</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Social Sign in card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Register card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Register</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Register Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#register">Register</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Register card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Lock Screen Modal card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Lock Screen Modal</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Lock screen Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#lock-screen">Lock
                                                                Screen</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Lock Screen Modal card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Confirm Mail Modal card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Confirm Mail Modal</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Confirmation Mail Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#confirm-mail">Confirm
                                                                Mail</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Confirm Mail Modal card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Forgot Password card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Forgot Password</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Forgot Password Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#reset-password">Forgot
                                                                Password</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Forgot Password card end -->
                                            </div>
                                            <div class="col-sm-4">
                                                <!-- Tabbed modal card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Tabbed modal</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <p>
                                                            Click on Below Button For Tabbed Modal.
                                                        </p>
                                                        <p class="text-center">
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#tabbed-form">Tabbed
                                                                Form</button>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Tabbed modal card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                    <!-- Modal normal sign in start -->
                                    <div id="sign-in" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center txt-primary">Sign In</h3>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="input-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Your Email Address">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="row m-t-25 text-left">
                                                                <div class="col-sm-6  ">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr"><i
                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                            <span class="text-inverse">Remember
                                                                                me</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6   forgot-phone text-right">
                                                                    <a href="auth-reset-password.html"
                                                                        class="text-right f-w-600 text-inverse"> Forgot
                                                                        Password?</a>
                                                                </div>
                                                            </div>
                                                            <div class="row m-t-15">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">Sign
                                                                        in</button>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <p class="text-inverse text-left m-b-0">Thank you
                                                                        and enjoy our website.</p>
                                                                    <p class="text-inverse text-left"><b>Your
                                                                            Authentication Team</b></p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                                                        alt="small-logo.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal normal sign in end-->
                                    <!-- Modal Social sign in start -->
                                    <div id="sign-in-social" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-0">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center txt-primary">Sign In</h3>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <p class="text-inverse m-t-15 text-left">Don't have
                                                                        an account? <a href="auth-sign-up-social.html">
                                                                            Register </a> here for free!</p>
                                                                </div>
                                                            </div>
                                                            <p class="text-inverse b-b-default text-left p-b-5">Sign in
                                                                easily with your social account:</p>
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-facebook m-b-20 btn-block"><i
                                                                            class="icofont icofont-social-facebook"></i>Sign
                                                                        in with facebook</button>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-twitter btn-block"><i
                                                                            class="icofont icofont-social-twitter"></i>Sign
                                                                        in with twitter</button>
                                                                </div>
                                                            </div>
                                                            <p class="text-inverse b-b-default text-left p-b-5">Sign in
                                                                with your regular account</p>
                                                            <div class="input-group">
                                                                <input type="email" class="form-control"
                                                                    placeholder="Username">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="password">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="row m-t-25 text-left">
                                                                <div class="col-sm-6  ">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr"><i
                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                            <span class="text-inverse">Remember
                                                                                me</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6   forgot-phone text-right">
                                                                    <a href="auth-reset-password.html"
                                                                        class="text-right f-w-600 text-inverse"> forgot
                                                                        Password?</a>
                                                                </div>
                                                            </div>
                                                            <div class="row m-t-15">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center ">LOGIN</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Social sign in end-->
                                    <!-- Register modal start -->
                                    <div id="register" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center txt-primary">Sign up. It is
                                                                        fast and easy.</h3>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Choose Username">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Email Address">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Choose Password">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="row m-t-25 text-left">
                                                                <div class="col-md-12">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr"><i
                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                            <span class="text-inverse">I read and accept
                                                                                <a href="auth-modal.html#">Terms &amp;
                                                                                    Conditions</a></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="checkbox-fade fade-in-primary">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <span class="cr"><i
                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                            <span class="text-inverse">Send me the <a
                                                                                    href="auth-modal.html">Newsletter</a>
                                                                                weekly.</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row m-t-15">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">Sign
                                                                        up now</button>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <p class="text-inverse text-left m-b-0">Thank you
                                                                        and enjoy our website.</p>
                                                                    <p class="text-inverse text-left"><b>Your
                                                                            Authentication Team</b></p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                                                        alt="small-logo.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Register modal end-->
                                    <!-- Lock screen start -->
                                    <div id="lock-screen" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center"><i
                                                                            class="icofont icofont-lock text-primary f-80"></i>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <p class="text-inverse b-b-default text-right">Back to <a
                                                                    href="auth-sign-in-social.html">Login</a></p>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Email Address">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center"><i
                                                                            class="icofont icofont-lock"></i> Lock
                                                                        Screen </button>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <p class="text-inverse text-left m-b-0">Thank you
                                                                        and enjoy our website.</p>
                                                                    <p class="text-inverse text-left"><b>Your
                                                                            Authentication Team</b></p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                                                        alt="small-logo.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- lock screen end-->
                                    <!-- confirm mail start -->
                                    <div id="confirm-mail" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-20">
                                                                <div class="col-md-12 confirm">
                                                                    <h3 class="text-center txt-primary"><i
                                                                            class="icofont icofont-check-circled text-primary"></i>
                                                                        Confirmation</h3>
                                                                </div>
                                                            </div>
                                                            <p class="text-inverse text-left m-t-15 f-16"><b>Dear
                                                                    Username, <br /> Please confirm your email
                                                                    address.</b></p>
                                                            <p class="text-inverse text-left m-b-0">Welcome to our
                                                                website. Really Exciting to have you here!</p>
                                                            <p class="text-inverse text-left m-b-20">Please click the
                                                                link below to verify that this is your email address.
                                                            </p>
                                                            <p class="text-inverse text-left m-b-30">Thank you and enjoy
                                                                our website.</p>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="icofont icofont-verification-check"></i></span></div>
                                                                <input type="text" class="form-control"
                                                                    value="https://www.website.com/signup/verify?id657&amp;key=7364fr5">
                                                            </div>
                                                            <div class="row m-t-15">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">Confirm</button>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <p class="text-inverse text-left m-b-0 m-t-10">Thank
                                                                        you and enjoy our website.</p>
                                                                    <p class="text-inverse text-left"><b>Your
                                                                            Authentication Team</b></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Confirm mail end-->
                                    <!-- Reset Password start -->
                                    <div id="reset-password" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="login-card card-block login-card-modal">
                                                <form class="md-float-material">
                                                    <div class="text-center">
                                                        <img src="../files/assets/images/auth/logo.png" alt="logo.png">
                                                    </div>
                                                    <div class="card m-t-15">
                                                        <div class="auth-box card-block">
                                                            <div class="row m-b-0">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-left">Recover your Password</h3>
                                                                </div>
                                                            </div>
                                                            <p class="text-inverse b-b-default text-right">Back to <a
                                                                    href="auth-modal.html#">Login</a></p>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Your Email Address">
                                                                <span class="md-line"></span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button type="button"
                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">Reset
                                                                        Password</button>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <p class="text-inverse text-left m-b-0">Thank you
                                                                        and enjoy our website.</p>
                                                                    <p class="text-inverse text-left"><b>Your
                                                                            Authentication Team</b></p>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                                                        alt="small-logo.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- end of form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reset Password end-->
                                    <!-- tabbed form modal start -->
                                    <div id="tabbed-form" class="modal fade mixed-form" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content card">
                                                <div class="modal-body card-block">
                                                    <div class="login-card-modal">
                                                        <form class="md-float-material">
                                                            <div class="tabbed-modal">
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab"
                                                                            href="auth-modal.html#sign_in" role="tab">
                                                                            <h6>Sign in</h6>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="auth-modal.html#regi" role="tab">
                                                                            <h6>Register</h6>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content">
                                                                    <div class="tab-pane active" id="sign_in"
                                                                        role="tabpanel">
                                                                        <div class="auth-box">
                                                                            <div class="row m-b-20">
                                                                                <div class="col-md-3">
                                                                                    <h3 class="text-center txt-primary">
                                                                                        Sign In</h3>
                                                                                </div>
                                                                                <div class="col-md-9">
                                                                                    <p
                                                                                        class="text-inverse m-t-25 text-left">
                                                                                        Don't have an account? <a
                                                                                            href="auth-modal.html"> Register </a> here
                                                                                        for free!</p>
                                                                                </div>
                                                                            </div>
                                                                            <p
                                                                                class="text-inverse b-b-default text-left p-b-5">
                                                                                Sign in easily with your social account:
                                                                            </p>
                                                                            <div class="row m-b-20">
                                                                                <div class="col-md-6">
                                                                                    <button
                                                                                        class="btn btn-facebook m-b-20"><i
                                                                                            class="icofont icofont-social-facebook"></i>Sign
                                                                                        in with facebook</button>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <button
                                                                                        class="btn btn-twitter m-b-20"><i
                                                                                            class="icofont icofont-social-twitter"></i>Sign
                                                                                        in with twitter</button>
                                                                                </div>
                                                                            </div>
                                                                            <p
                                                                                class="text-inverse b-b-default text-left p-b-5">
                                                                                Sign in with your regular account</p>
                                                                            <div class="input-group">
                                                                                <input type="email" class="form-control"
                                                                                    placeholder="Username">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    placeholder="password">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="row m-t-25 text-left">
                                                                                <div class="col-sm-6  ">
                                                                                    <div
                                                                                        class="checkbox-fade fade-in-primary">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                value="">
                                                                                            <span class="cr"><i
                                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                                            <span
                                                                                                class="text-inverse">Remember
                                                                                                me</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-sm-6   forgot-phone text-right">
                                                                                    <a href="https://demo.dashboardpack.com/adminty-html/default/forgot-password.html"
                                                                                        class="text-right f-w-600 text-inverse">
                                                                                        forgot Password?</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-t-15">
                                                                                <div class="col-md-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">LOGIN</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="regi" role="tabpanel">
                                                                        <div class="auth-box">
                                                                            <div class="row m-b-20">
                                                                                <div class="col-md-12">
                                                                                    <h3 class="text-center txt-primary">
                                                                                        Sign up. It is fast and easy.
                                                                                    </h3>
                                                                                </div>
                                                                            </div>
                                                                            <hr />
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Choose Username">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control"
                                                                                    placeholder="Your Email Address">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    placeholder="Choose Password">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <input type="password"
                                                                                    class="form-control"
                                                                                    placeholder="Confirm Password">
                                                                                <span class="md-line"></span>
                                                                            </div>
                                                                            <div class="row m-t-25 text-left">
                                                                                <div class="col-md-12">
                                                                                    <div
                                                                                        class="checkbox-fade fade-in-primary">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                value="">
                                                                                            <span class="cr"><i
                                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                                            <span class="text-inverse">I
                                                                                                read and accept <a
                                                                                                    href="auth-modal.html#">Terms &amp;
                                                                                                    Conditions</a></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div
                                                                                        class="checkbox-fade fade-in-primary">
                                                                                        <label>
                                                                                            <input type="checkbox"
                                                                                                value="">
                                                                                            <span class="cr"><i
                                                                                                    class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                                            <span
                                                                                                class="text-inverse">Send
                                                                                                me the <a
                                                                                                    href="auth-modal.html">Newsletter</a>
                                                                                                weekly</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-t-15">
                                                                                <div class="col-md-12">
                                                                                    <button type="button"
                                                                                        class="btn btn-primary btn-md btn-block waves-effect text-center">Sign
                                                                                        up now</button>
                                                                                </div>
                                                                            </div>
                                                                            <hr />
                                                                            <div class="row">
                                                                                <div class="col-md-10">
                                                                                    <p
                                                                                        class="text-inverse text-left m-b-0">
                                                                                        Thank you and enjoy our website.
                                                                                    </p>
                                                                                    <p class="text-inverse text-left">
                                                                                        <b>Your Authentication Team</b>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <img src="../files/assets/images/auth/Logo-small-bottom.png"
                                                                                        alt="small-logo.png">
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
                                    </div>
                                    <!-- tabbed form modal end -->

@endsection