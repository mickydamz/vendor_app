@extends('nk1/layouts/nk5layout')

@section('content')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Wizard Form</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Using the <a href="http://www.jquery-steps.com/" target="_blank">jQuery Steps</a> plugin, you can simply make step based form. You can combine with <a href="https://jqueryvalidation.org/" target="_blank">jQuery Validation</a> plugin for form validation. For a full overview of the Steps plugin, check out the <a href="http://www.jquery-steps.com/" target="_blank">documentation</a>.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Wizard Form - Basic</h4>
                                                <div class="nk-block-des">
                                                    <p>A basic demostration of wizard form.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <form action="#" class="nk-wizard nk-wizard-simple is-alter" id="wizard-01">
                                                    <div class="nk-wizard-head">
                                                        <h5>Step 1</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-first-name">First Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-first-name" name="fw-first-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-last-name">Last Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-last-name" name="fw-last-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-email-address">Email Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" id="fw-email-address" name="fw-email-address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-mobile-number">Mobile Number</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-mobile-number" name="fw-mobile-number" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-nationality">Country</label>
                                                                    <div class="form-control-wrap ">
                                                                        <div class="form-control-select">
                                                                            <select class="form-control required" data-msg="Required" id="fw-nationality" name="fw-nationality" required>
                                                                                <option value="">Select Country</option>
                                                                                <option value="us">United State</option>
                                                                                <option value="uk">United KingDom</option>
                                                                                <option value="fr">France</option>
                                                                                <option value="ch">China</option>
                                                                                <option value="cr">Czech Republic</option>
                                                                                <option value="cb">Colombia</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div>
                                                    </div>
                                                    <div class="nk-wizard-head">
                                                        <h5>Step 2</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-username">Username</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-username" name="fw-username" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-password">Password</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="password" data-msg="Required" class="form-control required" id="fw-password" name="fw-password" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-re-password">Re-Password</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="password" data-msg="Required" class="form-control required" id="fw-re-password" name="fw-re-password" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-12">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" data-msg="Required" class="custom-control-input required" name="fw-policy" id="fw-policy" required>
                                                                    <label class="custom-control-label" for="fw-policy">I agreed Terms and policy</label>
                                                                </div>
                                                            </div>
                                                        </div><!-- .row -->
                                                    </div>
                                                    <div class="nk-wizard-head">
                                                        <h5>Step 3</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-2">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-token-address">Token Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-token-address" name="fw-token-address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="form-label">I want to contribute</label>
                                                                <ul class="d-flex flex-wrap g-2">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" data-msg="Required" class="custom-control-input required" name="fw-ethcount" id="fw-lt1eth" required>
                                                                            <label class="custom-control-label" for="fw-lt1eth">Less than 1 ETH</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" data-msg="Required" class="custom-control-input required" name="fw-ethcount" id="fw-ov1eth" required>
                                                                            <label class="custom-control-label" for="fw-ov1eth">Over than 1 ETH</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-telegram-username">Telegram Username</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-telegram-username" name="fw-telegram-username" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Wizard Form - Vertical</h4>
                                                <div class="nk-block-des">
                                                    <p>A Vertical demostration of wizard form.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <form action="#" class="nk-wizard nk-wizard-simple is-vertical is-alter" id="wizard-02">
                                                    <div class="nk-wizard-head">
                                                        <h5>Personal Info</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-first-name">First Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-first-name" name="fw-vr-first-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-last-name">Last Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-last-name" name="fw-vr-last-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-email-address">Email Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" data-msg-email="Wrong Email" class="form-control required email" id="fw-vr-email-address" name="fw-vr-email-address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-mobile-number">Mobile Number</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-mobile-number" name="fw-vr-mobile-number" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-nationality">Country</label>
                                                                    <div class="form-control-wrap ">
                                                                        <div class="form-control-select">
                                                                            <select class="form-control required" data-msg="Required" id="fw-vr-nationality" name="fw-vr-nationality" required>
                                                                                <option value="">Select Country</option>
                                                                                <option value="us">United State</option>
                                                                                <option value="uk">United KingDom</option>
                                                                                <option value="fr">France</option>
                                                                                <option value="ch">China</option>
                                                                                <option value="cr">Czech Republic</option>
                                                                                <option value="cb">Colombia</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div>
                                                    </div>
                                                    <div class="nk-wizard-head">
                                                        <h5>User Settings</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-username">Username</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-username" name="fw-vr-username" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                        <div class="row gy-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-password">Password</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="password" data-msg="Required" class="form-control required" id="fw-vr-password" name="fw-vr-password" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-re-password">Re-Password</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="password" data-msg="Required" class="form-control required" id="fw-vr-re-password" name="fw-vr-re-password" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-md-12">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" data-msg="Required" class="custom-control-input required" name="fw-vr-policy" id="fw-vr-policy" required>
                                                                    <label class="custom-control-label" for="fw-vr-policy">I agreed Terms and policy</label>
                                                                </div>
                                                            </div>
                                                        </div><!-- .row -->
                                                    </div>
                                                    <div class="nk-wizard-head">
                                                        <h5>Payment Info</h5>
                                                    </div>
                                                    <div class="nk-wizard-content">
                                                        <div class="row gy-2">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-token-address">Token Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-token-address" name="fw-vr-token-address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label class="form-label">I want to contribute</label>
                                                                <ul class="d-flex flex-wrap g-2">
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" data-msg="Required" class="custom-control-input required" name="fw-vr-ethcount" id="fw-vr-lt1eth" required>
                                                                            <label class="custom-control-label" for="fw-vr-lt1eth">Less than 1 ETH</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" data-msg="Required" class="custom-control-input required" name="fw-vr-ethcount" id="fw-vr-ov1eth" required>
                                                                            <label class="custom-control-label" for="fw-vr-ov1eth">Over than 1 ETH</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-telegram-username">Telegram Username</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" data-msg="Required" class="form-control required" id="fw-vr-telegram-username" name="fw-vr-telegram-username" required>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    @endsection