@extends('nk1/layouts/nk5layout')

@section('content')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block">
                                                    <div class="nk-block-head">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="nk-block-title">Connected with Social Account</h5>
                                                            <div class="nk-block-des">
                                                                <p>You can connect with your social account such as facebook, google etc to make easier to login into account.</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head -->
                                                    <h6 class="lead-text">Connect to Facebook</h6>
                                                    <div class="card card-bordered">
                                                        <div class="card-inner">
                                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                <div class="media media-center gx-3 wide-xs">
                                                                    <div class="media-object">
                                                                        <em class="icon icon-circle icon-circle-lg ni ni-facebook-f"></em>
                                                                    </div>
                                                                    <div class="media-content">
                                                                        <p>You have successfully connected with your facebook account, you can easily log in using your account too.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-block-actions flex-shrink-0">
                                                                    <a href="#" class="btn btn-lg btn-danger">Revoke Access</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-card-inner -->
                                                    </div><!-- .nk-card -->
                                                    <h6 class="lead-text">Connect to Google</h6>
                                                    <div class="card card-bordered">
                                                        <div class="card-inner">
                                                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                                                <div class="media media-center gx-3 wide-xs">
                                                                    <div class="media-object">
                                                                        <em class="icon icon-circle icon-circle-lg ni ni-google"></em>
                                                                    </div>
                                                                    <div class="media-content">
                                                                        <p>You can connect with your google account. <em class="d-block text-soft">Not connected yet</em></p>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-block-actions flex-shrink-0">
                                                                    <a href="#" class="btn btn-lg btn-dim btn-primary">Connect</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-card-inner -->
                                                    </div><!-- .nk-card -->
                                                    <div class="nk-block-head nk-block-head-sm">
                                                        <div class="nk-block-head-content">
                                                            <h6 class="nk-block-title">Import Contacts <a href="#" class="link link-primary ml-auto">Import from Google</a></h6>
                                                            <div class="nk-block-des">
                                                                <p>You have not imported contacts from your mobile phone.</p>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-block-head -->
                                                </div>
                                            </div>
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                            <div class="user-action">
                                                                <div class="dropdown">
                                                                    <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- .user-card -->
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="user-account-info py-0">
                                                            <h6 class="overline-title-alt">Nio Wallet Account</h6>
                                                            <div class="user-balance">12.395769 <small class="currency currency-btc">BTC</small></div>
                                                            <div class="user-balance-sub">Locked <span>0.344939 <span class="currency currency-btc">BTC</span></span></div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                        <li><a href="/crypto1-user-profile-regular"><em class="icon ni ni-user-fill-c"></em><span>Personal Infomation</span></a></li>
                                                            <li><a href="/crypto1-user-profile-notification"><em class="icon ni ni-bell-fill"></em><span>Notifications</span></a></li>
                                                            <li><a href="/crypto1-user-profile-activity"><em class="icon ni ni-activity-round-fill"></em><span>Account Activity</span></a></li>
                                                            <li><a class="active" href="/crypto1-user-profile-setting"><em class="icon ni ni-lock-alt-fill"></em><span>Security Settings</span></a></li>
                                                            <li><a href="/crypto1-user-profile-social"><em class="icon ni ni-grid-add-fill-c"></em><span>Connected with Social</span></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
       
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="full-name">Full Name</label>
                                        <input type="text" class="form-control form-control-lg" id="full-name" value="Abu Bin Ishtiyak" placeholder="Enter Full name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="display-name">Display Name</label>
                                        <input type="text" class="form-control form-control-lg" id="display-name" value="Ishtiyak" placeholder="Enter display name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <input type="text" class="form-control form-control-lg" id="phone-no" value="+880" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="birth-day">Date of Birth</label>
                                        <input type="text" class="form-control form-control-lg date-picker" id="birth-day" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="latest-sale">
                                        <label class="custom-control-label" for="latest-sale">Use full name to display </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l1">Address Line 1</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l1" value="2337 Kildeer Drive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-l2">Address Line 2</label>
                                        <input type="text" class="form-control form-control-lg" id="address-l2" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-st">State</label>
                                        <input type="text" class="form-control form-control-lg" id="address-st" value="Kentucky">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="address-county">Country</label>
                                        <select class="form-select" id="address-county" data-ui="lg">
                                            <option>Canada</option>
                                            <option>United State</option>
                                            <option>United Kindom</option>
                                            <option>Australia</option>
                                            <option>India</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" class="btn btn-lg btn-primary">Update Address</a>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    @endsection