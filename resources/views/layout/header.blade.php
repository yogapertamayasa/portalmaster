        <!-- ========== HEADER ========== -->
        <header id="header" class="u-header u-header--dark-nav-links-xl u-header--show-hide-xl u-header--static-xl" data-header-fix-moment="500" data-header-fix-effect="slide">
            <div class="u-header__section u-header__shadow-on-show-hide py-4 py-xl-0">
                <!-- Topbar -->
                <div class="container-fluid u-header__hide-content u-header__topbar u-header__topbar-lg border-bottom border-color-8">
                    <div class="d-flex align-items-center">
                        <ul class="list-inline list-inline-dark u-header__topbar-nav-divider--dark mb-0">
                            <li class="list-inline-item mr-0"><a href="tel:(000)999-898-999" class="u-header__navbar-link">(000) 999 - 898 -999</a></li>
                            <li class="list-inline-item mr-0"><a href="mailto:info@mytravel.com" class="u-header__navbar-link">info@mytravel.com</a></li>
                        </ul>
                        <div class="ml-auto d-flex align-items-center">
                            <ul class="list-inline mb-0 mr-2 pr-1">
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.facebook.com/" target="_blank">
                                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://twitter.com/" target="_blank">
                                        <span class="fab fa-twitter btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.instagram.com/" target="_blank">
                                        <span class="fab fa-instagram btn-icon__inner"></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn btn-xs btn-icon btn-pill btn-soft-dark btn-bg-transparent transition-3d-hover" href="https://www.linkedin.com/" target="_blank">
                                        <span class="fab fa-linkedin-in btn-icon__inner"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="position-relative px-3 u-header__login-form dropdown-connector-xl u-header__topbar-divider--dark">
                                <a id="signUpDropdownInvoker"  href="javascript:;" class="d-flex align-items-center text-dark" aria-controls="signUpDropdown" aria-haspopup="true" aria-expanded="true" data-unfold-event="click" data-unfold-target="#signUpDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    <i class="flaticon-user mr-2 ml-1 font-size-18"></i>
                                    <span class="d-inline-block font-size-14 mr-1">Sign in or Register</span>
                                </a>
                                <div id="signUpDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right py-0 mt-0" aria-labelledby="signUpDropdownInvoker" style="min-width: 500px;">
                                    <div class="card rounded-xs">
                                        <form class="js-validate" novalidate="novalidate" method="post">
                                            <!-- Login -->
                                            <div id="login" style="opacity: 1;" data-target-group="idForm" class="animated fadeIn">
                                                <!-- Header -->
                                                <div class="card-header text-center">
                                                    <h3 class="h5 mb-0 font-weight-semi-bold">Login</h3>
                                                </div>
                                                <!-- End Header -->
                                                <div class="card-body pt-6 pb-4">
                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signinSrEmail">Email</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="email" class="form-control" name="email" id="signinSrEmail" placeholder="Email Or Username" aria-label="Email Or Username" aria-describedby="signinEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="signinEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->
                                                    <!-- Form Group -->
                                                    <div class="form-group pb-1">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="signinSrPassword">Password</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="password" class="form-control" name="password" id="signinSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="signinPassword">
                                                                        <span class="flaticon-password font-size-20"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->
                                                    <div class="mb-3 pb-1">
                                                        <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Login</button>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" id="customCheckboxInline1" name="customCheckboxInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customCheckboxInline1">Remember me</label>
                                                        </div>
                                                        <a class="js-animation-link text-primary font-size-14" href="javascript:;" data-target="#forgotPassword" data-link-group="idForm" data-animation-in="fadeIn"><u>Forgot Password?</u></a>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="card-footer__top border-bottom border-color-8 py-3">
                                                        <div class="text-center mt-2 mb-4 pb-1">
                                                            <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                        </div>
                                                        <div class="d-flex mb-3">
                                                            <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="#">
                                                                <span class="fab fa-facebook-f mr-2"></span>
                                                                Facebook
                                                            </a>
                                                            <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="#">
                                                                <span class="fab fa-twitter mr-2"></span>
                                                                Twitter
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card-footer__bottom p-4 text-center font-size-14">
                                                        <span class="text-gray-1">Do not have an account?</span>
                                                        <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Sign Up</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Login -->

                                            <!-- Signup -->
                                            <div id="signup" style="opacity: 0; display: none;" data-target-group="idForm">
                                                <!-- Header -->
                                                <div class="card-header text-center">
                                                    <h3 class="h5 mb-0 font-weight-semi-bold">Register</h3>
                                                </div>
                                                <!-- End Header -->
                                                <div class="card-body pt-5 pb-4">
                                                    <ul class="nav nav-default nav-pills nav-white nav-justified nav-rounded-pill font-weight-medium px-6 pb-5" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="pills-one-code-sample-tab" data-toggle="pill" href="#pills-one-code-sample" role="tab" aria-controls="pills-one-code-sample" aria-selected="true">Normal User</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="pills-two-code-sample-tab" data-toggle="pill" href="#pills-two-code-sample" role="tab" aria-controls="pills-two-code-sample" aria-selected="false">Partner User</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="pills-one-code-sample" role="tabpanel" aria-labelledby="pills-one-code-sample-tab">
                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="uname">User Name</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name" aria-label="User Name" aria-describedby="username" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="username">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="name">Full Name</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" aria-label="Full Name" aria-describedby="normalname" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="normalname">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="signupSrEmail">Email</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="email" class="form-control" name="email" id="signupSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="signupSrPassword">Password</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="password" class="form-control" name="password" id="signupSrPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->
                                                            <div class="mb-3 pb-1">
                                                                <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                            </div>
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" id="customCheckboxInline2" name="customCheckboxInline2" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customCheckboxInline2">I have read and accept the <a href="#">Terms and Privacy Policy</a></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="pills-two-code-sample" role="tabpanel" aria-labelledby="pills-two-code-sample-tab">
                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="puname">User Name</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="text" class="form-control" name="puname" id="puname" placeholder="User Name" aria-label="User Name" aria-describedby="partnerusername" required="" data-msg="Please enter a valid user name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnerusername">
                                                                                <span class="flaticon-user font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="pname">Full Name</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="text" class="form-control" name="pname" id="pname" placeholder="Full Name" aria-label="Full Name" aria-describedby="partnername" required="" data-msg="Please enter a valid name." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="partnername">
                                                                                <span class="flaticon-browser-1 font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="signupPartnerSrEmail">Email</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="email" class="form-control" name="pemail" id="signupPartnerSrEmail" placeholder="Email" aria-label="Email" aria-describedby="signupPartnerEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text" id="signupPartnerEmail">
                                                                                <span class="far fa-envelope font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="signupPartnerSrPassword">Password</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="password" class="form-control" name="Partnerpassword" id="signupPartnerSrPassword" placeholder="Password" aria-label="PartnerPassword" aria-describedby="signupPartnerPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerPassword">
                                                                                <span class="flaticon-password font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <!-- Form Group -->
                                                            <div class="form-group pb-1">
                                                                <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                                    <label class="sr-only" for="signupPartnerSrConfirmPassword">Confirm Password</label>
                                                                    <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                        <input type="password" class="form-control" name="confirmpartnerpassword" id="signupPartnerSrConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupPartnerConfirmPassword" required="" data-msg="Your password is invalid. Please try again." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="signupPartnerConfirmPassword">
                                                                                <span class="fas fa-key font-size-20"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- End Form Group -->

                                                            <div class="mb-3 pb-1">
                                                                <button type="submit" class="btn btn-md btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Register</button>
                                                            </div>
                                                            <div class="d-flex justify-content-between mb-1">
                                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                                    <input type="checkbox" id="customCheckboxInline3" name="customCheckboxInline3" class="custom-control-input">
                                                                    <label class="custom-control-label" for="customCheckboxInline3">I have read and accept the <a href="#">Terms and Privacy Policy</a></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer p-0">
                                                    <div class="card-footer__top border-bottom border-color-8 py-3">
                                                        <div class="text-center mt-2 mb-4 pb-1">
                                                            <span class="d-block text-gray-1 fontsize-14">or continue with</span>
                                                        </div>
                                                        <div class="d-flex mb-3">
                                                            <a class="btn btn-block btn-sm btn-facebook transition-3d-hover" href="#">
                                                                <span class="fab fa-facebook-f mr-2"></span>
                                                                Facebook
                                                            </a>
                                                            <a class="btn btn-block btn-sm btn-twitter transition-3d-hover ml-5 mt-0" href="#">
                                                                <span class="fab fa-twitter mr-2"></span>
                                                                Twitter
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="card-footer__bottom p-4 text-center font-size-14">
                                                        <span class="text-gray-1">Already have an account?</span>
                                                        <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Signup -->

                                            <!-- Forgot Passwrd -->
                                            <div id="forgotPassword" style="opacity: 0; display: none;" data-target-group="idForm">
                                                <!-- Header -->
                                                <div class="card-header bg-light text-center py-3 px-5">
                                                    <h3 class="h6 mb-0 font-weight-semi-bold">Recover password</h3>
                                                </div>
                                                <!-- End Header -->
                                                <div class="card-body px-10 py-5">
                                                    <!-- Form Group -->
                                                    <div class="form-group">
                                                        <div class="js-form-message js-focus-state border border-width-2 border-color-8 rounded-sm">
                                                            <label class="sr-only" for="recoverSrEmail">Your email</label>
                                                            <div class="input-group input-group-tranparent input-group-borderless input-group-radiusless">
                                                                <input type="email" class="form-control" name="email" id="recoverSrEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmail" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="recoverEmail">
                                                                        <span class="far fa-envelope font-size-20"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Form Group -->
                                                    <div class="mb-2">
                                                        <button type="submit" class="btn btn-sm btn-block btn-blue-1 rounded-xs font-weight-bold transition-3d-hover">Recover Password</button>
                                                    </div>
                                                    <div class="text-center font-size-14">
                                                        <span class="text-gray-1">Remember your password?</span>
                                                        <a class="js-animation-link font-weight-bold" href="javascript:;" data-target="#login" data-link-group="idForm" data-animation-in="fadeIn">Log In</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Forgot Passwrd -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="position-relative pl-3 language-switcher dropdown-connector-xl u-header__topbar-divider--dark">
                                <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center ml-1" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                    <span class="d-inline-block">EUR</span>
                                </a>
                                <div id="languageDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right mt-0" aria-labelledby="languageDropdownInvoker">
                                    <a class="dropdown-item" href="#">USD</a>
                                    <a class="dropdown-item active" href="#">EUR</a>
                                    <a class="dropdown-item" href="#">TUR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->
                <div id="logoAndNav" class="container-fluid py-xl-2 border-bottom-xl">
                    <!-- Nav -->
                    <nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space">
                        <!-- Logo -->
                        <a class="navbar-brand u-header__navbar-brand-default u-header__navbar-brand-center u-header__navbar-brand-text-dark-xl" href="../home/index.html" aria-label="MyTour">
                            <img src="../../assets/img/logo/logo-portal-scroll.png" style="max-width: 265px">
                        </a>
                        <!-- End Logo -->

                        <!-- Responsive Toggle Button -->
                        <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--primary order-2 ml-3" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                            <span id="hamburgerTrigger" class="u-hamburger__box">
                                <span class="u-hamburger__inner"></span>
                            </span>
                        </button>
                        <!-- End Responsive Toggle Button -->

                        <!-- Navigation -->
                        <div id="navBar" class="navbar-collapse u-header__navbar-collapse collapse order-2 order-xl-0 pt-4 p-xl-0 position-relative">
                            <ul class="navbar-nav u-header__navbar-nav">
                                <!-- Home -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="homeMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu">Home</a>
                                    <!-- Home Submenu -->
                                    <!-- <ul id="homeSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="homeMenu" style="min-width: 230px;">
                                        <li class="active"><a class="nav-link u-header__sub-menu-nav-link" href="../home/index.html">Home v1 All Services</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v2.html">Home v2 All Services</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v3.html">Home v3 All Services</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v4.html">Home v4 Hotel</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v5.html">Home v5 Tour</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v6.html">Home v6 Activity</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v7.html">Home v7 Rental</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v8.html">Home v8 Car</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v9.html">Home v9 Yacht</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/home-v10.html">Home v10 Flights</a></li>
                                    </ul> -->
                                    <!-- End Home Submenu -->
                                </li>
                                <!-- End Home -->

                                <!-- Hotel -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="hotelMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="hotelSubMenu">Hotel</a>
                                    <!-- Hotel Submenu -->
                                    <ul id="hotelSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="hotelMenu" style="min-width: 230px;">                            
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="/hotels/hotel-list">Hotel List</a></li>
<!--                                         <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-list-02.html">List With Map</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v1.html">Hotel Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v2.html">Hotel Single v2</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-single-v3.html">Hotel Single v3</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../hotels/hotel-booking.html">Hotel Booking</a></li> -->
                                    </ul>
                                    <!-- End Hotel Submenu -->
                                </li>
                                <!-- End Hotel -->

                                <!-- Tour -->
                                <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                                    <a id="tourMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Tour</a>

                                    <!-- Tour - Mega Menu -->
                                    <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded u-header__mega-menu-position-right-fix-10" aria-labelledby="tourMegaMenu">
                                        <div class="row">
                                            <div class="col-12 col-xl-3dot64">
                                                <span class="u-header__sub-menu-title">List Style</span>
                                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-list.html">Sidebar</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-fullwidth.html">Full Width</a></li>
                                                </ul>
                                                <span class="u-header__sub-menu-title">Tour Booking</span>
                                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-booking.html">Tour Booking</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-xl-3dot64">
                                                <span class="u-header__sub-menu-title">Single</span>
                                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v1.html">Tour Single v1</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../tour/tour-single-v2.html">Tour Single v2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-xl">
                                                <!-- Banner Image -->
                                                <div class="u-header__banner u-header__banner-no-overlay rounded-xs" style="background-image: url(../../assets/img/240x243/img1.jpg);">
                                                    <div class="u-header__banner-content u-header__banner-content-not-centered">
                                                        <span class="u-header__banner-title">Special Offers</span>
                                                        <p class="u-header__banner-text">Find Your Perfect Hotels Get the best prices on 20,000+ properties the best  prices on</p>
                                                        <a class="btn btn-white text-blue btn-sm rounded-xs transition-3d-hover" href="#">See Deals</a>
                                                    </div>
                                                </div>
                                                <!-- End Banner Image -->
                                            </div>
                                        </div>
                                    </div>
                                  <!-- End Tour - Mega Menu -->
                                </li>
                                <!-- End Tour -->

                                <!-- Activity -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="ActivityMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="ActivitySubMenu">Activity</a>
                                    <!-- Activity Submenu -->
                                    <ul id="ActivitySubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="ActivityMenu" style="min-width: 230px;">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-fullwidth.html">Full Width</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v1.html">Activity Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-single-v2.html">Activity Single v2</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../activities/activities-booking.html">Activity Booking</a></li>
                                    </ul>
                                    <!-- End Activity Submenu -->
                                </li>
                                <!-- End Activity -->

                                <!-- Rental -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="rentalMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="rentalSubMenu">Rental</a>
                                    <!-- Rental Submenu -->
                                    <ul id="rentalSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="rentalMenu" style="min-width: 230px;">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-list-02.html">List With Map</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v1.html">Rental Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-single-v2.html">Rental Single v2</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../rental/rental-booking.html">Rental Booking</a></li>
                                    </ul>
                                    <!-- End Rental Submenu -->
                                </li>
                                <!-- End Rental -->

                                <!-- Car -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="carMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="carSubMenu">Car</a>
                                    <!-- Car Submenu -->
                                    <ul id="carSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="carMenu" style="min-width: 230px;">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-fullwidth.html">Full Width</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v1.html">Car Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-single-v2.html">Car Single v2</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../cars/cars-booking.html">Car Booking</a></li>
                                    </ul>
                                    <!-- End Car Submenu -->
                                </li>
                                <!-- End Car -->

                                <!-- Yacht -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="yachtMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="yachtSubMenu">Yacht</a>
                                    <!-- Yacht Submenu -->
                                    <ul id="yachtSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="yachtMenu" style="min-width: 230px;">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-fullwidth.html">Full Width</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v1.html">Yacht Single v1</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-single-v2.html">Yacht Single v2</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../yacht/yacht-booking.html">Yacht Booking</a></li>
                                    </ul>
                                    <!-- End Yacht Submenu -->
                                </li>
                                <!-- End Yacht -->

                                <!-- Flights -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="flightsMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle u-header__nav-link-border" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="flightsSubMenu">Flights</a>
                                    <!-- Flights Submenu -->
                                    <ul id="flightsSubMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu-rounded u-header__sub-menu-bordered hs-sub-menu-right u-header__sub-menu--spacer" aria-labelledby="flightsMenu" style="min-width: 230px;">
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-list.html">Sidebar</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link" href="../flights/flights-booking.html">Flights Booking</a></li>
                                    </ul>
                                    <!-- End Flights Submenu -->
                                </li>
                                <!-- End Flights -->

                                <!-- Pages -->
                                <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="722px" data-position="right">
                                    <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <!-- Pages - Mega Menu -->
                                    <div class="hs-mega-menu u-header__sub-menu u-header__sub-menu-rounded" aria-labelledby="pagesMegaMenu">
                                        <div class="row">
                                            <div class="col-12 col-xl-4">
                                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/destination.html">Destination</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/about.html">About us</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/contact.html">Contact</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/terms-conditions.html">Terms of Use</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/faq.html">FAQs</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <ul class="u-header__sub-menu-nav-group u-header__sub-menu-bordered mb-3">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-list.html">Blog</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/blog-single.html">Blog Single</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/become-expert.html">Become Expert</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link" href="../others/404.html">404</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-12 col-xl-4">
                                                <a href="../../documentation/index.html" class="btn btn-soft-primary mb-3 w-100"><span class="fas fa-laptop-code mr-2"></span>Documentation</a>
                                                <a href="../../starter/index.html" class="btn btn-soft-secondary w-100"><span class="fas fa-th mr-2"></span>Starter</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Pages - Mega Menu -->
                                </li>
                                <!-- End Pages -->
                                
                            </ul>
                        </div>
                        <!-- End Navigation -->

                        <!-- Shopping Cart -->
                        <div class="pl-2 pl-md-4 ml-auto shopping-cart">
                            <a id="shoppingCartDropdownInvoker" class="btn-text-secondary py-4 position-relative" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                <span class="flaticon-shopping-basket font-size-25 text-primary-max-lg"></span>
                            </a>

                            <div id="shoppingCartDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right dropdown-menu-right-fix-wd-10 p-0 mt-0 w-max-sm-100 u-unfold--css-animation font-size-16" aria-labelledby="shoppingCartDropdownInvoker" style="width: 500px; animation-duration: 300ms; right: 0px;">
                                <div class="card">
                                    <!-- Header -->
                                    <div class="card-header border-color-8 py-3 px-5">
                                        <span class="font-weight-semi-bold">Your Cart</span>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body p-0">
                                        <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                                            <div class="media p-2 p-md-3">
                                                <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                                    <img class="img-fluid rounded-pill" src="../../assets/img/80x80/img1.jpg" alt="Image Description">
                                                </div>
                                                <div class="media-body position-relative pl-md-1">
                                                    <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                                        <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                                        <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <span class="d-block text-gray-1">Price  £590.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-2 px-md-3 py-2 py-md-1 border-bottom border-color-8">
                                            <div class="media p-2 p-md-3">
                                                <div class="u-avatar u-lg-avatar-md mr-2 mr-md-3">
                                                    <img class="img-fluid rounded-pill" src="../../assets/img/80x80/img2.jpg" alt="Image Description">
                                                </div>
                                                <div class="media-body position-relative pl-md-1">
                                                    <div class="d-flex justify-content-between align-items-start mb-2 mb-md-3">
                                                        <span class="d-block text-dark font-weight-bold">Hyatt Centric Times  Square</span>
                                                        <button type="button" class="close close-rounded position-md-absolute right-0 ml-2" aria-label="Close">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </div>
                                                    <span class="d-block text-gray-1">Price  £590.00 </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->

                                    <!-- Footer -->
                                    <div class="card-footer border-0 p-3 px-md-5 py-md-4">
                                        <div class="mb-4 pb-md-1">
                                            <span class="d-block font-weight-semi-bold">Subtotal: £1180.00</span>
                                        </div>
                                        <div class="d-md-flex button-inline-group-md mb-1">
                                            <a class="btn btn-block btn-md btn-gray-1 rounded-xs font-weight-bold transition-3d-hover" href="#">
                                                View cart
                                            </a>
                                            <a class="btn btn-block btn-md btn-blue-1 rounded-xs font-weight-bold transition-3d-hover mt-md-0 ml-md-5" href="#">
                                                Check Out
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Footer -->
                                </div>
                            </div>
                        </div>
                        <!-- End Shopping Cart -->

                        <!-- Button -->
                        <div class="pl-4 ml-1 u-header__last-item-btn u-header__last-item-btn-xl">
                            <select class="js-select selectpicker dropdown-select min-width-256 w-100 w-md-auto border-radius-3 mb-3 mb-md-0 mr-md-5"
                                data-style="border border-width-2 border-color-8">
                                <option class="border-bottom py-2 font-size-16" value="one">English</option>
                                <option class="border-bottom py-2 font-size-16" value="two">Indonesia</option>
                                <option class="border-bottom py-2 font-size-16" value="two">Francais</option>
                                <option class="py-2 font-size-16" value="four">Espanol</option>
                            </select>
                        </div>
                        <!-- End Button -->
                    </nav>
                    <!-- End Nav -->
                </div>
            </div>
        </header>
        <!-- ========== END HEADER ========== -->